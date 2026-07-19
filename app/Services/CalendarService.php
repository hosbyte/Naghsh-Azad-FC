<?php

namespace App\Services;

use App\Models\Schedule;
use Carbon\Carbon;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class CalendarService
{
    public static function make($year = null, $month = null): array
    {

        /*
        |--------------------------------------------------------------------------
        | تعیین ماه جاری
        |--------------------------------------------------------------------------
        */

        if ($year && $month) {


            $gregorian = CalendarUtils::toGregorian(
                (int) $year,
                (int) $month,
                1
            );


            $currentDate = Carbon::create(
                (int) $gregorian[0],
                (int) $gregorian[1],
                (int) $gregorian[2]
            );


        } else {


            $currentDate = Carbon::today();


        }



        $firstDay = $currentDate->copy()->startOfMonth();



        /*
        |--------------------------------------------------------------------------
        | اطلاعات ماه شمسی
        |--------------------------------------------------------------------------
        */

        if ($year && $month) 
        {

            $jalaliDate = Jalalian::fromFormat(
                'Y-m-d',
                $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01'
            );

        } 
        else 
        {

            $jalaliDate = Jalalian::fromCarbon($firstDay);

        }

        /*
        |--------------------------------------------------------------------------
        | دریافت برنامه های ماه
        |--------------------------------------------------------------------------
        */

        $startDate = $jalaliDate->toCarbon()->startOfDay();

        $endDate = Jalalian::fromFormat(
            'Y-m-d',
            $jalaliDate->getYear() . '-' .
            str_pad($jalaliDate->getMonth(), 2, '0', STR_PAD_LEFT)
            . '-' .
            $jalaliDate->getMonthDays()
        )->toCarbon()->endOfDay();



        $schedules = Schedule::whereBetween(
            'date',
            [
                $startDate->format('Y-m-d'),
                $endDate->format('Y-m-d')
            ]
        )
        ->get()
        ->groupBy(function ($schedule) {

            return Jalalian::fromCarbon(
                Carbon::parse($schedule->date)
            )->getDay();

        });



        /*
        |--------------------------------------------------------------------------
        | ساخت روزهای تقویم
        |--------------------------------------------------------------------------
        */

        $calendarDays = [];


        $emptyDays = self::convertWeekDay(
            $firstDay->dayOfWeek
        );



        for ($i = 0; $i < $emptyDays; $i++) {


            $calendarDays[] = [

                'day' => null,

                'events' => []

            ];


        }




        $daysInMonth = $jalaliDate->getMonthDays();



        for ($day = 1; $day <= $daysInMonth; $day++) {


            $calendarDays[] = [

                'day' => $day,

                'events' => $schedules[$day] ?? []

            ];


        }





        /*
        |--------------------------------------------------------------------------
        | ماه قبل و بعد
        |--------------------------------------------------------------------------
        */

        $currentYear = $jalaliDate->getYear();

        $currentMonth = $jalaliDate->getMonth();




        // ماه قبل

        $previousYear = $currentYear;

        $previousMonth = $currentMonth - 1;



        if ($previousMonth == 0) {


            $previousMonth = 12;

            $previousYear--;


        }




        // ماه بعد

        $nextYear = $currentYear;

        $nextMonth = $currentMonth + 1;



        if ($nextMonth == 13) {


            $nextMonth = 1;

            $nextYear++;


        }





        return [


            'year' => $currentYear,


            'month' => $currentMonth,


            'monthName' => $jalaliDate->format('%B'),



            'days' => $calendarDays,



            'previous' => [

                'year' => $previousYear,

                'month' => $previousMonth,

            ],



            'next' => [

                'year' => $nextYear,

                'month' => $nextMonth,

            ],



        ];

    }





    /**
     * تبدیل روز هفته میلادی به هفته فارسی
     */

    private static function convertWeekDay(int $day): int
    {

        return match ($day) {


            6 => 0, // شنبه

            0 => 1, // یکشنبه

            1 => 2, // دوشنبه

            2 => 3, // سه شنبه

            3 => 4, // چهارشنبه

            4 => 5, // پنجشنبه

            5 => 6, // جمعه


        };

    }

}
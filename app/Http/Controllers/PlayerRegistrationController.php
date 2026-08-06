<?php

namespace App\Http\Controllers;

use App\Models\PlayerRegistration;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Morilog\Jalali\CalendarUtils;

class PlayerRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([


            'name' => [
                'required',
                'string',
                'max:255'
            ],


            'family' => [
                'required',
                'string',
                'max:255'
            ],


            'father_name' => [
                'required',
                'string',
                'max:255'
            ],


            'father_phone' => [
                'required',
                'string',
                'max:11'
            ],


            'mother_phone' => [
                'required',
                'string',
                'max:11'
            ],


            'birth_date' => [
                'required'
            ],


            'position' => [
                'required'
            ],


            'foot' => [
                'required'
            ],


        ]);

        /*
        تبدیل تاریخ شمسی به میلادی
        */
        $birthDate = str_replace(
            ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'],
            ['0','1','2','3','4','5','6','7','8','9'],
            $validated['birth_date']
        );



        $dateParts = explode('/', $birthDate);



        $gregorian = CalendarUtils::toGregorian(
            (int) $dateParts[0],
            (int) $dateParts[1],
            (int) $dateParts[2]
        );



        $validated['birth_date'] = sprintf(
            '%04d-%02d-%02d',
            $gregorian[0],
            $gregorian[1],
            $gregorian[2]
        );
        // $dateParts = explode('/', $validated['birth_date']);


        // $gregorian = CalendarUtils::toGregorian(
        //     (int) $dateParts[0],
        //     (int) $dateParts[1],
        //     (int) $dateParts[2]
        // );


        // $validated['birth_date'] = implode('-', $gregorian);

        /*
        ذخیره اطلاعات
        */

        PlayerRegistration::create($validated);

        return back()->with(
            'success',
            'اطلاعات شما با موفقیت ثبت شد. کارشناسان آکادمی جهت هماهنگی تست با شما تماس خواهند گرفت.'
        );

    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerRegistration $playerRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayerRegistration $playerRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlayerRegistration $playerRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlayerRegistration $playerRegistration)
    {
        //
    }
}

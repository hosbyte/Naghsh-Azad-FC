<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ageGroups = [
            '13 سال',
            '15 سال',
            '17 سال',
            '18 سال',
            '19 سال',
            '21 سال',
            'بزرگسال',
        ];

        foreach($ageGroups as $ageGroup)
        {
            League::updateOrCreate(
                [
                    'name' => $ageGroup,
                    'level' => 'premier',
                ],
                [
                    'is_active' => true,
                ]
            );

            League::updateOrCreate(
                [
                    'name' => $ageGroup,
                    'level' => 'division1',
                ],
                [
                    'is_active' => true,
                ]
            );
        }
    }
}

<?php

namespace App\Services;

use App\Models\League;
use Illuminate\Support\Collection;

class LeagueStandingsService
{
    /**
     * محاسبه جدول رده‌بندی یک لیگ
    */
    public function getStandings(League $league): Collection
    {
        $teams = $league->teams()
            ->orderby('name')
            ->get();
        
        $matches = $league->matches()
                ->get();

        $standings = collect();

        foreach($teams as $team)
        {
            $stats = [
                'team_id' => $team->id,
                'team_name' => $team->name,

                'played' => 0,
                'wins' => 0,
                'draws' => 0,
                'losses' => 0,

                'goals_for' => 0,
                'goals_against' => 0,
                'goal_difference' => 0,

                'points' => 0,
            ];
        }

        foreach($matches as $match)
        {
            //تیم میزبان
            if($match->home_team_id === $team->id)
            {
                $stats['played']++;

                $stats['goals_for'] += $match->home_score;
                $stats['goals_against'] += $match->away_score;

                if($match->home_score > $match->away_score)
                {
                    $stats['wins']++;
                    $stats['points'] += 3;
                }

                elseif($match->home_score === $match->away_score)
                {
                    $stats['draws']++;
                    $stats['points'] += 1;
                }

                else
                {
                    $stats['losses']++;
                }
            }

            //تیم مهمان
            elseif($match->away_team_id === $team->id)
            {
                $stats['played']++;

                $stats['goals_for'] += $match->away_score;
                $stats['goals_againts'] += $match->home_score;

                if($match->away_score > $match->home_score)
                {
                    $stats['wins']++;
                    $stats['points'] += 3;
                }

                elseif($match->away_score === $match->home_score)
                {
                    $stats['draws']++;
                    $stats['points'] += 1;
                }

                else
                {
                    $stats['losses']++;
                }
            }
        }

        $stats['goal_difference'] = 
            $stats['goals_for'] - $stats['goals_against'];

        $standings->push($stats);

        /*
        |--------------------------------------------------------------------------
        | مرتب‌سازی جدول
        |--------------------------------------------------------------------------
        |
        | 1. امتیاز بیشتر
        | 2. تفاضل گل بیشتر
        | 3. گل زده بیشتر
        |
        */

        return $standings
            ->sortBy([
                ['points', 'desc'],
                ['goal_difference', 'desc'],
                ['goals_for', 'desc'],
            ])
            ->values()
            ->map(function ($team, $index) {

                $team['rank'] = $index + 1;

                return $team;
            });
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Services\LeagueStandingsService;

class LeagueController extends Controller
{
    public function index()
    {
        $premierLeagues = League::where('level', 'premier')
            ->where('is_active', true)
            ->orderBy('id')
            ->get();

        $divisionOneLeague = League::where('level', 'division1')
            ->where('is_active', true)
            ->orderBy('id')
            ->get();

        return view('leagues.index', compact(
            'premierLeagues',
            'divisionOneLeague'
        ));
    }

    public function show(League $league, LeagueStandingsService $standingsService)
    {
        abort_unless($league->is_active, 404);

        $standings = $standingsService->getStandings($league);

        return view('leagues.show', compact(
            'league',
            'standings'
        ));
    }

    public function instagram(League $league, LeagueStandingsService $standingsService)
    {
        abort_unless($league->is_active, 404);

        $standings = $standingsService->getStandings($league);

        return view('leagues.instagram-table', compact('league', 'standings'));
    }

    public function downloadInstagram(League $league)
    {
        abort_unless($league->is_active, 404);

        return 'Download Instagram Table';
    }
}

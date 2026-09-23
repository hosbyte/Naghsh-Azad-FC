<div id="leagueTable" @class([
    'instagram-export' => $exportMode ?? false,
])>

    {{-- عنوان لیگ --}}
    <div class="league-title">

        <span class="title-line"></span>

        <div class="title-box">

            @if ($league->name === 'بزرگسال')
                {{ $league->level === 'premier' ? 'لیگ برتر بزرگسالان' : 'لیگ دسته ۱ بزرگسالان' }}
            @else
                {{ $league->level === 'premier' ? 'لیگ برتر' : 'لیگ دسته ۱' }}

                زیر {{ $league->name }}
            @endif

        </div>

        <span class="title-line"></span>

    </div>


    {{-- جدول --}}
    <div class="league-table-container">

        <table class="league-table">

            <thead>
                <tr>

                    <th>رتبه</th>

                    <th class="team-column">
                        نام تیم
                    </th>

                    <th>امتیاز</th>
                    <th>بازی</th>
                    <th>برد</th>
                    <th>مساوی</th>
                    <th>باخت</th>
                    <th>گل زده</th>
                    <th>گل خورده</th>
                    <th>تفاضل گل</th>

                </tr>
            </thead>


            <tbody>

                @forelse($standings as $team)
                    <tr>

                        <td class="rank">
                            {{ $team['rank'] }}
                        </td>

                        <td class="team-name">
                            {{ $team['team_name'] }}
                        </td>

                        <td>{{ $team['points'] }}</td>
                        <td>{{ $team['played'] }}</td>
                        <td>{{ $team['wins'] }}</td>
                        <td>{{ $team['draws'] }}</td>
                        <td>{{ $team['losses'] }}</td>
                        <td>{{ $team['goals_for'] }}</td>
                        <td>{{ $team['goals_against'] }}</td>
                        <td>{{ $team['goal_difference'] }}</td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="10" class="league-empty">
                            هنوز تیمی برای این لیگ ثبت نشده است.
                        </td>

                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>
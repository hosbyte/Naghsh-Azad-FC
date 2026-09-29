<div class="league-table-container">

    <table class="table league-table">

        <thead>
            <tr>
                <th class="col-rank">رتبه</th>
                <th class="col-team">نام تیم</th>
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
                    <td class="rank {{ $team['rank'] <= 3 ? 'rank-top' : '' }}">{{ $team['rank'] }}</td>
                    <td class="team-name">{{ $team['team_name'] }}</td>
                    <td class="points">{{ $team['points'] }}</td>
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
                    <td colspan="10" class="empty-table">
                        هنوز تیمی برای این لیگ ثبت نشده است.
                    </td>
                </tr>
            @endforelse

        </tbody>

    </table>

</div>

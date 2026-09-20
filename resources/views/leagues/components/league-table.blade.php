<div class="league-table-container">

    <table class="league-table">

        <thead>

            <tr>

                <th>#</th>

                <th class="team-column">
                    تیم
                </th>

                <th>
                    بازی
                </th>

                <th>
                    برد
                </th>

                <th>
                    مساوی
                </th>

                <th>
                    باخت
                </th>

                <th>
                    گل زده
                </th>

                <th>
                    گل خورده
                </th>

                <th>
                    تفاضل
                </th>

                <th>
                    امتیاز
                </th>

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


                    <td>
                        {{ $team['played'] }}
                    </td>


                    <td>
                        {{ $team['wins'] }}
                    </td>


                    <td>
                        {{ $team['draws'] }}
                    </td>


                    <td>
                        {{ $team['losses'] }}
                    </td>


                    <td>
                        {{ $team['goals_for'] }}
                    </td>


                    <td>
                        {{ $team['goals_against'] }}
                    </td>


                    <td>
                        {{ $team['goal_difference'] }}
                    </td>


                    <td class="points">
                        {{ $team['points'] }}
                    </td>

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
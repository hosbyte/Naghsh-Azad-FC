@props(['title', 'teams' => [], 'colorClass' => 'league-blue'])

<div class="league-table-card {{ $colorClass }}">

    <div class="league-table-header">
        <div>
            <span class="league-table-label">جدول مسابقات</span>
            <h2>{{ $title }}</h2>
        </div>

        <span class="league-season">
            فصل جاری
        </span>
    </div>

    <div class="league-table-wrapper">
        <table class="league-table">

            <thead>
                <tr>
                    <th>رتبه</th>
                    <th class="team-column">تیم</th>
                    <th>امتیاز</th>
                    <th>بازی</th>
                    <th>برد</th>
                    <th>مساوی</th>
                    <th>باخت</th>
                    <th>گل زده</th>
                    <th>گل خورده</th>
                    <th>تفاضل</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($teams as $team)
                    <tr>
                        <td>
                            <span class="team-rank">
                                {{ $team['rank'] ?? '-' }}
                            </span>
                        </td>

                        <td class="team-name">
                            {{ $team['name'] ?? '-' }}
                        </td>

                        <td class="team-points">
                            {{ $team['points'] ?? '-' }}
                        </td>

                        <td>{{ $team['played'] ?? '-' }}</td>
                        <td>{{ $team['won'] ?? '-' }}</td>
                        <td>{{ $team['drawn'] ?? '-' }}</td>
                        <td>{{ $team['lost'] ?? '-' }}</td>
                        <td>{{ $team['goals_for'] ?? '-' }}</td>
                        <td>{{ $team['goals_against'] ?? '-' }}</td>
                        <td>{{ $team['goal_difference'] ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="empty-table">
                            هنوز اطلاعاتی برای این جدول ثبت نشده است.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
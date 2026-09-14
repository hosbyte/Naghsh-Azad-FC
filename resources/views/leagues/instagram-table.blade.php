<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'جدول مسابقات' }}</title>

    <link rel="stylesheet" href="{{ asset('css/instagram-table.css') }}">
</head>

<body>

    <main class="instagram-table-page {{ $colorClass ?? 'instagram-blue' }}">

        <section class="instagram-table-card">

            {{-- فضای خالی برای لوگوی پیج اینستاگرام --}}
            <div class="instagram-logo-space">
                <span>
                    فضای لوگوی پیج اینستاگرام
                </span>
            </div>


            {{-- سربرگ جدول --}}
            <header class="instagram-table-header">

                <span class="instagram-small-title">
                    آکادمی فوتبال نقش آزاد
                </span>

                <h1>
                    {{ $title ?? 'جدول مسابقات' }}
                </h1>

                <span class="instagram-season">
                    فصل جاری
                </span>

            </header>


            {{-- جدول تیم‌ها --}}
            <div class="instagram-table-wrapper">

                <table class="instagram-table">

                    <thead>
                        <tr>
                            <th>رتبه</th>
                            <th class="instagram-team-column">تیم</th>
                            <th>امتیاز</th>
                            <th>بازی</th>
                            <th>برد</th>
                            <th>مساوی</th>
                            <th>باخت</th>
                            <th>زده</th>
                            <th>خورده</th>
                            <th>تفاضل</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($teams ?? [] as $team)
                            <tr>

                                <td>
                                    <span class="instagram-rank">
                                        {{ $team['rank'] ?? '-' }}
                                    </span>
                                </td>

                                <td class="instagram-team-name">
                                    {{ $team['name'] ?? '-' }}
                                </td>

                                <td class="instagram-points">
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
                                <td colspan="10" class="instagram-empty">
                                    اطلاعات جدول هنوز ثبت نشده است.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>


            {{-- توضیح پایین تصویر --}}
            <footer class="instagram-table-footer">

                <span>
                    جدول مسابقات فصل جاری
                </span>

                <span>
                    نقش آزاد
                </span>

            </footer>

        </section>

    </main>

</body>

</html>

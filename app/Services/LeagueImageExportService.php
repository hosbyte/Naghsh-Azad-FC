<?php

namespace App\Services;

use Spatie\Browsershot\Browsershot;

class LeagueImageExportService
{
    public function test(): string
    {
        $path = storage_path('app/public/test-league.png');

        Browsershot::html('
            <html>
                <body style="
                    margin: 0;
                    width: 700px;
                    height: 1200px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #000000;
                    font-family: Arial, sans-serif;
                ">
                    <div style="
                        width: 600px;
                        padding: 50px;
                        background: white;
                        border-radius: 30px;
                        text-align: center;
                    ">
                        <h1>تست جدول لیگ</h1>
                        <p>Browsershot با موفقیت کار می‌کند.</p>
                    </div>
                </body>
            </html>
        ')
        ->windowSize(700, 1200)
        ->save($path);

        return $path;
    }
}
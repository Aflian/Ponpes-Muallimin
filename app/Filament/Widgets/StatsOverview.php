<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Berita;
use App\Models\Artikel;
use App\Models\Akademik;
use App\Models\Teachers;
use App\Models\Pendaftaran;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $hitungGuru = Teachers::count();
        $hitungBerita = Berita::count();
        $hitungAkademik = Akademik::count();
        $hitungArtikel = Artikel::count();
        $hitungPendaftar = Pendaftaran::count();
        $hitungPengguna = User::count();
        return [
            Stat::make('Total Guru', number_format($hitungGuru))
                ->icon('heroicon-o-academic-cap')
                ->color('success'),

            Stat::make('Total Pendaftar', number_format($hitungPendaftar))
                ->icon('heroicon-o-user-plus')
                ->color('primary'),

            Stat::make('Total Pengguna', number_format($hitungPengguna))
                ->icon('heroicon-o-users')
                ->color('info'),

            Stat::make('Total Postingan Akademik', number_format($hitungAkademik))
                ->icon('heroicon-o-book-open')
                ->color('warning'),

            Stat::make('Total Postingan Artikel', number_format($hitungArtikel))
                ->icon('heroicon-o-document-text')
                ->color('indigo'),

            Stat::make('Total Postingan Berita', number_format($hitungBerita))
                ->icon('heroicon-o-newspaper')
                ->color('danger'),
        ];
    }
}

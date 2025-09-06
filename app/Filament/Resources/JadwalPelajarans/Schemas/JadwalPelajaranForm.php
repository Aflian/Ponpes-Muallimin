<?php

namespace App\Filament\Resources\JadwalPelajarans\Schemas;

use App\Models\Teachers;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;

class JadwalPelajaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hari')
                    ->label('Hari')
                    ->required(),

                TextInput::make('mapel')
                    ->label('Mata Pelajaran')
                    ->required(),

                Select::make('teacher_id')
                    ->label('Guru')
                    ->options(Teachers::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->required(),

                TimePicker::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->required(),

                TimePicker::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->required(),
            ]);
    }
}

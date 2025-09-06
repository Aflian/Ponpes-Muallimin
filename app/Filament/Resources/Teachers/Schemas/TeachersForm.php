<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class TeachersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Guru')
                    ->required(),
                TextInput::make('mapel')
                    ->label('Mata Pelajaran')
                    ->required(),
                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'LAKI-LAKI' => 'LAKI-LAKI',
                        'PEREMPUAN' => 'PEREMPUAN',
                    ])
                    ->required(),
                TextInput::make('noTlp')
                    ->label('Nomor Telepon')
                    ->required(),
                TextInput::make('alamat')
                    ->label('Alamat Guru')
                    ->required(),
                TextInput::make('pendidikan')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('S1-Serjana Komputer')
                    ->required(),
                TextInput::make('agama')
                    ->label('Agama')
                    ->required(),
                FileUpload::make('foto')
                    ->required()
                    ->label('Foto Guru')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->visibility('public')
                    ->directory('FotoGuru')
                    ->maxSize(1024),
            ]);
    }
}

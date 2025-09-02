<?php

namespace App\Filament\Resources\StrukturOrganisasis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class StrukturOrganisasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                FileUpload::make('foto')
                    ->image()
                    ->imageEditor()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('StrukturFoto')
                    ->maxSize(1024),
            ]);
    }
}

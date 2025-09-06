<?php

namespace App\Filament\Resources\Sambutans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SambutanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->default('Sambutan Kepala Sekolah'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

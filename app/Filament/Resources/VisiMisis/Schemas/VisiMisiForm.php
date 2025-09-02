<?php

namespace App\Filament\Resources\VisiMisis\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisiMisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('visi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

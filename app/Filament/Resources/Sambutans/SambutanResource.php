<?php

namespace App\Filament\Resources\Sambutans;

use App\Filament\Resources\Sambutans\Pages\CreateSambutan;
use App\Filament\Resources\Sambutans\Pages\EditSambutan;
use App\Filament\Resources\Sambutans\Pages\ListSambutans;
use App\Filament\Resources\Sambutans\Schemas\SambutanForm;
use App\Filament\Resources\Sambutans\Tables\SambutansTable;
use App\Models\Sambutan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SambutanResource extends Resource
{
    protected static ?string $model = Sambutan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SambutanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SambutansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSambutans::route('/'),
            'create' => CreateSambutan::route('/create'),
            'edit' => EditSambutan::route('/{record}/edit'),
        ];
    }
}

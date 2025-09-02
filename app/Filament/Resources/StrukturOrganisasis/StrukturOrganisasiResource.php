<?php

namespace App\Filament\Resources\StrukturOrganisasis;

use App\Filament\Resources\StrukturOrganisasis\Pages\CreateStrukturOrganisasi;
use App\Filament\Resources\StrukturOrganisasis\Pages\EditStrukturOrganisasi;
use App\Filament\Resources\StrukturOrganisasis\Pages\ListStrukturOrganisasis;
use App\Filament\Resources\StrukturOrganisasis\Schemas\StrukturOrganisasiForm;
use App\Filament\Resources\StrukturOrganisasis\Tables\StrukturOrganisasisTable;
use App\Models\StrukturOrganisasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StrukturOrganisasiResource extends Resource
{
    protected static ?string $model = StrukturOrganisasi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StrukturOrganisasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StrukturOrganisasisTable::configure($table);
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
            'index' => ListStrukturOrganisasis::route('/'),
            'create' => CreateStrukturOrganisasi::route('/create'),
            'edit' => EditStrukturOrganisasi::route('/{record}/edit'),
        ];
    }
}

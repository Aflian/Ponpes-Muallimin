<?php

namespace App\Filament\Resources\Akademiks;

use App\Filament\Resources\Akademiks\Pages\CreateAkademik;
use App\Filament\Resources\Akademiks\Pages\EditAkademik;
use App\Filament\Resources\Akademiks\Pages\ListAkademiks;
use App\Filament\Resources\Akademiks\Schemas\AkademikForm;
use App\Filament\Resources\Akademiks\Tables\AkademiksTable;
use App\Models\Akademik;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AkademikResource extends Resource
{
    protected static ?string $model = Akademik::class;
    protected static string | UnitEnum | null $navigationGroup = 'Post';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookOpen;
    protected static ?string $navigationLabel = 'Artikel Akademik';
    public static function form(Schema $schema): Schema
    {
        return AkademikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AkademiksTable::configure($table);
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
            'index' => ListAkademiks::route('/'),
            'create' => CreateAkademik::route('/create'),
            'edit' => EditAkademik::route('/{record}/edit'),
        ];
    }
}

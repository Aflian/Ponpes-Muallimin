<?php

namespace App\Filament\Resources\Sambutans\Pages;

use App\Filament\Resources\Sambutans\SambutanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSambutan extends EditRecord
{
    protected static string $resource = SambutanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

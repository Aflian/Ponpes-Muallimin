<?php

namespace App\Filament\Resources\Akademiks\Pages;

use App\Filament\Resources\Akademiks\AkademikResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAkademik extends EditRecord
{
    protected static string $resource = AkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

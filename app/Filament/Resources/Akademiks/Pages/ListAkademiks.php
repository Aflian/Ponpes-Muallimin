<?php

namespace App\Filament\Resources\Akademiks\Pages;

use App\Filament\Resources\Akademiks\AkademikResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAkademiks extends ListRecords
{
    protected static string $resource = AkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

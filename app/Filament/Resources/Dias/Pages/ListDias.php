<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDias extends ListRecords
{
    protected static string $resource = DiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

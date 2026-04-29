<?php

namespace App\Filament\Resources\Placas\Pages;

use App\Filament\Resources\Placas\PlacaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlacas extends ListRecords
{
    protected static string $resource = PlacaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

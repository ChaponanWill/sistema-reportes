<?php

namespace App\Filament\Resources\Cosechadors\Pages;

use App\Filament\Resources\Cosechadors\CosechadorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCosechadors extends ListRecords
{
    protected static string $resource = CosechadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

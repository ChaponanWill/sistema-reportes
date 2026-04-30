<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDias extends ListRecords
{
    protected static string $resource = DiaResource::class;


    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

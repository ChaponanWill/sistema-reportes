<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiasResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDias extends ViewRecord
{
    protected static string $resource = DiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

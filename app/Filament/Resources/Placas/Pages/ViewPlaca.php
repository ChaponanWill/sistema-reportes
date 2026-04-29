<?php

namespace App\Filament\Resources\Placas\Pages;

use App\Filament\Resources\Placas\PlacaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlaca extends ViewRecord
{
    protected static string $resource = PlacaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

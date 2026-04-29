<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDia extends ViewRecord
{
    protected static string $resource = DiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Cosechadors\Pages;

use App\Filament\Resources\Cosechadors\CosechadorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCosechador extends ViewRecord
{
    protected static string $resource = CosechadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Placas\Pages;

use App\Filament\Resources\Placas\PlacaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlaca extends EditRecord
{
    protected static string $resource = PlacaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

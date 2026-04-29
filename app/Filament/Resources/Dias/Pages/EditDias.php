<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiasResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDias extends EditRecord
{
    protected static string $resource = DiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

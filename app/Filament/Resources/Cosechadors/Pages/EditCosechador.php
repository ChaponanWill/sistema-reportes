<?php

namespace App\Filament\Resources\Cosechadors\Pages;

use App\Filament\Resources\Cosechadors\CosechadorResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCosechador extends EditRecord
{
    protected static string $resource = CosechadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Dias\Pages;

use App\Filament\Resources\Dias\DiaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDia extends EditRecord
{
    protected static string $resource = DiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

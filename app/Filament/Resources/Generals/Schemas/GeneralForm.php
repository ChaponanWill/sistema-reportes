<?php

namespace App\Filament\Resources\Generals\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GeneralForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('dni')
                    ->numeric()
                    // Asegura que el DNI tenga exactamente 8 dígitos
                    ->minLength(8)
                    ->maxLength(8)
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('nombres')
                    ->required(),
            ]);
    }
}

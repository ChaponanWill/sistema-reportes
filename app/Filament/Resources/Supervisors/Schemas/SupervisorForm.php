<?php

namespace App\Filament\Resources\Supervisors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupervisorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('dni')
                    ->numeric()
                    // Asegura que el DNI tenga exactamente 8 dígitos
                    ->length(8)
                    ->unique(ignoreRecord: true)
                    ->required(),
                TextInput::make('nombres')
                    ->required(),
                Select::make('general_id')
                    ->relationship('general', 'dni')
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Cosechadors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CosechadorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('dni')
                    ->required(),
                TextInput::make('nombres')
                    ->required(),
                Select::make('placa_id')
                    ->relationship('placa', 'id')
                    ->required(),
                Select::make('grupo_id')
                    ->relationship('grupo', 'id')
                    ->required(),
            ]);
    }
}

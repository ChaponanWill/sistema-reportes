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
                    ->required(),
                TextInput::make('nombres')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Grupos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GrupoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Grupo')
                    ->unique(ignoreRecord: true)
                    ->required(),
                Select::make('supervisor_id')
                    ->relationship('supervisor', 'dni')
                    ->searchable()
                    ->preload()
                    ->getOptionLabelFromRecordUsing(fn($record)=>$record->dni . ' - ' . $record->nombres)
                    ->required(),
            ]);
    }
}

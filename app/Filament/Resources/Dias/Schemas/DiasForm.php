<?php

namespace App\Filament\Resources\Dias\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DiasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('fecha')
                    ->required(),
                Select::make('cosechador_id')
                    ->relationship('cosechador', 'dni')
                    ->getOptionLabelFromRecordUsing(fn($record)=>$record->dni . ' - ' . $record->nombres)
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('grupo_id')
                    ->relationship('grupo', 'Grupo')
                    ->required(),
            ]);
    }
}

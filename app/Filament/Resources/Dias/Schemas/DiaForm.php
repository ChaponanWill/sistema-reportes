<?php

namespace App\Filament\Resources\Dias\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DiaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('fecha')
                    ->required(),
                Select::make('cosechador_id')
                    ->relationship('cosechador', 'dni')
                    // dni + nombres
                    ->getOptionLabelFromRecordUsing(fn($record) => $record->dni . ' - ' . $record->nombres)
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('grupo_id')
                    ->relationship('grupo', 'Grupo')
                    ->getOptionLabelFromRecordUsing(fn($record) => $record->Grupo . ' - ' . $record->supervisor->nombres)
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('placa_id')
                    ->relationship('placa', 'placa')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Dias\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DiaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('fecha')
                    ->date('d/m/Y'),
                TextEntry::make('cosechador.dni')
                    // dni + nombres
                    ->getStateUsing(fn($record) => $record->cosechador->dni . ' - ' . $record->cosechador->nombres)
                    ->label('Cosechador'),
                TextEntry::make('grupo.Grupo')
                    ->label('Grupo')
                    ->getStateUsing(fn($record) => $record->grupo->Grupo . ' - ' . $record->grupo->supervisor->nombres),
                TextEntry::make('placa.placa')
                    ->label('Placa'),
            ]);
    }
}

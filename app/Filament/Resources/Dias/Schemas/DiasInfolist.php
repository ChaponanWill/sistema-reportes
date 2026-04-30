<?php

namespace App\Filament\Resources\Dias\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DiasInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('fecha')
                    ->date(),
                TextEntry::make('cosechador.dni')
                    ->label('Cosechador')
                    ->getStateUsing(fn($record) => $record->cosechador ? $record->cosechador->dni . ' - ' . $record->cosechador->nombres : '-'),
                TextEntry::make('grupo.Grupo')
                    ->label('Grupo'),
            ]);
    }
}

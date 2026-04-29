<?php

namespace App\Filament\Resources\Grupos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class GrupoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('Grupo'),
                TextEntry::make('supervisor.dni')
                    ->label('Supervisor')
                    ->getStateUsing(function ($record){
                        return $record->supervisor->dni . ' - ' . $record->supervisor->nombres;
                    })
            ]);
    }
}

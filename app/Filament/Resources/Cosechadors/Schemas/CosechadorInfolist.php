<?php

namespace App\Filament\Resources\Cosechadors\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CosechadorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('dni'),
                TextEntry::make('nombres'),
                TextEntry::make('placa.placa')
                    ->label('Placa'),  
            ]);
    }
}

<?php

namespace App\Filament\Resources\Dias;

use App\Filament\Resources\Dias\Pages\CreateDias;
use App\Filament\Resources\Dias\Pages\EditDias;
use App\Filament\Resources\Dias\Pages\ListDias;
use App\Filament\Resources\Dias\Pages\ViewDias;
use App\Filament\Resources\Dias\Schemas\DiasForm;
use App\Filament\Resources\Dias\Schemas\DiasInfolist;
use App\Filament\Resources\Dias\Tables\DiasTable;
use App\Models\Dias;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DiasResource extends Resource
{
    protected static ?string $model = Dias::class;
        // Cambiar nombres para el menú de navegación
    protected static ?string $navigationLabel = 'Días de Cosecha';
    protected static ?string $pluralLabel = 'Días de Cosecha';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CalendarDays;

    public static function form(Schema $schema): Schema
    {
        return DiasForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DiasInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDias::route('/'),
            'create' => CreateDias::route('/create'),
            'view' => ViewDias::route('/{record}'),
            'edit' => EditDias::route('/{record}/edit'),
        ];
    }
}

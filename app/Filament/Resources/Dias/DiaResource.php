<?php

namespace App\Filament\Resources\Dias;

use App\Filament\Resources\Dias\Pages\CreateDia;
use App\Filament\Resources\Dias\Pages\EditDia;
use App\Filament\Resources\Dias\Pages\ListDias;
use App\Filament\Resources\Dias\Pages\ViewDia;
use App\Filament\Resources\Dias\Schemas\DiaForm;
use App\Filament\Resources\Dias\Schemas\DiaInfolist;
use App\Filament\Resources\Dias\Tables\DiasTable;
use App\Models\Dia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DiaResource extends Resource
{
    protected static ?string $model = Dia::class;

    protected static ?string $navigationLabel = 'Días de Cosecha';
    protected static ?string $pluralLabel = 'Días de Cosecha';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CalendarDays;

    public static function form(Schema $schema): Schema
    {
        return DiaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DiaInfolist::configure($schema);
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
            'create' => CreateDia::route('/create'),
            'view' => ViewDia::route('/{record}'),
            'edit' => EditDia::route('/{record}/edit'),
        ];
    }
}

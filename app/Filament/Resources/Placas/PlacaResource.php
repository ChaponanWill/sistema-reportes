<?php

namespace App\Filament\Resources\Placas;

use App\Filament\Resources\Placas\Pages\CreatePlaca;
use App\Filament\Resources\Placas\Pages\EditPlaca;
use App\Filament\Resources\Placas\Pages\ListPlacas;
use App\Filament\Resources\Placas\Pages\ViewPlaca;
use App\Filament\Resources\Placas\Schemas\PlacaForm;
use App\Filament\Resources\Placas\Schemas\PlacaInfolist;
use App\Filament\Resources\Placas\Tables\PlacasTable;
use App\Models\Placa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlacaResource extends Resource
{
    protected static ?string $model = Placa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;

    public static function form(Schema $schema): Schema
    {
        return PlacaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlacaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlacasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            RelationManagers\CosechadoresRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlacas::route('/'),
            'create' => CreatePlaca::route('/create'),
            'view' => ViewPlaca::route('/{record}'),
            'edit' => EditPlaca::route('/{record}/edit'),
        ];
    }
}

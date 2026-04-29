<?php

namespace App\Filament\Resources\Cosechadors;

use App\Filament\Resources\Cosechadors\Pages\CreateCosechador;
use App\Filament\Resources\Cosechadors\Pages\EditCosechador;
use App\Filament\Resources\Cosechadors\Pages\ListCosechadors;
use App\Filament\Resources\Cosechadors\Pages\ViewCosechador;
use App\Filament\Resources\Cosechadors\Schemas\CosechadorForm;
use App\Filament\Resources\Cosechadors\Schemas\CosechadorInfolist;
use App\Filament\Resources\Cosechadors\Tables\CosechadorsTable;
use App\Models\Cosechador;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CosechadorResource extends Resource
{
    protected static ?string $model = Cosechador::class;

     protected static ?string $navigationLabel = 'Cosechadores';
    protected static ?string $pluralLabel = 'Cosechadores';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserCircle;

    public static function form(Schema $schema): Schema
    {
        return CosechadorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CosechadorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CosechadorsTable::configure($table);
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
            'index' => ListCosechadors::route('/'),
            'create' => CreateCosechador::route('/create'),
            'view' => ViewCosechador::route('/{record}'),
            'edit' => EditCosechador::route('/{record}/edit'),
        ];
    }
}

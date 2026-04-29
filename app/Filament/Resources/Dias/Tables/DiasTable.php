<?php

namespace App\Filament\Resources\Dias\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DiasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fecha')
                    ->date('d/m/Y')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('cosechador.dni')
                    ->label('Cosechador')
                    ->getStateUsing(fn($record) => $record->cosechador ? $record->cosechador->dni . ' - ' . $record->cosechador->nombres : '-')
                    ->searchable(),
                // text colum para mostrar el DNI y nombres del supervisor relacionado con Grupo
                TextColumn::make('grupo.supervisor.dni')
                    ->label('Supervisor')
                    ->searchable()
                    ->getStateUsing(fn($record) => $record->grupo && $record->grupo->supervisor ? $record->grupo->supervisor->dni . ' - ' . $record->grupo->supervisor->nombres : '-'),
                TextColumn::make('grupo.Grupo')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutorResource\Pages;
use App\Filament\Resources\AutorResource\RelationManagers;
use App\Models\Autor;
use App\Models\Posgraduante;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AutorResource extends Resource
{
    protected static ?string $model = Autor::class;

    protected static ?string $navigationIcon = 'heroicon-m-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('posgraduante_id')
                    ->label('Datos del Autor')
                    ->required()
                    ->options(Posgraduante::getFullNames())
                    ->searchable()
                    ->preload(),

                Forms\Components\Select::make('documento_id')
                    ->label('Documento')
                    ->required()
                    ->relationship('documentos', 'titulo') // Asumiendoque quieres mostrar el nombre
                    ->searchable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('posgraduantes.datosPersonales.full_name') // Accede al nombre completo
                    ->label('Posgraduante')
                    ->sortable(),
                Tables\Columns\TextColumn::make('documentos.titulo')
                    ->label('Documentos')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListAutors::route('/'),
            //'create' => Pages\CreateAutor::route('/create'),
            //'edit' => Pages\EditAutor::route('/{record}/edit'),
        ];
    }
}

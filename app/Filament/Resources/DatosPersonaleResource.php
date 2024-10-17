<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DatosPersonaleResource\Pages;
use App\Filament\Resources\DatosPersonaleResource\RelationManagers;
use App\Models\DatosPersonale;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DatosPersonaleResource extends Resource
{
    protected static ?string $model = DatosPersonale::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('paterno')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('materno')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cedula_identidad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('celular')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('direccion')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->required(),
                Forms\Components\Select::make('id_ciudad_registro')
                    ->label('Ciudad de Registro')
                    ->required()
                    ->relationship('ciudad', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload()
                    //->placeholder('Selecciona un profesor'),
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\Select::make('id_pais')
                    ->label('Pais de Origen')
                    ->required()
                    ->relationship('pais', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload()
                    //->placeholder('Selecciona un profesor'),
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('paterno')
                    ->searchable(),
                Tables\Columns\TextColumn::make('materno')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cedula_identidad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('celular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ciudad.nombre')
                    ->label('Ciudad de Registro')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pais.nombre')
                    ->label('Pais de Origen')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDatosPersonales::route('/'),
            //'create' => Pages\CreateDatosPersonale::route('/create'),
            //'edit' => Pages\EditDatosPersonale::route('/{record}/edit'),
        ];
    }
}

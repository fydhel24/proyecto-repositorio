<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PosgraduanteResource\Pages;
use App\Filament\Resources\PosgraduanteResource\RelationManagers;
use App\Models\DatosPersonale;
use App\Models\Posgraduante;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PosgraduanteResource extends Resource
{
    protected static ?string $model = Posgraduante::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('matricula')
                    ->required()
                    ->maxLength(255)
                    ->unique('posgraduantes', 'matricula'),
                Forms\Components\Select::make('persona_id')
                    ->required()
                    ->options(DatosPersonale::all()->pluck('full_name', 'id')) // Asumiendo que tienes un método para obtener full_name
                    ->searchable()
                    ->preload()
                    ->unique('posgraduantes', 'persona_id'),



                //->placeholder('Selecciona un profesor'),
                /* ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                    ])

                    ->required() */
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('matricula')
                    ->searchable(),
                Tables\Columns\TextColumn::make('datosPersonales.full_name') // Mostrar full_name
                    ->label('Información Personal')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListPosgraduantes::route('/'),
            'create' => Pages\CreatePosgraduante::route('/create'),
            'edit' => Pages\EditPosgraduante::route('/{record}/edit'),
        ];
    }
}

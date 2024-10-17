<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentoResource\Pages;
use App\Filament\Resources\DocumentoResource\RelationManagers;
use App\Models\Documento;
use App\Models\Programa;
use App\Models\Publicacion;
use Closure;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentoResource extends Resource
{
    protected static ?string $model = Documento::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('resumen')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('programa_id')
                    ->required()
                    ->relationship('programa', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload()
                    ->reactive() // Escucha cambios en el campo
                    ->afterStateUpdated(function ($set, $state) {
                        // Obtén el tipo_programa relacionado con el programa seleccionado
                        $programa = \App\Models\Programa::find($state);
                        if ($programa) {
                            $set('tipo_programa', $programa->tipoPrograma->nombre);
                        } else {
                            $set('tipo_programa', null); // Limpia el valor si no hay un programa seleccionado
                        }
                    }),
                Forms\Components\TextInput::make('tipo_programa')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\Select::make('modalidad_id')
                    ->required()
                    ->relationship('modalidad', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload()
                    //->placeholder('Selecciona un profesor'),
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\Select::make('ciudad_id')
                    ->required()
                    ->relationship('ciudad', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('respaldo_digital_id')
                    ->required()
                    ->relationship('respaldoDigital', 'nombre') // Asumiendoque quieres mostrar el nombre del profesor 
                    ->searchable()
                    ->preload()
                    //->placeholder('Selecciona un profesor'),
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('archivo') // Componente para cargar archivos
                            ->label('Subir archivo PDF')
                            ->required()
                            ->acceptedFileTypes(['application/pdf']) // Solo permite subir archivos PDF
                            ->directory('archivos') // Carpeta donde se guardarán los archivos en storage/app/archivos
                            ->enableDownload() // Habilita la descarga del archivo desde el formulario
                            ->afterStateUpdated(function (callable $set, $state) {
                                // Lógica para manejar el archivo después de que se haya subido
                                if ($state) {
                                    // Obtener el nombre original del archivo
                                    $originalName = $state->getClientOriginalName();

                                    // Guardar el archivo con el nombre original
                                    $path = $state->storeAs('archivos', $originalName);

                                    // Actualiza el campo 'archivo_id' en el registro
                                    $set('respaldo_digital_id', $path); // Asegúrate de que 'archivo_id' sea el campo en tu modelo que almacena la ruta
                                }
                            }),


                    ])

                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resumen')
                    ->searchable(),
                // Columna para mostrar enlace de descarga
                Tables\Columns\TextColumn::make('respaldoDigital.archivo') // Asumiendo que 'archivo' es el campo donde almacenas la URL o el nombre del archivo
                    ->label('Respaldo Digital')
                    ->formatStateUsing(function ($state) {
                        return $state
                            ? "<a href='" . asset('storage/' . $state) . "' target='_blank' style='text-decoration: none; color: #3490dc;'>PDF</a>"
                            : 'No disponible';
                    })
                    ->html() // Habilitar HTML para mostrar el enlace como texto
                    ->extraAttributes(['class' => 'flex justify-center  items-center']),
                Tables\Columns\TextColumn::make('programa.nombre')
                    ->label('Programa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_programa')
                    ->label('Tipo de Programa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('modalidad.nombre')
                    ->label('Modalidad')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ciudad.nombre')
                    ->label('Ciudad Registro')
                    ->sortable(),
                /* Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), */

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('publicar')
                    ->label(fn(Documento $record) => $record->publicaciones()->exists() ? 'Publicado' : 'Publicar')
                    ->icon(fn(Documento $record) => $record->publicaciones()->exists() ? 'heroicon-o-check-circle' : 'heroicon-m-arrow-up-on-square-stack')
                    ->action(function (Documento $record) {
                        // Si el documento ya está publicado, no permitimos la acción
                        if ($record->publicaciones()->exists()) {
                            Notification::make()
                                ->title('El documento ya ha sido publicado')
                                ->warning()
                                ->body('Este documento ya está publicado.')
                                ->send();

                            return;
                        }

                        // Obtén el usuario autenticado
                        $user = Filament::auth()->user();

                        // Registra la publicación en la tabla 'publicaciones'
                        Publicacion::create([
                            'documento_id' => $record->id,
                            'user_id' => $user->id,
                            'estado' => 'publicado',
                            'fecha_publicacion' => now(),
                        ]);

                        // Mostrar notificación de éxito
                        Notification::make()
                            ->title('Documento publicado')
                            ->success()
                            ->body('El documento ha sido publicado exitosamente.')
                            ->send();
                    })
                    ->requiresConfirmation()
                    ->color(fn(Documento $record) => $record->publicaciones()->exists() ? 'gray' : 'success') // Cambia el color si ya está publicado
                    ->disabled(fn(Documento $record) => $record->publicaciones()->exists()), // Deshabilita la acción si ya está publicado
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
            'index' => Pages\ListDocumentos::route('/'),
            //'create' => Pages\CreateDocumento::route('/create'),
            //'edit' => Pages\EditDocumento::route('/{record}/edit'),
        ];
    }
}

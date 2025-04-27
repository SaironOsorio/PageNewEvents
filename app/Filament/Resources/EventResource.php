<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;



class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationGroup = 'Eventos';
    protected static ?string $navigationLabel = 'Eventos';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre del evento')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('description')
                    ->label('Descripción')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('event_date')
                    ->label('Fecha del evento')
                    ->required()
                    ->timezone('America/Bogota')
                    ->format('Y-m-d H:i:s'),
                Forms\Components\FileUpload::make('image_primary')
                    ->label('Imagen principal')
                    ->image()
                    ->required()  
                    ->rules(['dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080'])
                    ->validationMessages([
                        'dimensions' => 'La imagen principal debe ser exactamente de 1080 x 1080 píxeles.',
                    ])
                    ->maxParallelUploads(1),
                Forms\Components\FileUpload::make('image_secondary')
                    ->label('Imagen secundaria')
                    ->image()
                    ->required()
                    ->rules(['dimensions:min_width=6036,min_height=1965,max_width=6036,max_height=1965'])
                    ->validationMessages([
                        'dimensions' => 'La imagen secundaria debe ser exactamente de 6036 x 1965 píxeles.',
                    ])
                    ->maxParallelUploads(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image_primary'),
                Tables\Columns\ImageColumn::make('image_secondary'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}

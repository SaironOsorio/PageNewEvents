<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FligthsResource\Pages;
use App\Filament\Resources\FligthsResource\RelationManagers;
use App\Models\Fligths;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Event;

class FligthsResource extends Resource
{
    protected static ?string $model = Fligths::class;
    protected static ?string $navigationGroup = 'Eventos';
    protected static ?string $navigationLabel = 'Vuelos';
    protected static ?string $label = 'Vuelo';
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    /*public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Evento')
                    ->options(
                        Event::whereNull('parent_id')->pluck('name', 'id')
                    )
                    ->searchable()
                    ->required(),

                Forms\Components\FileUpload::make('file')
                    ->label('Archivo Excel (.xlsx)')
                    ->required()
                    ->disk('public')
                    ->directory('import')
                    ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']),
            ]);
    }*/

    public static function table(Table $table): Table
    {
        return $table
        ->query(
            Event::query()
                ->whereHas('flights')
                ->withCount('flights')
        )
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Evento')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('created_at')->label('Fecha de Importación')->dateTime()->sortable(),
            Tables\Columns\TextColumn::make('flights_count')->label('Vuelos Creados')->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\Action::make('deleteFlights')
            ->label('Eliminar vuelos')
            ->requiresConfirmation()
            ->color('danger')
            ->icon('heroicon-o-trash')
            ->action(function (Event $record) {
                $record->flights()->delete();
            }),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make()
            ])
        ]);
    
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFligths::route('/'),
            /*'edit' => Pages\EditFligths::route('/{record}/edit'),*/
        ];
    }
}
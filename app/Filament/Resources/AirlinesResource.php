<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirlinesResource\Pages;
use App\Filament\Resources\AirlinesResource\RelationManagers;
use App\Models\Airlines;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;

class AirlinesResource extends Resource
{
    protected static ?string $model = Airlines::class;
    protected static ?string $navigationGroup = 'Sistema';
    protected static ?string $navigationLabel = 'Logos Airlines';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('icao')
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icao')
                    ->label('IATA')
                    ->searchable(),
                    ImageColumn::make('url')
                    ->label('Imagen')
                    ->circular(false) 
                    ->sortable()
                    ->searchable(),
            ])->filters([
                //
            ])->actions([
                Tables\Actions\EditAction::make(),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAirlines::route('/'),
            'create' => Pages\CreateAirlines::route('/create'),
            'edit' => Pages\EditAirlines::route('/{record}/edit'),
        ];
    }
}

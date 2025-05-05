<?php

namespace App\Filament\Resources\AirlinesResource\Pages;

use App\Filament\Resources\AirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirlines extends EditRecord
{
    protected static string $resource = AirlinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

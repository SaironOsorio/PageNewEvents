<?php

namespace App\Filament\Resources\FligthsResource\Pages;

use App\Filament\Resources\FligthsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFligths extends EditRecord
{
    protected static string $resource = FligthsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

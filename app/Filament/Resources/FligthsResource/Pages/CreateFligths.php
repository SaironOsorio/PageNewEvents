<?php

namespace App\Filament\Resources\FligthsResource\Pages;

use App\Filament\Resources\FligthsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;
use App\Models\Fligths;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class CreateFligths extends CreateRecord
{
    protected static string $resource = FligthsResource::class;

}

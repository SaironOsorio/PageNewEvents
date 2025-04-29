<?php

namespace App\Filament\Resources\FligthsResource\Pages;
use App\Filament\Resources\FligthsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Fligths;
use Filament\Notifications\Notification;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ListFligths extends ListRecords
{
    protected static string $resource = FligthsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('importExcel')
            ->label('Importar Vuelos')
            ->icon('heroicon-o-arrow-up-tray')
            ->form([
                Forms\Components\Select::make('event_id')
                    ->label('Evento')
                    ->options(Event::pluck('name', 'id'))
                    ->required(),
                Forms\Components\FileUpload::make('file')
                    ->label('Archivo Excel')
                    ->disk('public')
                    ->required()
                    ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']),
            ])
                ->action(function (array $data) {
                    $filePath = Storage::disk('public')->path($data['file']);

                    if (!Storage::disk('public')->exists($data['file'])) {
                        Notification::make()
                            ->title('El archivo no existe.')
                            ->danger()
                            ->send();
                        return;
                    }

                    $collection = Excel::toCollection(null, $filePath);
                    $rows = $collection->first();

                    DB::beginTransaction();
                    try {
                        foreach ($rows as $index => $row) {
                            if ($index === 0) continue;

                            Fligths::create([
                                'event_id'          => $data['event_id'],
                                'Time_Zulu'         => Carbon::createFromFormat('H:i:s', $row[0])->format('H:i:s') ?? 'Unknown',
                                'departure_time'    => Carbon::createFromFormat('H:i:s', $row[1])->format('H:i:s') ?? 'Unknown',
                                'nameCompany'       => $row[2] ?? 'Unknown',
                                'IcaoAirline'       => $row[3] ?? 'Unknown',
                                'departure_airport' => $row[4] ?? 'Unknown',
                                'IcaoDeparture'     => $row[5] ?? 'Unknown',
                                'arrival_airport'   => $row[6] ?? 'Unknown',
                                'IcaoArrival'       => $row[7] ?? 'Unknown',
                                'FlightType'        => $row[8] ?? 'Unknown',
                                'GateDeparture'     => $row[9] ?? 'Unknown',
                                'GateArrival'       => $row[10] ?? 'Unknown',
                                'flight_number'     => $row[11] ?? 'Unknown',
                                'is_cancelled'      => false,
                            ]);
                        }

                        DB::commit();

                        Notification::make()
                            ->title('Importación completada correctamente.')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        DB::rollBack();
                        Notification::make()
                            ->title('Error durante la importación: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    }
                })
                ->modalHeading('Importar vuelos desde Excel')
                ->modalSubmitActionLabel('Importar'),
        ];
    }
}

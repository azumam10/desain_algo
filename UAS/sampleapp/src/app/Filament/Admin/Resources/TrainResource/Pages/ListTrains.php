<?php

namespace App\Filament\Admin\Resources\TrainResource\Pages;

use App\Filament\Admin\Resources\TrainResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrains extends ListRecords
{
    protected static string $resource = TrainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

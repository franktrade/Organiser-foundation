<?php

namespace App\Filament\Resources\ImpactResource\Pages;

use App\Filament\Resources\ImpactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImpacts extends ListRecords
{
    protected static string $resource = ImpactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

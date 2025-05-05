<?php

namespace App\Filament\Resources\SmartHomeDeviceResource\Pages;

use App\Filament\Resources\SmartHomeDeviceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmartHomeDevice extends EditRecord
{
    protected static string $resource = SmartHomeDeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

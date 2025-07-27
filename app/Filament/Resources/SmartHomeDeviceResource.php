<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\SmartHomeDevice;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SmartHomeDeviceResource\Pages;
use App\Filament\Resources\SmartHomeDeviceResource\RelationManagers;

class SmartHomeDeviceResource extends Resource
{
    protected static ?string $model = SmartHomeDevice::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    })
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('₦'),
                Forms\Components\TextInput::make('whatsapp_link')
                    ->label('WhatsApp Contact Link')
                    ->placeholder('https://wa.me/1234567890')
                    ->url()
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('smart-home/main_image')
                    ->visibility('public')
                    ->imageEditor()
                    ->imageEditorMode(2)
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),
                Forms\Components\Select::make('device_type')
                    ->required()
                    ->label('Device Type')
                    ->options([
                        'smart_bulb' => 'Smart Bulb',
                        'smart_plug' => 'Smart Plug',
                        'smart_camera' => 'Smart Camera',
                        'smart_lock' => 'Smart Lock',
                        'smart_thermostat' => 'Smart Thermostat',
                        'smart_speaker' => 'Smart Speaker',
                        'smart_hub' => 'Smart Hub',
                        'smart_sensor' => 'Smart Sensor',
                        'smart_switch' => 'Smart Switch',
                        'smart_display' => 'Smart Display',
                        'smart_air_purifier' => 'Smart Air Purifier',
                        'smart_vacuum' => 'Smart Vacuum',
                        'smart_washing_machine' => 'Smart Washing Machine',
                        'smart_fridge' => 'Smart Fridge',
                        'smart_oven' => 'Smart Oven',
                        'smart_dishwasher' => 'Smart Dishwasher',
                        'smart_coffee_maker' => 'Smart Coffee Maker',
                        'smart_air_conditioner' => 'Smart Air Conditioner',
                        'smart_heater' => 'Smart Heater',
                        'smart_humidifier' => 'Smart Humidifier',
                        'smart_dehumidifier' => 'Smart Dehumidifier',
                        'smart_ir_blaster' => 'Smart IR Blaster',
                        'smart_air_quality_monitor' => 'Smart Air Quality Monitor',
                        'smart_water_leak_sensor' => 'Smart Water Leak Sensor',
                        'others' => 'Others',
                    ])
                    ->placeholder('Select device type')
                    ->reactive()
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('device_type') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('device_type', Str::slug($state));
                    })
                    ->searchable(),
                Forms\Components\Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('NGN')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->label('Delete')
                        ->requiresConfirmation(),
                ])->iconButton(),
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
            'index' => Pages\ListSmartHomeDevices::route('/'),
            'create' => Pages\CreateSmartHomeDevice::route('/create'),
            // 'edit' => Pages\EditSmartHomeDevice::route('/{record}/edit'),
        ];
    }
}

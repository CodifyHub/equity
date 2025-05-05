<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Property;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PropertyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PropertyResource\RelationManagers;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Property Details')
                    ->description('Fill in the details of the property.')
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
                            ->readonly()
                            ->dehydrated(false)
                            ->maxLength(255),
                        Forms\Components\Textarea::make('short_description')
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->columnSpanFull()
                            ->required(),
                    ])->columns(2),
                Forms\Components\Section::make('Property Information')
                    ->description('Fill in the information of the property.')
                    ->schema([
                        Forms\Components\Select::make('property_type')
                            ->required()
                            ->label('Property Type')
                            ->options([
                                'apartment' => 'Apartment',
                                'house' => 'House',
                                'land' => 'Land',
                                'commercial' => 'Commercial',
                            ])
                            ->searchable(),
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
                            ->directory(fn(Get $get) => 'property/' . Str::slug($get('name') . '/main_image'))
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
                    ])->columns(2),
                Forms\Components\Section::make('Property Features')
                    ->description('Fill in the features of the property.')
                    ->schema([
                        Forms\Components\TextInput::make('bedroom')
                            ->label('Number of Bedroom (s)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('bathroom')
                            ->label('Number of Bathroom (s)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('size')
                            ->required()
                            ->label('Size (in sq ft)')
                            ->maxLength(255),
                        Forms\Components\Select::make('is_active')
                            ->label('Is Active')
                            ->options([
                                '1' => 'Yes',
                                '0' => 'No',
                            ])
                            ->required(),
                    ])->columns(2),
                Forms\Components\Section::make('SEO')
                    ->description('Fill in the SEO details of the property.')
                    ->relationship('metadata')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->placeholder('keyword1, keyword2, keyword3')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_description')
                            ->columnSpanFull()
                            ->maxLength(255),
                    ])->columns(2),
                Forms\Components\Section::make('Property Address')
                    ->description('Fill in the address of the property.')
                    ->schema([
                        Forms\Components\TextInput::make('location')
                            ->label('Address')
                            ->placeholder('123 Main St, City, State, Zip')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('state')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('city')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
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
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('bedroom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bathroom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
                Tables\Filters\Filter::make('is_active')
                    ->label('Active')
                    ->query(fn(Builder $query): Builder => $query->where('is_active', 1))
                    ->indicateUsing(function (Builder $query): array {
                        return [
                            'is_active' => 'Active',
                        ];
                    }),
                Tables\Filters\Filter::make('is_inactive')
                    ->label('Inactive')
                    ->query(fn(Builder $query): Builder => $query->where('is_active', 0))
                    ->indicateUsing(function (Builder $query): array {
                        return [
                            'is_inactive' => 'Inactive',
                        ];
                    }),
                Tables\Filters\Filter::make('property_type')
                    ->label('Property Type')
                    ->query(fn(Builder $query): Builder => $query->where('property_type', 'apartment'))
                    ->indicateUsing(function (Builder $query): array {
                        return [
                            'property_type' => 'Apartment',
                        ];
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('view'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\Action::make('export')
                        ->label('Export')
                        ->action(function (array $records) {
                            // Export logic here
                            // For example, you can use a package like Laravel Excel to export the records
                            // to a CSV or Excel file.
                            // return Excel::download(new PropertiesExport($records), 'properties.xlsx');
                            // For now, just return a message
                            return redirect()->route('filament.resources.properties.index')->with('success', 'Exported successfully!');
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ImagesRelationManager::class,
            RelationManagers\FeaturesRelationManager::class,
            RelationManagers\MapRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            // 'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}

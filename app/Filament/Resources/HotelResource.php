<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\HtmlString;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationLabel = 'Hotels';

    protected static ?string $modelLabel = 'Hotel';

    protected static ?string $pluralModelLabel = 'Hotels';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('image')
                                ->label('Image URL')
                                ->url()
                                ->required()
                                ->maxLength(2048)
                                ->helperText('Paste the ImageKit.io image URL here'),

                            Forms\Components\Placeholder::make('image_preview')
                                ->label('Preview')
                                ->content(fn ($get) => $get('image')
                                    ? new HtmlString(
                                        '<img src="' . e($get('image')) . '" 
                                        style="max-width:250px;border-radius:12px;margin-top:10px;">'
                                    )
                                    : 'No image selected'),

                            TextInput::make('image_alt')
                                ->label('Image Alt')
                                ->maxLength(255)
                                ->helperText('Describe the main image for SEO and accessibility'),

                            TextInput::make('slug')
                                ->label('Slug')
                                ->required()
                                ->maxLength(255)
                                ->unique(ignoreRecord: true),
                        ]),

                        Grid::make(2)->schema([
                            Select::make('language')
                                ->label('Language')
                                ->options([
                                    'en' => 'English',
                                    'es' => 'Español',
                                ])
                                ->default('en')
                                ->required()
                                ->live(),

                            Hidden::make('group_id'),
                        ]),

                        Select::make('translation_of')
                            ->label('Traducción de')
                            ->options(function () {
                                return Hotel::where('language', 'en')
                                    ->orderBy('title')
                                    ->pluck('title', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->placeholder('Selecciona el hotel en inglés')
                            ->visible(fn (Forms\Get $get): bool => $get('language') === 'es')
                            ->rule(function (callable $get, ?Hotel $record) {
                                return function (string $attribute, $value, \Closure $fail) use ($get, $record) {
                                    if ($get('language') !== 'es' || empty($value)) {
                                        return;
                                    }

                                    $original = Hotel::find($value);

                                    if (! $original) {
                                        return;
                                    }

                                    $groupId = $original->group_id ?: $original->id;

                                    $query = Hotel::where('group_id', $groupId)
                                        ->where('language', 'es');

                                    if ($record) {
                                        $query->where('id', '!=', $record->id);
                                    }

                                    if ($query->exists()) {
                                        $fail('Ya existe una versión en español para este hotel.');
                                    }
                                };
                            }),

                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(true),
                    ]),

                Section::make('Contenido')
                    ->schema([
                        Textarea::make('excerpt')
                            ->label('Excerpt')
                            ->rows(3),

                        Forms\Components\Textarea::make('content')
                        ->required()
                        ->rows(18)
                        ->autosize()
                        ->columnSpanFull(),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3),
                    ]),

                Section::make('Hotel Info')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('rating')
                                ->label('Rating')
                                ->numeric()
                                ->step(0.1)
                                ->minValue(0)
                                ->maxValue(5),

                            Select::make('price_range')
                                ->label('Price Range')
                                ->options([
                                    '$' => '$',
                                    '$$' => '$$',
                                    '$$$' => '$$$',
                                    '$$$$' => '$$$$',
                                ]),

                            Select::make('tag')
                                ->label('Tag')
                                ->options([
                                    'luxury' => 'Luxury',
                                    'budget' => 'Budget',
                                    'boutique' => 'Boutique',
                                    'family' => 'Family',
                                ])
                                ->searchable(),
                        ]),

                        Textarea::make('address')
                            ->label('Address')
                            ->rows(2),

                        Grid::make(2)->schema([
                            TextInput::make('latitude')
                                ->label('Latitude')
                                ->numeric(),

                            TextInput::make('longitude')
                                ->label('Longitude')
                                ->numeric(),
                        ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('Image'),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('language')
                    ->badge()
                    ->sortable(),

                TextColumn::make('group_id')
                    ->label('Grupo')
                    ->sortable(),

                TextColumn::make('tag')
                    ->badge(),

                TextColumn::make('price_range')
                    ->label('Precio'),

                TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable(),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\HtmlString;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Blog Posts';

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

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

                            TextInput::make('featured_image')
                                ->label('Featured Image URL')
                                ->url()
                                ->maxLength(2048)
                                ->helperText('Paste the ImageKit.io image URL here'),

                            Forms\Components\Placeholder::make('featured_image_preview')
                                ->label('Preview')
                                ->content(fn ($get) => $get('featured_image')
                                    ? new HtmlString(
                                        '<img src="' . e($get('featured_image')) . '" 
                                        style="max-width:250px;border-radius:12px;margin-top:10px;">'
                                    )
                                    : 'No image selected'),

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

                        Select::make('group_id')
                            ->label('Traducción de')
                            ->options(function () {
                                return Post::where('language', 'en')
                                    ->orderBy('title')
                                    ->pluck('title', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->placeholder('Selecciona el artículo en inglés')
                            ->visible(fn (Forms\Get $get): bool => $get('language') === 'es')
                            ->rule(function (callable $get, ?Post $record) {
                                return function (string $attribute, $value, \Closure $fail) use ($get, $record) {

                                    if ($get('language') !== 'es' || empty($value)) {
                                        return;
                                    }

                                    $query = Post::where('group_id', $value)
                                        ->where('language', 'es');

                                    if ($record) {
                                        $query->where('id', '!=', $record->id);
                                    }

                                    if ($query->exists()) {
                                        $fail('Ya existe una versión en español para este artículo.');
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

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('featured_image')
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

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Published At')
                    ->dateTime()
                    ->sortable(),

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
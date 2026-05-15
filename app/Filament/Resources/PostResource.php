<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('language')
                    ->required()
                    ->maxLength(5)
                    ->default('en'),

                Forms\Components\TextInput::make('group_id')
                    ->label('Group ID')
                    ->maxLength(255),

                Forms\Components\Textarea::make('excerpt')
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('content')
                    ->required()
                    ->rows(18)
                    ->autosize()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('featured_image')
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

                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(255),

                Forms\Components\Textarea::make('meta_description')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_published')
                    ->required(),

                Forms\Components\DateTimePicker::make('published_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('language')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('Featured Image'),

                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),

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
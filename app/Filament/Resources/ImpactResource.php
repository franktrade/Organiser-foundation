<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImpactResource\Pages;
use App\Filament\Resources\ImpactResource\RelationManagers;
use App\Models\Impact;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImpactResource extends Resource
{
    protected static ?string $model = Impact::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $label = 'Manage Impacts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $get) {
                        $set('slug', str($get('title'))->slug());
                    })
                    ->maxLength(255)
                ->columnSpan(2),
                Forms\Components\Hidden::make('slug')
                    ->required(),
                Forms\Components\Textarea::make('excerpt')
                    ->maxLength(300)
                    ->required()
                    ->columnSpan(2),
                Forms\Components\FileUpload::make('cover_image')
                    ->image()
                    ->required()
                    ->panelLayout('16:9')
                    ->imageCropAspectRatio('16:9')
                    ->directory('content/impact')
                    ->columnSpan(2),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('published_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('published_at')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListImpacts::route('/'),
            'create' => Pages\CreateImpact::route('/create'),
            'edit' => Pages\EditImpact::route('/{record}/edit'),
        ];
    }
}

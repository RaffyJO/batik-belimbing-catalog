<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityResource\Pages;
use App\Filament\Resources\ActivityResource\RelationManagers;
use App\Models\Activity;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;
use Filament\Resources\Concerns\Translatable;

class ActivityResource extends Resource
{
    use Translatable;

    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->placeholder('Masukkan nama kegiatan'),
                TextInput::make('lokasi')
                    ->required()
                    ->placeholder('Masukkan lokasi kegiatan'),
                DatePicker::make('tanggal')->required(),
                Grid::make(2)->schema([
                    Textarea::make('deskripsi')
                        ->required()
                        ->placeholder('Masukkan deskripsi kegiatan')
                        ->rows(10)
                        ->cols(20),
                    FileUpload::make('gambar')
                        ->directory('uploads/activities')
                        ->maxSize(2048),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')->size(50),
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('lokasi')->searchable()->sortable(),
                TextColumn::make('tanggal')->searchable()->sortable(),
                TextColumn::make('deskripsi')->wrap(),            
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'id') {
            return 'Kegiatan';
        }

        return 'Activity';
    }
}

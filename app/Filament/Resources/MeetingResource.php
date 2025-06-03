<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Meeting;
use App\Models\Meetings;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\Console\Input\Input;
use Filament\Tables\Columns\TextInputColumn;
use App\Filament\Resources\MeetingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MeetingResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class MeetingResource extends Resource
{
    protected static ?string $model = Meetings::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('subject_id')
                    ->relationship('subject', 'nama'),
                    Select::make('class_id')
                    ->relationship('class', 'name'),
                    DatePicker::make('meeting_date'),
                    TextInput::make('meeting_number')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('subject.nama')->label('Mata pelajaran'),
                TextColumn::make('class.name')->label('Kelas'),
                TextColumn::make('meeting_date')->label('Tanggal pertemuan'),
                TextColumn::make('meeting_number')->label('pertemuan')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

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
            'index' => Pages\ListMeetings::route('/'),
            'create' => Pages\CreateMeeting::route('/create'),
            'edit' => Pages\EditMeeting::route('/{record}/edit'),
        ];
    }    
}

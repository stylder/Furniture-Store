<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 2;

    public static function getNavigationLabel(): string
    {
        return __('messages.customers');
    }

    public static function getLabel(): string
    {
        return __('messages.customer.customer');
    }

    public static function getPluralLabel(): string
    {
        return __('messages.customers');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('messages.customer.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label(__('messages.customer.phone'))
                    ->maxLength(10),
                Forms\Components\TextInput::make('city')
                    ->label(__('messages.customer.city'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('colony')
                    ->label(__('messages.customer.colony'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextArea::make('address')
                    ->label(__('messages.customer.address'))
                    ->columnSpan('full')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TagsColumn::make('name')
                    ->label(__('messages.customer.name'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TagsColumn::make('phone')
                    ->label(__('messages.customer.phone'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TagsColumn::make('city')
                    ->label(__('messages.customer.city'))
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            RelationManagers\OrdersRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}

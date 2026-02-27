<?php

namespace App\Filament\Admin\Resources\Units\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class UnitForm
{
    public static function configure(Schema $schema): Schema
    { 
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                Select::make('unit_location_id')
                    ->label('Lokasi Unit')
                    ->relationship('location', 'name')
                    ->required(),
            ]);
    }
}

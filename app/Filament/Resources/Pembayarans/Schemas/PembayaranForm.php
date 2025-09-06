<?php

namespace App\Filament\Resources\Pembayarans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PembayaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('pendaftaran_id')
                    ->required()
                    ->numeric(),
                TextInput::make('metode_pembayaran')
                    ->required(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'lunas' => 'Lunas', 'gagal' => 'Gagal'])
                    ->default('pending')
                    ->required(),
                TextInput::make('bukti_pembayaran'),
            ]);
    }
}

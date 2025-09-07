<?php

namespace App\Filament\Resources\Pembayarans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PembayaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('pendaftaran_id')
                ->label('Pendaftar')
                ->relationship('pendaftaran', 'nama_lengkap') // relasi ke tabel pendaftarans
                ->searchable()
                ->required(),

            Select::make('metode_pembayaran')
                ->label('Metode Pembayaran')
                ->options([
                    'transfer_bank' => 'Transfer Bank',
                    'qris' => 'QRIS',
                    'cash' => 'Cash',
                ])
                ->required(),

            Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'lunas' => 'Lunas',
                    'gagal' => 'Gagal',
                ])
                ->default('pending')
                ->required(),

            FileUpload::make('bukti_pembayaran')
                ->label('Bukti Pembayaran')
                ->disk('public')
                ->visibility('public')
                ->image()
                ->directory('bukti_pembayaran')
                ->previewable(true)
                ->downloadable()
                ->required(),
            ]);
    }
}

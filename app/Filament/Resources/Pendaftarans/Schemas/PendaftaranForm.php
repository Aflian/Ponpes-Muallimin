<?php

namespace App\Filament\Resources\Pendaftarans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class PendaftaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Diri')
                ->description('Lengkapi data diri calon siswa')
                ->schema([
                    TextInput::make('nama_lengkap')
                        ->label('Nama Lengkap')
                        ->required(),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required(),

                    TextInput::make('no_hp')
                        ->label('Nomor HP'),

                    TextInput::make('alamat')
                        ->label('Alamat Lengkap'),
                ])
                ->columns(2),

            // 📌 Pembayaran
            Section::make('Pembayaran')
                ->description('Upload bukti pembayaran pendaftaran')
                ->schema([
                    FileUpload::make('bukti_pembayaran')
                        ->label('Bukti Pembayaran')
                        ->directory('bukti_pembayaran')
                         ->disk('public')
                        ->visibility('public')
                        ->downloadable()
                        ->previewable()
                        ->required(),
                ]),

            // 📌 Dokumen Wajib
            Section::make('Dokumen Wajib')
                ->description('Upload dokumen kelulusan dan identitas')
                ->schema([
                    FileUpload::make('ijazah_skl')
                        ->label('Ijazah / SKL')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/ijazah'),

                    FileUpload::make('akta_kelahiran')
                        ->label('Akta Kelahiran')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/akta'),

                    FileUpload::make('kartu_keluarga')
                        ->label('Kartu Keluarga')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/kk'),

                    FileUpload::make('ktp_ortu')
                        ->label('KTP Orang Tua')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/ktp'),

                    FileUpload::make('pas_foto')
                        ->label('Pas Foto')
                        ->disk('public')
                        ->visibility('public')
                        ->image()
                        ->directory('dokumen/foto'),
                ])
                ->columns(2),

            // 📌 Dokumen Tambahan
            Section::make('Dokumen Tambahan')
                ->description('Upload dokumen tambahan jika ada')
                ->schema([
                    FileUpload::make('buku_rapor')
                        ->label('Buku Rapor')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/rapor'),

                    FileUpload::make('surat_keterangan_sehat')
                        ->label('Surat Keterangan Sehat')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/sehat'),

                    FileUpload::make('surat_keterangan_berkelakuan_baik')
                        ->label('Surat Keterangan Berkelakuan Baik')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/skbb'),

                    FileUpload::make('formulir_pendaftaran')
                        ->label('Formulir Pendaftaran')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('dokumen/formulir'),
                ])
                ->columns(2),
        ]);

    }
}

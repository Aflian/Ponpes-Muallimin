<?php

namespace App\Filament\Resources\Pendaftarans\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class PendaftaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_lengkap')
                ->label('Nama Lengkap')
                ->searchable()
                ->sortable(),

            TextColumn::make('email')
                ->label('Email')
                ->searchable(),

            TextColumn::make('no_hp')
                ->label('Nomor HP')
                ->searchable(),

            TextColumn::make('alamat')
                ->label('Alamat')
                ->limit(30)
                ->tooltip(fn ($record) => $record->alamat),

            // 📌 Bukti Pembayaran (gambar)
            ImageColumn::make('bukti_pembayaran')
                ->label('Bukti Pembayaran')
                ->square()
                ->height(50)
                ->toggleable(),

            // 📌 Dokumen Wajib
            TextColumn::make('ijazah_skl')
                ->label('Ijazah / SKL')
                ->url(fn ($record) => $record->ijazah_skl ? asset('storage/' . $record->ijazah_skl) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('akta_kelahiran')
                ->label('Akta Kelahiran')
                ->url(fn ($record) => $record->akta_kelahiran ? asset('storage/' . $record->akta_kelahiran) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('kartu_keluarga')
                ->label('KK')
                ->url(fn ($record) => $record->kartu_keluarga ? asset('storage/' . $record->kartu_keluarga) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('ktp_ortu')
                ->label('KTP Ortu')
                ->url(fn ($record) => $record->ktp_ortu ? asset('storage/' . $record->ktp_ortu) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            ImageColumn::make('pas_foto')
                ->label('Pas Foto')
                ->square()
                ->height(50)
                ->toggleable(),

            // 📌 Dokumen Tambahan
            TextColumn::make('buku_rapor')
                ->label('Rapor')
                ->url(fn ($record) => $record->buku_rapor ? asset('storage/' . $record->buku_rapor) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('surat_keterangan_sehat')
                ->label('Surat Sehat')
                ->url(fn ($record) => $record->surat_keterangan_sehat ? asset('storage/' . $record->surat_keterangan_sehat) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('surat_keterangan_berkelakuan_baik')
                ->label('SKBB')
                ->url(fn ($record) => $record->surat_keterangan_berkelakuan_baik ? asset('storage/' . $record->surat_keterangan_berkelakuan_baik) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            TextColumn::make('formulir_pendaftaran')
                ->label('Formulir')
                ->url(fn ($record) => $record->formulir_pendaftaran ? asset('storage/' . $record->formulir_pendaftaran) : null, true)
                ->openUrlInNewTab()
                ->formatStateUsing(fn ($state) => $state ? 'Preview' : '-'),

            // 📌 Timestamp
            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->label('Diperbarui')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

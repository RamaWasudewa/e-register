<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PasienDatatables extends LivewireDatatable
{
    public $model = Pasien::class;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->sortBy('id'),

            Column::name('name')
                
                ->label('Nama Pasien')
                ->editable(),

            Column::name('jenis_kelamin')
                ->label('Jenis Kelamin'),

            Column::name('tanggal_lahir')
                ->label('Tanggal Lahir'),
            
            Column::name('usia')
                ->label('Usia'),
                
            Column::name('status')
                ->label('Status'),

            Column::name('poli')
                ->label('Poli'),

            Column::name('icd')
                ->label('ICD'),

            Column::name('diagnosa')
                ->label('Diagnosa'),

            Column::name('terapi')
                ->label('Terapi'),

            DateColumn::name('created_at')
                ->label('Tanggal Kunjungan'),
            
            Column::callback(['id'], function ($id) {
                return view('livewire.action', ['id' => $id]);
            }),
        ];
    }
}

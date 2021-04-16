<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pasien;

class Pasiens extends Component
{
    public  $pasien_id,
            $name,
            $jenis_kelamin, 
            $tanggal_lahir, 
            $usia, 
            $poli, 
            $status, 
            $icd, 
            $diagnosa, 
            $terapi;
    
    public $pasiens;
    
    public $isModal = 0;
    
    public function render()
    {
        $this->pasiens = Pasien::orderBy('id', 'DESC')->get();
        return view('livewire.pasiens');
    }

    public function create()
    {
        $this->resetField();
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'name'          => 'required|string',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'status'        => 'required',
            'poli'          => 'required',
            'icd'           => 'required',
            'diagnosa'      => 'required',
            'terapi'        => 'required',
        ]);

        Pasien::updateOrCreate(['id' => $this->pasien_id], [
            'name'          => $this->name,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'usia'          => $this->usia,
            'status'        => $this->status,
            'poli'          => $this->poli,
            'icd'           => $this->icd,
            'diagnosa'      => $this->diagnosa,
            'terapi'        => $this->terapi,
        ]);
        session()->flash('message', $this->pasien_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
        $this->closeModal();
        $this->resetField();
        
        // refreshLivewireDatatable();
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        $this->pasien_id        = $id;
        $this->name             = $pasien->name;
        $this->jenis_kelamin    = $pasien->jenis_kelamin;
        $this->tanggal_lahir    = $pasien->tanggal_lahir;
        $this->usia             = $pasien->usia;
        $this->status           = $pasien->status;
        $this->poli             = $pasien->poli;
        $this->icd              = $pasien->icd;
        $this->diagnosa         = $pasien->diagnosa;
        $this->terapi           = $pasien->terapi;

        $this->openModal();
        // refreshLivewireDatatable();
    }

    public function delete($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        \session()->flash('message' . $pasien->name . 'Dihapus');
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function resetField()
    {
        $this->name             = '';
        $this->jenis_kelamin    = '';
        $this->tanggal_lahir    = '';
        $this->usia             = '';
        $this->status           = '';
        $this->poli             = '';
        $this->icd              = '';
        $this->diagnosa         = '';
        $this->terapi           = '';
    }
}

<?php

namespace App\Http\Livewire\Pages\Irban;

use Livewire\Component;
use App\Models\Irban;

class IrbanPage extends Component
{
    public $idnya;
    public $nama;
    public $bidang;

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'nama' => 'required',
                'bidang' => 'required',
            ]);

            Irban::create([
                'nama' => $this->nama,
                'bidang' => $this->bidang,
            ]);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('irban.index'));
        }
    }

    public function patchData()
    {
        $this->validate([
            'nama' => 'required',
            'bidang' => 'required',
        ]);

        $irban = Irban::find($this->idnya);
        $irban->update([
            'nama' => $this->nama,
            'bidang' => $this->bidang,
        ]);

        redirect()->to(route('irban.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Irban::find($id);
            $this->nama = $data->nama;
            $this->bidang = $data->bidang;
        }

        $this->idnya = $id;

    }
    public function render()
    {
        return view('livewire.pages.irban.irban-page');
    }
}
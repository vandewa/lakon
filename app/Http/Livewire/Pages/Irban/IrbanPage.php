<?php

namespace App\Http\Livewire\Pages\Irban;

use Livewire\Component;
use App\Models\Irban;

class IrbanPage extends Component
{
    public $idnya;
    public $nama;

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'nama' => 'required',
            ]);

            Irban::create([
                'nama' => $this->nama,
            ]);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('irban.index'));
        }
    }

    public function patchData()
    {
        $this->validate([
            'nama' => 'required',
        ]);

        $irban = Irban::find($this->idnya);
        $irban->update([
            'nama' => $this->nama,
        ]);

        redirect()->to(route('irban.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Irban::find($id);
        }

        $this->idnya = $id;

    }
    public function render()
    {
        return view('livewire.pages.irban.irban-page');
    }
}
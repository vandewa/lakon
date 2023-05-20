<?php

namespace App\Http\Livewire\Pages\Urusan;

use App\Models\Irban;
use App\Models\Urusan;
use Livewire\Component;

class UrusanPage extends Component
{
    public $idnya;
    public $nama;
    public $irban_id;
    public $listIrban;

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            $this->validate([
                'nama' => 'required',
                'irban_id' => 'required',
            ]);

            Urusan::create([
                'nama' => $this->nama,
                'irban_id' => $this->irban_id,
            ]);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('urusan.index'));
        }
    }

    public function patchData()
    {
        $this->validate([
            'nama' => 'required',
            'irban_id' => 'required',
        ]);

        $irban = Urusan::find($this->idnya);
        $irban->update([
            'nama' => $this->nama,
            'irban_id' => $this->irban_id,
        ]);

        redirect()->to(route('urusan.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Urusan::with('irbannya')->find($id);
            $this->nama = $data->nama;
            $this->irban_id = $data->irban_id;
    }

        $this->idnya = $id;
        $this->listIrban = Irban::get();
    }

    public function render()
    {
        return view('livewire.pages.urusan.urusan-page');
    }
}
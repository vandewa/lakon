<?php

namespace App\Http\Livewire\Pages\Regulasi;

use App\Models\Regulasi;
use App\Models\Urusan;
use Livewire\Component;

class PageRegulasi extends Component
{
    public $idnya;
    public $perihal;
    public $urusan_id;
    public $link;
    public $listUrusan;

    public function simpanData()
    {
        if ($this->idnya) {
            $this->patchData();
        } else {
            Regulasi::create([
                'perihal' => $this->perihal,
                'urusan_id' => $this->urusan_id,
                'link' => $this->link,
            ]);

            $this->dispatchBrowserEvent('Success');
            redirect()->to(route('regulasi.index'));
        }
    }

    public function patchData()
    {
        $irban = Regulasi::find($this->idnya);
        $irban->update([
            'perihal' => $this->perihal,
            'urusan_id' => $this->urusan_id,
            'link' => $this->link,
        ]);

        redirect()->to(route('regulasi.index'));
    }

    public function mount($id = "")
    {
        if ($id != "") {
            $data = Regulasi::with('urusannya')->find($id);
            $this->perihal = $data->perihal;
            $this->urusan_id = $data->urusan_id;
            $this->link = $data->link;
        }

        $this->idnya = $id;
        $this->listUrusan = Urusan::get();
    }
    public function render()
    {
        return view('livewire.pages.regulasi.page-regulasi');
    }
}
<?php

namespace App\Http\Livewire\Pages\Laporan;

use App\Models\ComCode;
use App\Models\Tiket;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LaporanKonsultasi extends Component
{
    use WithPagination;

    public $status, $listOpd, $pilihStatus, $pilihOpd, $tanggalStart, $tanggalEnd;

    protected $paginationTheme = 'bootstrap';

    public function mount() 
    {
        $this->status = ComCode::where('code_group', 'TIKET_ST')->get();
        $this->listOpd = User::select('opd')->distinct()->limit(10)->get();
    }

    public function render()
    {
        $data = Tiket::with(['penanya']);

        if($this->pilihStatus){
            $data->where('tiket_st', $this->pilihStatus);
        }

        if($this->pilihOpd) {
            $data->whereHas('penanya', function($a){
                $a->where('opd', $this->pilihOpd);
            });
        }

        if($this->tanggalStart && $this->tanggalEnd){
            $data->whereBetween('created_at', [$this->tanggalStart, $this->tanggalEnd]);
        }

        $data = $data->paginate(10);
        return view('livewire.pages.laporan.laporan-konsultasi',[
            "items" => $data
        ]);
    }
}

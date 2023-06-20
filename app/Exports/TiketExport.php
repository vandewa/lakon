<?php

namespace App\Exports;

use App\Models\Tiket;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TiketExport implements FromView
{
    public $pilihStatus, $pilihOpd, $tanggalStart, $tanggalEnd, $pilihUrusan;
    public function __construct($pilihStatus, $pilihOpd, $tanggalStart, $tanggalEnd, $pilihUrusan)
    {
        $this->pilihStatus = $pilihStatus;
        $this->pilihOpd = $pilihOpd;
        $this->tanggalStart = $tanggalStart;
        $this->tanggalEnd = $tanggalEnd;
        $this->pilihUrusan = $pilihUrusan;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = Tiket::with(['penanya','status', 'urusan']);

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

        if($this->pilihUrusan) {
            $data->whereHas('urusan', function($a){
                $a->where('urusan_id', $this->pilihUrusan);
            });
        }
        
        $data = $data->get();
        return view('livewire.pages.laporan.export',[
            'data' => $data
        ]);
    }
}

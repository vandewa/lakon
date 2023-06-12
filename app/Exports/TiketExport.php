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
        $a = Tiket::with(['penanya'
        'status'])->get();
        return view('livewire.pages.laporan.export',[
            'data' => $a
        ]);
    }
}

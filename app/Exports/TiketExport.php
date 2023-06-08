<?php

namespace App\Exports;

use App\Models\Tiket;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TiketExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $a = Tiket::with(['penanya', 'status'])->get();
        return view('livewire.pages.laporan.export',[
            'data' => $a
        ]);
    }
}

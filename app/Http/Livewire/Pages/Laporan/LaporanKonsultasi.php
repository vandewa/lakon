<?php

namespace App\Http\Livewire\Pages\Laporan;

use App\Models\Tiket;
use Livewire\Component;
use Livewire\WithPagination;

class LaporanKonsultasi extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data = Tiket::with(['penanya'])->paginate(10);
        return view('livewire.pages.laporan.laporan-konsultasi',[
            "items" => $data
        ]);
    }
}

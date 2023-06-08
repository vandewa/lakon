<?php

namespace App\Http\Livewire\Pages\Laporan;

use App\Models\ComCode;
use App\Models\Tiket;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\TiketExport;
use App\Models\Urusan;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class LaporanKonsultasi extends Component
{
    use WithPagination;

    public $status, $listOpdTai, $pilihStatus, $pilihOpd, $tanggalStart, $tanggalEnd, $listUrusan, $pilihUrusan;

    protected $paginationTheme = 'bootstrap';

    public function mount() 
    {
        $this->status = ComCode::where('code_group', 'TIKET_ST')->get();
        $this->listOpdTai = DB::table('users')->select(DB::raw("distinct opd as devankampret"))->get();
        $this->listUrusan = Urusan::all();
    }

    public function render()
    {
        $data = Tiket::with(['penanya','status']);

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

    public function export()
    {
        return Excel::download(new TiketExport(), 'tiket-'.now().'.xlsx');
    }
}

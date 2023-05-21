<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Irban;
use App\Models\Tiket;
use App\Models\TiketStatus;
use App\Models\Urusan;
use App\Models\TiketUrusan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            if (auth()->user()->hasRole('admin')) {
                $data = Tiket::with(['status', 'tiketStatus'])->select('*');
            } elseif (auth()->user()->hasRole('irban')) {
                if (auth()->user()->email == 'irban1@wonosobokab.go.id') {
                    $data = Tiket::with(['status', 'tiketStatus'])->where('irban_id', 1)->where('tiket_st', 'TIKET_ST_02')->select('*');
                } elseif (auth()->user()->email == 'irban2@wonosobokab.go.id') {
                    $data = Tiket::with(['status', 'tiketStatus'])->where('irban_id', 2)->where('tiket_st', 'TIKET_ST_02')->select('*');
                } elseif (auth()->user()->email == 'irban3@wonosobokab.go.id') {
                    $data = Tiket::with(['status', 'tiketStatus'])->where('irban_id', 3)->where('tiket_st', 'TIKET_ST_02')->select('*');
                } elseif (auth()->user()->email == 'irban4@wonosobokab.go.id') {
                    $data = Tiket::with(['status', 'tiketStatus'])->where('irban_id', 4)->where('tiket_st', 'TIKET_ST_02')->select('*');
                } elseif (auth()->user()->email == 'irban5@wonosobokab.go.id') {
                    $data = Tiket::with(['status', 'tiketStatus'])->where('irban_id', 5)->where('tiket_st', 'TIKET_ST_02')->select('*');
                }
            } elseif (auth()->user()->hasRole('sekretaris')) {
                $data = Tiket::with(['status', 'tiketStatus'])->where('tiket_st', 'TIKET_ST_03')->select('*');
            } elseif (auth()->user()->hasRole('inspektur')) {
                $data = Tiket::with(['status', 'tiketStatus'])->where('tiket_st', 'TIKET_ST_04')->select('*');
            } else {
                $data = Tiket::with(['status', 'tiketStatus'])->where('creator_id', auth()->user()->id)->select('*');
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editDanDelete = '
                    <div class="gap-3 table-actions d-flex align-items-center fs-6">
                    <a href="' . route('konsultasi.edit', $row->id) . '" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="' . route('konsultasi.destroy', $row->id) . '" class="text-danger delete-data-table" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                    </div>  
                    ';

                    $delete = '
                    <div class="gap-3 table-actions d-flex align-items-center fs-6">
                    <a href="' . route('konsultasi.destroy', $row->id) . '" class="text-danger delete-data-table" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                    </div>  
                    ';

                    $edit = '
                    <div class="gap-3 table-actions d-flex align-items-center fs-6">
                    <a href="' . route('konsultasi.edit', $row->id) . '" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                    </a>
                    </div>  
                    ';

                    $editDanLog = '
                    <div class="gap-3 table-actions d-flex align-items-center fs-6">
                    <a href="' . route('konsultasi.edit', $row->id) . '" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="' . route('log', $row->id) . '" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log" type="button"><i class="bx bx-book-open fill"></i>
                    </a>
                    </div>  
                    ';

                    $previewDanLog = '
                    <div class="gap-3 table-actions d-flex align-items-center fs-6">
                    <a href="' . route('konsultasi.show', $row->id) . '" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Preview" type="button"><i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="' . route('log', $row->id) . '" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log" type="button"><i class="bx bx-book-open fill"></i>
                    </a>
                    </div>  
                    ';


                    if (auth()->user()->hasRole('opd')) {
                        if ($row->tiket_st == 'TIKET_ST_01') {
                            return $editDanDelete;
                        } elseif ($row->tiket_st == 'TIKET_ST_05') {
                            return $previewDanLog;
                        } else {
                            return;
                        }
                    } elseif (auth()->user()->hasRole('admin')) {
                        if ($row->tiket_st == 'TIKET_ST_01' || $row->tiket_st == 'TIKET_ST_02') {
                            return $edit;
                        } elseif ($row->tiket_st == 'TIKET_ST_05') {
                            return $previewDanLog;
                        } else {
                            return;
                        }
                    } elseif (auth()->user()->hasRole('irban')) {
                        if ($row->tiket_st == 'TIKET_ST_02') {
                            if ($row->hasTiketStatus()) {
                                return $editDanLog;
                            } else {
                                return $edit;
                            }
                        } elseif ($row->tiket_st == 'TIKET_ST_05') {
                            return $previewDanLog;
                        } else {
                            return;
                        }
                    } elseif (auth()->user()->hasRole('sekretaris')) {
                        if ($row->tiket_st == 'TIKET_ST_03') {
                            if ($row->hasTiketStatus()) {
                                return $editDanLog;

                            } else {
                                return $edit;
                            }
                        } elseif ($row->tiket_st == 'TIKET_ST_05') {
                            return $previewDanLog;
                        } else {
                            return;
                        }
                    } elseif (auth()->user()->hasRole('inspektur')) {
                        if ($row->tiket_st == 'TIKET_ST_04') {
                            if ($row->hasTiketStatus()) {
                                return $editDanLog;
                            } else {
                                return $edit;
                            }
                        } elseif ($row->tiket_st == 'TIKET_ST_05') {
                            return $previewDanLog;
                        } else {
                            return;
                        }
                    } else {
                        return $editDanDelete;
                    }

                })
                ->addColumn('status', function ($row) {
                    if ($row->tiket_st == 'TIKET_ST_01') {
                        return '<span class="badge bg-danger">' . $row->status->code_nm . '</span>';
                    } elseif ($row->tiket_st == 'TIKET_ST_02') {
                        return '<span class="badge bg-dark">' . $row->status->code_nm . '</span>';
                    } elseif ($row->tiket_st == 'TIKET_ST_03') {
                        return '<span class="badge bg-dark">' . $row->status->code_nm . '</span>';
                    } elseif ($row->tiket_st == 'TIKET_ST_04') {
                        return '<span class="badge bg-dark">' . $row->status->code_nm . '</span>';
                    } elseif ($row->tiket_st == 'TIKET_ST_05') {
                        return '<span class="badge bg-success">' . $row->status->code_nm . '</span>';
                    }
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('konsultasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konsultasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('path_file_pertanyaan')) {
            $a = $request->file('path_file_pertanyaan');
            $prefix = date('Ymdhis');
            $extension = $a->extension();
            $filename = $prefix . '.' . $extension;

            $path = $request->file('path_file_pertanyaan')->storeAs(
                'public',
                $filename
            );

        } else {
            $path = null;
        }

        Tiket::create([
            'kode_tiket' => gen_no_tiket(),
            'subject' => $request->subject,
            'pertanyaan' => $request->pertanyaan,
            'creator_id' => auth()->user()->id,
            'tiket_st' => 'TIKET_ST_01',
            'path_file_pertanyaan' => $path,
        ]);

        return redirect(route('konsultasi.index'))->with('store', 'oke');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Tiket::find($id);
        $irban = Irban::pluck('nama', 'id');
        $urusan = TiketUrusan::with(['urusan'])->where('tiket_id', $id)->get()->pluck('urusan.id');
        $listUrusan = Urusan::where('irban_id', $data->irban_id)->get()->pluck('nama', 'id');

        return view('konsultasi.show', compact('data', 'irban', 'urusan', 'listUrusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tiket::find($id);
        $irban = Irban::pluck('nama', 'id');
        $urusan = TiketUrusan::with(['urusan'])->where('tiket_id', $id)->get()->pluck('urusan.id');
        $listUrusan = Urusan::where('irban_id', $data->irban_id)->get()->pluck('nama', 'id');

        return view('konsultasi.edit', compact('data', 'irban', 'urusan', 'listUrusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //opd
        if ($request->hasFile('path_file_pertanyaan')) {
            $a = $request->file('path_file_pertanyaan');
            $prefix = date('Ymdhis');
            $extension = $a->extension();
            $filename = $prefix . '.' . $extension;

            $path = $request->file('path_file_pertanyaan')->storeAs(
                'public',
                $filename
            );

        } else {
            $path = Tiket::where('id', $id)->first()->path_file_pertanyaan;
        }

        if ($request->subject || $request->pertanyaan) {
            Tiket::find($id)->update([
                'subject' => $request->subject,
                'pertanyaan' => $request->pertanyaan,
                'tiket_st' => 'TIKET_ST_01',
                'path_file_pertanyaan' => $path,
            ]);
        }

        //admin
        if ($request->urusan_id) {
            foreach ($request->urusan_id as $list) {
                TiketUrusan::create([
                    'tiket_id' => $request->tiket_id,
                    'urusan_id' => $list,
                ]);
            }
        }

        if ($request->irban_id) {
            Tiket::find($id)->update([
                'irban_id' => $request->irban_id,
                'tiket_st' => 'TIKET_ST_02',
            ]);
        }

        //irban
        if ($request->hasFile('path_file_jawaban')) {
            $a = $request->file('path_file_jawaban');
            $prefix = date('Ymdhis');
            $extension = $a->extension();
            $filename = $prefix . '.' . $extension;

            $path_jawaban = $request->file('path_file_jawaban')->storeAs(
                'public',
                $filename
            );

        } else {
            $path_jawaban = Tiket::where('id', $id)->first()->path_file_jawaban;
        }

        if ($request->jawaban) {
            Tiket::find($id)->update([
                'jawaban' => $request->jawaban,
                'tiket_st' => 'TIKET_ST_03',
                'penjawab_id' => auth()->user()->id,
                'tanggal_jawab' => now(),
                'path_file_jawaban' => $path_jawaban,
            ]);
        }

        //sekdin 
        if ($request->tiket_status_st && auth()->user()->hasRole('sekretaris')) {
            TiketStatus::create([
                'tiket_id' => $id,
                'creator_id' => auth()->user()->id,
                'keterangan' => $request->keterangan,
                'tiket_status_st' => $request->tiket_status_st,
            ]);

            if ($request->tiket_status_st == 'TIKET_STATUS_ST_01') {
                Tiket::find($id)->update([
                    'tiket_st' => 'TIKET_ST_04',
                ]);
            } elseif ($request->tiket_status_st == 'TIKET_STATUS_ST_02') {
                Tiket::find($id)->update([
                    'tiket_st' => 'TIKET_ST_02',
                ]);
            }
        }

        //inspektur 
        if ($request->tiket_status_st && auth()->user()->hasRole('inspektur')) {
            TiketStatus::create([
                'tiket_id' => $id,
                'creator_id' => auth()->user()->id,
                'keterangan' => $request->keterangan,
                'tiket_status_st' => $request->tiket_status_st,
            ]);

            if ($request->tiket_status_st == 'TIKET_STATUS_ST_01') {
                Tiket::find($id)->update([
                    'tiket_st' => 'TIKET_ST_05',
                ]);
            } elseif ($request->tiket_status_st == 'TIKET_STATUS_ST_02') {
                Tiket::find($id)->update([
                    'tiket_st' => 'TIKET_ST_03',
                ]);
            }

        }

        return redirect(route('konsultasi.index'))->with('edit', 'oke');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tiket::destroy($id);
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '-' . time() . '.' . $extension;
            $request->file('upload')->move(storage_path('app/public/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM'), date('Ymdhis')), $fileName);
            $url = asset('storage/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM') . '/' . $fileName);

            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => $url
            ]);
        }
    }

    public function urusanIrban(Request $request)
    {
        $state = Urusan::where('irban_id', $request->country_id)->pluck('nama', 'id');
        return response()->json($state);
    }

    public function log($id)
    {
        $data = TiketStatus::with(['nama', 'status'])->where('tiket_id', $id)->orderBy('id', 'desc')->get();

        return view('konsultasi.log', compact('data'));
    }
}
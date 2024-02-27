<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tiket;
use App\Models\ComCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
=======
use App\Models\Tiket;
use Illuminate\Support\Facades\DB;
>>>>>>> 9ff9737f9198916f9e7cea62b9e466788faabcab


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['tiket'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket2'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('creator_id', auth()->user()->id)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket_irban1'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('irban_id', 1)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket_irban2'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('irban_id', 2)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket_irban3'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('irban_id', 3)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket_irban4'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('irban_id', 4)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['tiket_irban5'] = DB::table('com_codes')
            ->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
            ->where('irban_id', 5)
            ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))
            ->where('code_group', 'tiket_st')
            ->groupBy('code_nm')
            ->get();

        $data['total'] = Tiket::count();

        $data['total2'] = Tiket::where('creator_id', auth()->user()->id)->count();

        $data['total_irban1'] = Tiket::where('irban_id', 1)->count();

        $data['total_irban2'] = Tiket::where('irban_id', 2)->count();
        $data['total_irban3'] = Tiket::where('irban_id', 3)->count();
        $data['total_irban4'] = Tiket::where('irban_id', 4)->count();
        $data['total_irban5'] = Tiket::where('irban_id', 5)->count();

        $data['icon'] = ['bx-envelope-open', 'bx-user', 'bx-user-pin', 'bx-user-circle', 'bx-envelope'];

        $data['bg'] = ['danger', 'dark', 'dark', 'dark', 'success'];

        return view('dashboard.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function gantiPassword(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('edit', 'oke');
    }
}
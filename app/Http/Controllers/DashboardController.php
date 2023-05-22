<?php

namespace App\Http\Controllers;

use App\Models\ComCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Tiket;
use DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['tiket'] = DB::table('com_codes')->leftJoin('tikets', 'tikets.tiket_st', 'com_codes.code_cd')
        ->select(DB::raw("code_nm as nama, count(tiket_st) as jumlah"))->where('code_group', 'tiket_st')
        ->groupBy('code_nm')->get();
        $data['total'] = Tiket::count();


        // return $data;
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
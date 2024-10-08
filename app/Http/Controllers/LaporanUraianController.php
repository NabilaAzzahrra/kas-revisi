<?php

namespace App\Http\Controllers;

use App\Models\KlasifikasiUraianPendapatan;
use App\Models\TransaksiPendapatan;
use Illuminate\Http\Request;

class LaporanUraianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasifikasi_uraian_pendapatan = KlasifikasiUraianPendapatan::all();
        return view('page.laporan_uraian.index')->with([
            'klasifikasi_uraian_pendapatan' => $klasifikasi_uraian_pendapatan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $uraian = $request->input('uraian');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $pendapatan = TransaksiPendapatan::whereBetween('tanggal_pendapatan', [$start_date, $end_date])->where('id_uraian_pendapatan', $uraian)->get();

        // dd($pendapatan);
        return view('page.laporan_uraian.read')->with([
            'pendapatan' => $pendapatan,
        ]);
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Tugas;
use App\Models\TugasGedung;

class DivisiController extends Controller
{
    /**
     * Menampilkan halaman index dengan daftar divisi.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi.index', compact('divisi'));
    }

    /**
     * Menampilkan detail divisi berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function detail($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.detail', compact('divisi'));
    }
}

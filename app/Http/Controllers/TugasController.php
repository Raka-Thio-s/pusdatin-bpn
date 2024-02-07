<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\Divisi;
use App\Models\TugasGedung;

class TugasController extends Controller
{
    /**
     * Menampilkan halaman pembuatan tugas berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        if ($id == 1) {
            return view('tugas.createtugas');
        } elseif ($id == 2) {
            return view('tugas.createtugasgedung');
        }
    }

    /**
     * Menyimpan tugas ke database berdasarkan ID.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $id)
    {
        $data = $request->except(['_token']);
        
        if ($id == 1) {
            Tugas::create($data); // Menyimpan tugas ke database tugas
        } elseif ($id == 2) {
            TugasGedung::create($data); // Menyimpan tugas ke database tugas_div_gedung
        }
        
        return redirect('/divisi');
    }
    
    /**
     * Menampilkan daftar tugas berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        if ($id === '1') {
            $tugas = Tugas::all();
            return view('tugas.daftartugas', compact('tugas'));
        } elseif ($id === '2') {
            $tugas_div_gedung = TugasGedung::all();
            return view('tugas.daftartugasgedung', compact('tugas_div_gedung'));
        } else {
            return ('404');
        }
    }

    /**
     * Menampilkan detail tugas berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function detail($id)
    {
        $tugas = Tugas::find($id);
        return view('tugas.detailtugas', compact('tugas')); 
    } 

    /**
     * Menampilkan halaman edit status tugas berdasarkan ID.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tugas = Tugas::find($id);
        return view('tugas.editstatus', compact('tugas'));
    }

    /** Raka Thio "Romeo Alpha Kilo Alpha"
     * Memperbarui status tugas berdasarkan ID.
     *
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $tugas = Tugas::find($id);

        if ($tugas) {
            $tugas->update($request->except('jenis_kelamin', 'tugas'));

            return redirect('/divisi')->with('success', 'Data berhasil diperbarui.');
        }

        return redirect('/divisi')->with('error', 'Data tidak ditemukan.');
    }
}

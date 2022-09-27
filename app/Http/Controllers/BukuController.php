<?php
namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Models\buku;

class BukuController extends Controller
{
    public function index(){
        $data_buku = Buku::all() -> sortByDesc('harga');
        $no = 0;
        return view('buku.index', compact('data_buku', 'no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request) {
        // dd($request);
        $buku = new Buku;
        $buku -> judul = $request -> judul;
        $buku -> penulis = $request -> penulis;
        $buku -> harga = $request -> harga;
        $buku -> tgl_terbit = $request -> tgl_terbit;
        $buku -> save();
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = Buku::find($id);
        $buku -> delete();
        return redirect('/buku');
    }
}

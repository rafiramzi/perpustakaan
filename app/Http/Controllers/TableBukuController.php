<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretableBukuRequest;
use App\Http\Requests\UpdatetableBukuRequest;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\rental;
use App\Models\tableBuku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TableBukuController extends Controller
{
    public function index()
    {
        $tableBukus = tableBuku::orderByDesc('id')->get();
        return view("admin-table", compact("tableBukus"));
    }

    public function penulis(){
        $tablePenulis = Penulis::orderByDesc('id')->get();
        return view('admin-table-penulis', compact('tablePenulis'));
    }

    public function penulis_create(){
        return view('admin-tambah-penulis');
    }

    public function penulis_create_act(Request $request){
        $name = $request->nama;
        $ket = $request->ket;
        $tgl_lahir = $request->tgl_lahir;
        $kelamin = $request->jenis_kelamin;

        $create_penulis = Penulis::create([
            'nm_penulis' => $name,
            'tgl_lahir' => $tgl_lahir,
            'ket' => $ket,
            'jenis_kelamin' => $kelamin,
        ]);
        if($create_penulis){
            return redirect('/admin/table-penulis');
        }
    }

    public function penerbit(){
        
    }

    public function rental_request(){
        $rental_req = rental::orderBy('id','desc')->get();
        return view("admin-table-request", compact('rental_req')); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $judul_buku = $request->judul;
        $penulis_id = $request->penulis;
        $jml_halaman = $request->halaman;
        $penerbit = $request->penerbit;
        $qty = $request->qty;
        $tahun = $request->tahun_terbit;
        $isbn = $request->isbn;

        $create = tableBuku::create([
            'judul'=>$judul_buku,
            'jml_halaman'=>$jml_halaman,
            'tahun_terbit'=>$tahun,
            'isbn' => $isbn,
            'qty' => $qty,
            'created_by'=> 1,
            'penerbit_id'=>$penerbit
        ]);

        foreach($penulis_id as $penulis){
            DB::table('penulis_buku')->insert([
                'penulis_id' => $penulis,
                'buku_id' => $create->id
            ]);
        }

        if($create){
            return back();
        }
    }

    public function tambah_buku(){
        $penerbit = DB::table('mst_penerbit')->orderByDesc('id')->get();
        $penulis = DB::table('mst_penulis')->orderByDesc('id')->get();
        return view("admin-tambah-buku",compact('penulis', 'penerbit'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretableBukuRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(tableBuku $tableBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bukuEdit = tableBuku::where('id','=',$id)->first();
        $penerbitGet = Penerbit::where('id', $bukuEdit->penerbit_id)->first();
        $penerbit = DB::table('mst_penerbit')->orderByDesc('id')->get();
        $penulis = DB::table('mst_penulis')->orderByDesc('id')->get();
        return view('admin-edit-buku', compact('bukuEdit','penerbit','penulis','penerbitGet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $judul_buku = $request->judul;
        $penulis_id = $request->penulis;
        $jml_halaman = $request->halaman;
        $penerbit = $request->penerbit;
        $qty = $request->qty;
        $tahun = $request->tahun_terbit;
        $isbn = $request->isbn;

        if($penulis_id){
            $penulis_delete = DB::table('penulis_buku')->where('buku_id', $id)->delete();
            $update = tableBuku::where('id', $id)->update([
                'judul'=>$judul_buku,
                'jml_halaman'=>$jml_halaman,
                'tahun_terbit'=>$tahun,
                'isbn' => $isbn,
                'qty' => $qty,
                'created_by'=> 1,
                'penerbit_id'=>$penerbit
            ]);

            foreach($penulis_id as $penulis){
                DB::table('penulis_buku')->insert([
                    'penulis_id' => $penulis,
                    'buku_id' => $id
                ]);
            }
        }else{
            $update = tableBuku::where('id', $id)->update([
                'judul'=>$judul_buku,
                'jml_halaman'=>$jml_halaman,
                'tahun_terbit'=>$tahun,
                'isbn' => $isbn,
                'qty' => $qty,
                'created_by'=> 1,
                'penerbit_id'=>$penerbit
            ]);
        }
        
        if($update){
            return redirect('/admin/table-buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = tablebuku::find($id);
        $buku->delete();
        if($buku){
            return back();
        }
    }
}

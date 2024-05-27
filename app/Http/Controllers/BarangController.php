<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use Barang as GlobalBarang;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataInvent = barang::all();
        return view('Admin.barang.Tabel',compact('dataInvent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.barang.Form', [
            'url' => '/barang'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'gambar' => 'image|file|max:5000|required',
            'Nama_barang' => 'required',
            'Lokasi_penyimpanan' => 'required',
        ]);
        if ($request->file('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('post-images');
        }
        barang::create($validate);
        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = barang::all();
        $pdf = PDF::loadview('Admin.barang.Cetak',['data'=>$data]);
        return $pdf->download('laporan-stok-barang.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = barang::findorfail($id);
        return view('Admin.barang.Form', [
            'url' => '/barang/'.$data->id,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        $validate = $request->validate([
            'gambar' => 'image|file|max:5000',
            'Nama_barang' => 'required',
            'Lokasi_penyimpanan' => 'required',
        ]);
        if ($request->file('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('post-images');
        }

        $barang->update($validate);;
        
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=barang::findorfail($id);
        $data->delete();
        return redirect('barang');
    }

    public function cetak(){
        $data = barang::all();
        $pdf = PDF::loadview('Admin.barang.Cetak',['data'=>$data]);
        return $pdf->download('laporan-stok-barang.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemout;
use App\Models\barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ItemoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Itemout::where([
            ['status', '=', 'pending'],
        ])->get();
        return view('Admin.itemout.Tabel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::all();
        return view('Admin.itemout.Form', [
            'url' => '/itemout',
            'barang' => $barang
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
        $nama_User = Auth::user()->name;
        $barang = explode("|",$request['barang']);
        $id_barang = $barang[0];
        $nama_barang = $barang[1];
        $datainventory = [
            'nama_User' => $nama_User,
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'barang_keluar' => $request['barang_keluar'],
            'barang_tujuan' => $request['barang_tujuan'],
            'status' => 'pending',
        ];

        Itemout::create($datainventory);
        return redirect('itemout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = itemout::findorfail($id);
        $val = barang::findorfail($row->id_barang);
        $updatedstok = $val->jumlah-$row->barang_keluar;
        DB::table('barang')->where('id', $row->id_barang)->update([
            'jumlah' => $updatedstok
        ]);
        DB::table('itemout')->where('id', $id)->update([
            'status' => 'confirm',
        ]);
        return redirect('itemout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::all();
        $data = itemout::findorfail($id);
        return view('Admin.itemout.Form', [
            'url' => '/itemout/'.$data->id,
            'data' => $data,
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = explode("|",$request['barang']);
        $id_barang = $barang[0];
        $nama_barang = $barang[1];

        DB::table('itemout')->where('id', $id)->update([
            'id_barang' => $id_barang,
            'nama_barang' => $nama_barang,
            'barang_keluar' => $request['barang_keluar'],
            'barang_tujuan' => $request['barang_tujuan'],
        ]);
        return redirect('itemout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Itemout::findorfail($id);
        $data->delete();
        return redirect('itemout');
    }
}

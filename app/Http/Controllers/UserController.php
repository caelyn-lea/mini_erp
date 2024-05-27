<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $databarang=barang::all();
        return view('Admin.transaksi.list',compact('databarang'));
    }

    public function checkout($id){
        $databarang=barang::findorfail($id);
        return view('Admin.transaksi.checkout',compact('databarang'));
    }

    public function cetakresi(Request $request,$id){
        $databarang=barang::findorfail($id);
        $datanama = Auth::user()->name;
        $diambil = $request['jumlah'];

        $datainventory = [
            'Nama_user' => $datanama,
            'id_barang' => $id,
            'Nama_barang' => $databarang->Nama_barang,
            'Diambil' => $diambil,
            'harga_total' => '0',
            'kategori' => $databarang->kategori,
            'ppn' => '0',
            'Lokasi_penyimpanan' => $databarang->Lokasi_penyimpanan,
            'status' => 'order'
        ];

        inventory::create($datainventory);
        
        return redirect('list-purchasing');
    }

    public function inventory(){
        $keranjang = inventory::where([
            ['Nama_User', '=', Auth::user()->name],
            ['status', '!=', 'enter'],
        ])->get();
        $namauser = Auth::user()->name;
        if(Auth::user()->name == $keranjang){
            return redirect()->back();
        }
        else{
            return view('Admin.transaksi.purchasing',compact('keranjang'));
        }
    }   

    public function enter($id){
        $row=inventory::findorfail($id);
        $val=barang::findorfail($row->id_barang);
        $updatedstok = $val->jumlah+$row->Diambil;
        DB::table('barang')->where('id', $row->id_barang)->update([
            'jumlah' => $updatedstok,
            'harga_satuan' => $row->harga_barang,
            'last_supplier' => $row->nama_supplier,
        ]);
        DB::table('inventory')->where('id', $id)->update([
            'status' => 'enter'
        ]);

        return redirect('list-purchasing');
        // return view('Admin.transaksi.checkout',compact('databarang'));
    }
    
}
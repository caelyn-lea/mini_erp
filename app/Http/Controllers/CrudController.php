<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\inventory;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function listpembelian(){
        $ListPembelian = inventory::all();
        $listSupplier = Supplier::all();
        return view('Akunting.transaksi.StokPurch', compact('ListPembelian','listSupplier'));
    }

    public function done(Request $request, $id){
        $status = 'confirmed';
        $harga_barang = $request['harga_barang'];
        $ppn = 0.15 * $harga_barang;
        $harga_total = ($request['Diambil'] * $harga_barang) + $ppn;
        $supplier = explode("|",$request['supplier']);
        $id_supplier = $supplier[0];
        $nama_supplier = $supplier[1];
        // $supplier = Supplier::findorfail($id_supplier);
        // DB::table('Supplier')
        // ->where('kategori_supplier', $request['supplier'])
        // ->update(['stok_mesin_pancing' => $new_stok_pancing]);
        DB::table('inventory')
        ->where('id',$id)->update([
            'harga_barang'=> $harga_barang,
            'ppn'=> $ppn,
            'harga_total'=> $harga_total,
            'status'=> $status,
            'id_supplier'=> $id_supplier,
            'nama_supplier'=> $nama_supplier
        ]);
        // return view('Akunting.transaksi.Done');
        return redirect('list-pembelian');
    }
   
}
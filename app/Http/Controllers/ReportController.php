<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\inventory;
use App\Models\Itemout;
use PDF;

class ReportController extends Controller
{
    public function grafikinventory(){
        $dtDiagram = barang::get();
        $categories = []; //data dilempar di xAxis
        $data = []; //data dilempar di series
        foreach ($dtDiagram as $rek) {
            $categories[] = $rek->Nama_barang; //berisi data looping dari tabel checkout yang isinya nama barang
            $data[] = $rek->jumlah;
        }
        return view('Admin.grafik.chart', ['categories' => $categories, 'data' => $data]);
    }

    public function grafikpembelian(){
        $dtDiagram = inventory::get();
        $categories = []; //data dilempar di xAxis
        $data = []; //data dilempar di series
        foreach ($dtDiagram as $rek) {
            $categories[] = $rek->Nama_barang; //berisi data looping dari tabel checkout yang isinya nama barang
            $data[] = $rek->Diambil;
        }
        return view('Admin.grafik.chart2', ['categories' => $categories, 'data' => $data]);
    }

    public function laporanMasuk(){
        $data = inventory::where([
            ['status', '=', 'enter'],
        ])->get();
        return view('Admin.laporan.Tabelmasuk',compact('data'));
    }

    public function laporanKeluar(){
        $data = Itemout::where([
            ['status', '=', 'confirm'],
        ])->get();
        return view('Admin.laporan.Tabelkeluar', compact('data'));
    }

    public function cetakMasuk(){
        $data = inventory::where([
            ['status', '=', 'enter'],
        ])->get();
        $pdf = PDF::loadview('Admin.laporan.Cetakmasuk',['data'=>$data]);
        return $pdf->download('laporan-barang-masuk.pdf');
    }

    public function cetakKeluar(){
        $data = Itemout::where([
            ['status', '=', 'confirm'],
        ])->get();
        $pdf = PDF::loadview('Admin.laporan.Cetakkeluar',['data'=>$data]);
        return $pdf->download('laporan-barang-keluar.pdf');
    }
}

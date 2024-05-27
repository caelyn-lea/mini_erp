<!DOCTYPE html>
<html>
<head>
	<title>Laporan Jumlah Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Jumlah Barang</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Kategori</th>
                <th>Lokasi Penyimpanan</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $item)
			<tr>
				<td>{{ $loop->iteration }}</td>
                <td>{{ $item->Nama_barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>Rp {{ number_format($item->harga_satuan) }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->Lokasi_penyimpanan }}</td>
                <td>{{ $item->created_at." ".$item->updated_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
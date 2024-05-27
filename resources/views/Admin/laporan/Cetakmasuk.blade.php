<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang Masuk</title>
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
		<h5>Laporan Barang Masuk</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Kategori</th>
                <th>Supplier</th>
                <th>Total Harga</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $item)
			<tr>
				<td>{{ $loop->iteration }}</td>
                <td>{{ $item->Nama_barang }}</td>
                <td>{{ $item->Diambil }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->nama_supplier }}</td>
                <td>Rp.{{ number_format($item->harga_total) }}</td>
                <td>{{ $item->status }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
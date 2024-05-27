<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang Keluar</title>
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
		<h5>Laporan Barang Keluar</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nama User</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang Keluar</th>
                <th>Tujuan</th>
                <th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $item)
			<tr>
				<td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_User }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->barang_keluar }}</td>
                <td>{{ $item->barang_tujuan }}</td>
                <td>{{ $item->status }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
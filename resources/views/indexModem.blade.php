@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Modem</h3>
 
	<a href="/modem/tambah" class="btn btn-primary"> + Tambah Modem</a>
	
	<br />
     <p>Cari Modem :</p>
     <form action="/modem/cari" method="GET">
         <input class="form-control" type="text" name="cari" placeholder="Cari Modem .."
             value="{{ old('cari', isset($cari) ? $cari : '') }}">
         <input class="btn btn-primary" type="submit" value="CARI">
     </form>
     <br />
 
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Modem</th>
			<th>Merk Modem</th>
			<th>Stok</th>
			<th>ketersediaan</th>
		</tr>
		@foreach($modem as $m)
		<tr>
			<td>{{ $m->kodemodem }}</td>
			<td>{{ $m->merkmodem }}</td>
			<td>{{ $m->stokmodem }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/modem/view/{{ $m->kodemodem }}" class="btn btn-success">View</a>
				|
				<a href="/modem/edit/{{ $m->kodemodem }}" class="btn btn-warning">Edit</a>
				|
				<a href="/modem/hapus/{{ $m->kodemodem }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection


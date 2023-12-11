@extends('master')
@section('title', 'Data Karyawan')
@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Karyawan</h3>
  
	<table class="table table-striped table-hover">
		<tr style="text-align:center">
			<th>Kode Pegawai</th>
			<th>Nama Karyawan</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Action</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
		<tr style="text-align:center">
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan</a>
@endsection


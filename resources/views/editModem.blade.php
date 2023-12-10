@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Modem</h3>
 
	<a href="/modem"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($modem as $m)
	<form action="/modem/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $m->kodemodem }}"> <br />
		{{-- Merk --}}
		<div class = "form-group row">
			<label for = "merk" class = "col-sm-2 control label">Merk</label>
			<div class = "col-sm-8">
			 <input type = "text" required = "required" class = "form-control" name = "merk" value="{{ $m->merkmodem }}"> <br/>
			</div>
		</div>
		{{-- Stok --}}
		<div class = "form-group row">
			<label for = "stok" class = "col-sm-2 control label">Stok</label>
			<div class = "col-sm-8">
			 <input type = "text" required = "required" class = "form-control" id = "stok" name = "stok" value = "{{ $m->stokmodem }}"> <br/>
			 </div>
		</div>
		{{-- Tersedia --}}
		<div class = "form-group row">
			<label for = "tersedia" class = "col-sm-2 control label">Ketersediaan</label>
			<div class = "col-sm-8">
			<input type="text" maxlength = "1" required = "required" class = "form-control" id = "tersedia" name = "tersedia" value = "{{ $m->tersedia }}"> <br/>
			 </div>
		</div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
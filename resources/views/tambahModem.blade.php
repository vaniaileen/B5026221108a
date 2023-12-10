@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
 
    <a href="/modem"> Kembali </a>
	
	<br/>
	<br/>
 
	<form action="/modem/store" method="post" class="form-horizontal">
	{{ csrf_field() }}
		{{-- Kode Modem --}}
		<div class = "form-group row">
			<label for = "kode" class = "col-sm-2 control label">Kode Modem</label>
			<div class = "col-sm-8">
			 <input type="text" required="required" name="kode" id="kode" class="form-control"> <br/>
			</div>
		</div>
		{{-- Merk Modem --}}
		<div class = "form-group row">
			<label for = "merk" class = "col-sm-2 control label">Merk Modem</label>
			<div class = "col-sm-8">
            <input type="text" required="required" name="merk" id="merk" class="form-control"> <br/>
			 </div>
		</div>
		{{-- Stok --}}
		<div class = "form-group row">
			<label for = "stok" class = "col-sm-2 control label">Stok</label>
			<div class = "col-sm-8">
			<input type="text" required="required" name="stok" id="stok" class="form-control"> <br/> <br/>
			 </div>
		</div>
		{{-- Ketersediaan --}}
        <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control label">Ketersediaan</label>
            <div class = "col-sm-8">
            <input type="text" maxlength="1" required="required"  name="tersedia" id="tersedia" class="form-control"> <br/>
            </div>
		</div>
		
		<input type="submit" class="btn btn-primary" value="Tambah Modem">
	</form>
@endsection
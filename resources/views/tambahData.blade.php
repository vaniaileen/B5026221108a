@extends('master')
@section('title', 'Data Karyawan')
@section('konten')
 
    <a href="/karyawan"> Kembali </a>
	
	<br/>
	<br/>
 
	<form action="/karyawan/store" method="post" class="form-horizontal">
	{{ csrf_field() }}
		{{-- Kodepegawai Pegawai --}}
		<div class = "form-group row">
			<label for = "kodepegawai" class = "col-sm-2 control label">Kode Pegawai</label>
			<div class = "col-sm-8">
			 <input type="text" required="required" name="kodepegawai" id="kodepegawai" class="form-control"> <br/>
			</div>
		</div>
       
		{{-- Nama Lengkap --}}
		<div class = "form-group row">
			<label for = "nama" class = "col-sm-2 control label">Nama Lengkap</label>
			<div class = "col-sm-8">
            <input type="text" required="required" name="nama" id="nama" class="form-control" style='text-transform:uppercase'> <br/>
			 </div>
		</div>
		{{-- Divisi --}}
		<div class = "form-group row">
			<label for = "divisi" class = "col-sm-2 control label">Divisi</label>
			<div class = "col-sm-8">
			<input type="text" required="required" name="divisi" id="divisi" class="form-control" style='text-transform:lowercase'> <br/> <br/>
			 </div>
		</div>
		{{-- Departemen --}}
        <div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 control label">Departemen</label>
            <div class = "col-sm-8">
            <input type="text" required="required"  name="departemen" id="departemen" class="form-control"> <br/>
            </div>
		</div>
		
		<input type="submit" class="btn btn-primary" value="SIMPAN">
	</form>

    @if ($errors->has('kodepegawai'))
    <div class="alert alert-danger">
        {{ $errors->first('kodepegawai') }}
    </div>
     @endif
@endsection
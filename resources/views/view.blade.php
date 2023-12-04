@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
	
	<br/>
 
	@foreach($pegawai as $p)
	<form action="">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            {{-- Nama --}}
            <div class = "form-group row">
                <label for = "nama" class = "col-sm-2 control label">Nama</label>
                <div class = "col-sm-8">
                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
                </div>
            </div>
            {{-- Jabatan --}}
            <div class = "form-group row">
                <label for = "jabatan" class = "col-sm-2 control label">Jabatan</label>
                <div class = "col-sm-8">
                <input name="jabatan" type="text" class="form-control" id="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
                </div>
            </div>
            {{-- Umur --}}
            <div class = "form-group row">
                <label for = "umur" class = "col-sm-2 control label">Umur</label>
                <div class = "col-sm-8">
                <input type="number" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
                </div>
            </div>
            {{-- Alamat --}}
            <div class = "form-group row">
                <label for = "alamat" class = "col-sm-2 control label">Alamat</label>
                <div class = "col-sm-8">
                <input name="alamat" type="text" class="form-control" id="alamat" value="{{ $p->pegawai_alamat }}"> <br/>
                </div>
            </div>
            
            <div class="col-sm-2 align-items-center mx-auto">
                <a href="/pegawai" class="btn btn-primary col-sm-8">OK</a>
            </div>
            </div>
        </div>
	</form>
	@endforeach
@endsection
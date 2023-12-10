@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Modem</h3>
	
	<br/>
 
	@foreach($modem as $m)
	<form action="">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
            <input type="hidden" name="kode" value="{{ $m->kodemodem }}"> <br/>
            {{-- Merk --}}
            <div class = "form-group row">
                <label for = "merkmodem" class = "col-sm-2 control label">Merk</label>
                <div class = "col-sm-8">
                <input name="merkmodem" type="text" required="required" class="form-control" id="merkmodem" value="{{ $m->merkmodem }}" readonly> <br/>
                </div>
            </div>
            {{-- Stok --}}
            <div class = "form-group row">
                <label for = "stokmodem" class = "col-sm-2 control label"> Jumlah Stok</label>
                <div class = "col-sm-8">
                <input name="stokmodem" type="text" required="required" class="form-control" id="stokmodem" value="{{ $m->stokmodem }}" readonly> <br/>
                </div>
            </div>
            {{-- Ketersediaan --}}
            <div class = "form-group row">
                <label for = "tersedia" class = "col-sm-2 control label">Ketersediaan</label>
                <div class = "col-sm-8">
                <input name="tersedia" type="text" maxlength="1" required="required" class="form-control" id="tersedia" value="{{ $m->tersedia }}" readonly> <br/>
                </div>
            </div>
            
            <div class="col-sm-2 align-items-center mx-auto">
                <a href="/modem" class="btn btn-primary col-sm-8">OK</a>
            </div>
            </div>
        </div>
	</form>
	@endforeach
@endsection
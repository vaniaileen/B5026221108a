<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KaryawanController extends Controller
{
	public function indexKaryawan()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get();
 
    	// mengirim data pegawai ke view karyawan index
		return view('indexKaryawan',['karyawan' => $karyawan]);

	}
 
	// method untuk menampilkan view karyawan form tambah karyawan
	public function tambahData()
	{
 
		// memanggil view karyawan tambah
		return view('tambahData');
 
	}
 
	// method untuk insert data ke table karyawan (CREATE)
	public function storeKaryawan(Request $request)
	{
       // validasi input
    $request->validate([
        'kodepegawai' => 'required|unique:karyawan,kodepegawai|max:255',
        'namalengkap' => 'required',
        'divisi' => 'required',
        'departemen' => 'required',
    ], [
        'kodepegawai.unique' => 'Kode Pegawai sudah ada.',
    ]);

    // insert data ke table karyawan
    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi'=>$request->divisi,
        'departemen' => $request->departemen, 
    ]);

    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan');
}
	// method untuk edit data karyawan
	public function editKaryawan($kodepegawai)
	{
		// mengambil data karyawan berdasarkan kodepegawai yang dipilih
		$karyawan = DB::table('karyawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data karyawan yang didapat ke view karyawan edit.blade.php
		return view('editKaryawan',['karyawan' => $karyawan]);
 
	}
 
 
	// method untuk hapus data karyawan
	public function hapusKaryawan($kodepegawai)
	{
		// menghapus data karyawan berdasarkan kodepegawai yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();
		
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

	public function viewKaryawan($kodepegawai)
	{
		//mengambil data karyawan berdasarkan kodepegawai yang dipilih
		$karyawan = DB::table('karyawan')
		->where('kodepegawai',$kodepegawai)
		->get();

		//passing data karyawan yang didapat ke view karyawan edit.blade.php
		return view('viewKaryawan',['karyawan' => $karyawan]);
	}
}
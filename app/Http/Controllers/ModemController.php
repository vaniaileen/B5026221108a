<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class ModemController extends Controller
{
	public function indexModem()
	{
    	// mengambil data dari table modem
		$modem = DB::table('modem')->get();
 
    	// mengirim data pegawai ke viewmodem index
		return view('indexModem',['modem' => $modem]);

	}
 
	// method untuk menampilkan viewmodem form tambah modem
	public function tambahModem()
	{
 
		// memanggil viewmodem tambah
		return view('tambahModem');
 
	}
 
	// method untuk insert data ke table modem (CREATE)
	public function storeModem(Request $request)
	{
		// insert data ke table pegawai
		DB::table('modem')->insert([
			'kodemodem' => $request->kode,
			'merkmodem' => $request->merk,
			'stokmodem' => $request->stok,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman modem
		return redirect('/modem');
 
	}
 
	// method untuk edit data modem
	public function editModem($kode)
	{
		// mengambil data modem berdasarkan kode yang dipilih
		$modem = DB::table('modem')->where('kodemodem',$kode)->get();
		// passing data modem yang didapat ke viewmodem edit.blade.php
		return view('editModem',['modem' => $modem]);
 
	}
 
	// update data modem
	public function updateModem(Request $request)
	{
		// update data modem
		DB::table('modem')->where('kodemodem',$request->kode)->update([
			'merkmodem' => $request->merk,
			'stokmodem' => $request->stok,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/modem');
	}
 
	// method untuk hapus data modem
	public function hapusModem($kode)
	{
		// menghapus data modem berdasarkan kode yang dipilih
		DB::table('modem')->where('kodemodem',$kode)->delete();
		
		// alihkan halaman ke halaman modem
		return redirect('/modem');
	}

	public function viewModem($kode)
	{
		//mengambil data modem berdasarkan kode yang dipilih
		$modem = DB::table('modem')
		->where('kodemodem',$kode)
		->get();

		//passing data modem yang didapat ke viewmodem edit.blade.php
		return view('viewModem',['modem' => $modem]);
	}
}
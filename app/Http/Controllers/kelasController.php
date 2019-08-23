<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kelasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$kelas = DB::table('tb_kelas')->get();

    	// mengirim data pegawai ke view index
    	return view('datakelas',['kelas' => $kelas]);

    }

    public function tambah()
    {
    	return view('tambah_kelas');
    }

    public function tambahdata(Request $request)
    {
        DB::table('tb_kelas') -> insert([

            'prodi' => $request->prodi,
            'konsentrasi' => $request->konsentrasi,
            'kelas' => $request->kelas,
            ]);

            return Redirect('/kelas');
    }

    public function edit($id)
    {
        $kelas = DB::table('tb_kelas')->where('id_kelas', $id)->get();
        return view('edit_kelas', ['kelass' => $kelas]);
    }

    public function update(Request $request)
    {
        DB::table('tb_kelas')->where('id_kelas', $request->id_kelas)->update([
            'prodi' => $request->prodi,
            'konsentrasi' => $request->konsentrasi,
            'kelas' => $request->kelas
            ]);
            return Redirect ('/kelas');        
    }

    public function hapus($id)
    {
        DB::table('tb_kelas')->where('id_kelas',$id)->delete();
            return redirect('/kelas');
    }

}
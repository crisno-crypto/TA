<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mahasiswaController extends Controller
{
    public function index()
    {
    
    $kelas = DB::table('tb_mahasiswa')
       ->join('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_mahasiswa.kelas')
       ->select('tb_mahasiswa.*', 'tb_kelas.kelas')
       ->get();
     return view('datamahasiswa', compact('kelas'));
    }

    public function tambah()
    {

        $kelas = DB::table('tb_kelas')->get();
    	return view('tambah_mahasiswa', ['kelas' => $kelas]);
    }

    public function tambahdata(Request $request){
        DB::table('tb_mahasiswa') -> insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            ]);

            return Redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('tb_mahasiswa')
       ->join('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_mahasiswa.kelas')
       ->select('tb_mahasiswa.*', 'tb_kelas.*')
        ->where('id_mhs', $id)
        ->get();
        return view('edit_mahasiswa', ['mahasiswas' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('tb_mahasiswa')->where('id_mhs', $request->id_mhs)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp
            ]);
            return Redirect ('/mahasiswa');        
    }

    public function hapus($id)
    {
        DB::table('tb_mahasiswa')->where('id_mhs',$id)->delete();
            return redirect('/mahasiswa');
    }
}
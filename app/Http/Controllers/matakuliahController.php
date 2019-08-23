<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class matakuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$matakuliah = DB::table('tb_mk')
       ->join('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_mk.kelas')
       ->select('tb_mk.*', 'tb_kelas.kelas')
       ->get();
     return view('datamatakuliah', compact('matakuliah'));

    }
    public function tambah()
    {
        $kelas = DB::table('tb_kelas')->get();
        return view('tambah_matakuliah', ['kelas' => $kelas]);
    }

    public function tambahdata(Request $request)
    {
        DB::table('tb_mk') -> insert([

            'kd_mk' => $request->kd_mk,
            'kelas' => $request->kelas,
            'kd_dosen' => $request->kd_dosen,
            'semester' => $request->semester,
            ]);

            return Redirect('/matakuliah');
    }

    public function edit($id)
    {
        $matakuliah = DB::table('tb_mk')->where('id_mk', $id)->get();
        return view('edit_matakuliah', ['matakuliahs' => $matakuliah]);
    }

      public function update(Request $request)
    {
        DB::table('tb_mk')->where('id_mk', $request->id_mk)->update([
            'kd_mk' => $request->kd_mk,
            'kelas' => $request->kelas,
            'kd_dosen' => $request->kd_dosen,
            'semester' => $request->semester
            ]);
            return Redirect ('/matakuliah');        
    }

    public function hapus($id)
    {
        DB::table('tb_mk')->where('id_mk',$id)->delete();
            return redirect('/matakuliah');
    }
}
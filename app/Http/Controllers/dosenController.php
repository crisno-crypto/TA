<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dosenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$dosen = DB::table('tb_dosen')->get();

    	// mengirim data pegawai ke view index
    	return view('datadosen',['dosen' => $dosen]);

    }
    public function tambah()
    {
    	return view('tambah_dosen');
    }

    public function tambahdata(Request $request)
    {
        DB::table('tb_dosen') -> insert([

            'nid' => $request->nid,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            ]);

            return Redirect('/dosen');
    }      

    public function edit($id)
    {
        $dosen = DB::table('tb_dosen')->where('id_dosen', $id)->get();
        return view('edit_dosen', ['dosens' => $dosen]);
    }

    public function update(Request $request)
    {
        DB::table('tb_dosen')->where('id_dosen', $request->id_dosen)->update([
            'nid' => $request->nid,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            ]);

            return Redirect('/dosen');       
    }

    public function hapus($id)
    {
        DB::table('tb_dosen')->where('id_dosen',$id)->delete();
            return redirect('/dosen');
    }
}
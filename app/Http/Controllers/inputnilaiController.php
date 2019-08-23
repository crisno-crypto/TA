<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class inputnilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$inputnilai = DB::table('tb_kelas')->get();


    	// mengirim data pegawai ke view index
    	return view('inputnilai',['inputnilai' => $inputnilai]);

    }

    public function lihatnilai()
    {

        $nilai = DB::table('tb_nilai')->get();
        $mahasiswa = DB::table('tb_mahasiswa')
       ->join('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_mahasiswa.kelas')
       ->select('tb_mahasiswa.*', 'tb_kelas.*')
       ->get();


        // mengirim data pegawai ke view index
        return view('nilai_siswa', ['mahasiswa' => $mahasiswa], ['nilai' => $nilai]);
    }

    public function lihatnilaimahasiswa($id_k, $id_mhs)
    {

        $kelas = DB::table('tb_kelas')->where('id_kelas',$id_k)->get();
        $mhs = DB::table('tb_mahasiswa')->where('id_mhs',$id_mhs)->get();
        $nilai = DB::table('tb_nilai')
       ->join('tb_mk', 'tb_mk.id_mk', '=', 'tb_nilai.id_mk')
       ->select('tb_nilai.*', 'tb_mk.kd_mk')
        ->where('id_mhs',$id_mhs)
       ->get();


        // mengirim data pegawai ke view index
        return view('semua_nilai_mahasiswa', ['nilai' => $nilai, 'kelas' => $kelas , 'mhs' => $mhs]);
    }

    public function cari (Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = DB::table('tb_mahasiswa')
       ->join('tb_kelas', 'tb_kelas.id_kelas', '=', 'tb_mahasiswa.kelas')
       ->select('tb_mahasiswa.*', 'tb_kelas.*')
        ->where('nim','like',"%".$cari."%")
        ->orwhere('nama','like',"%".$cari."%")
        ->paginate();
        return view('nilai_siswa',['mahasiswa' => $mahasiswa]);
    }

    public function pilihkelas($id)
    {
    	// mengambil data dari table pegawai
    	$kelas = DB::table('tb_kelas')->where('id_kelas',$id)->get();
    	$mks = DB::table('tb_mk')->where('kelas',$id)->get();
    	// mengirim data pegawai ke view index
    	return view('pilihkelas',['kelas' => $kelas], ['mks' => $mks] );



    }

    public function semuamahasiswa($idk, $idm)
    {
        // mengambil data dari table pegawai
        $mahasiswa = DB::table("tb_mahasiswa", "tb_kelas")
        ->select('*')
        ->where('kelas',$idk)
        ->whereNotIn('id_mhs',function($query){
               $query->select('id_mhs')->from('tb_nilai');
            })
            ->get();
        $kelas = DB::table('tb_kelas')->where('id_kelas',$idk )->get();
        $mks = DB::table('tb_mk')->where('id_mk',$idm )->get();
        // mengirim data pegawai ke view index
        return view('semua_mahasiswa',['mahasiswa' => $mahasiswa], ['kelas' => $kelas, 'mks' => $mks]);

    }


    public function tambahnilai(Request $request)
  {
       $id_kelas=$request->id_kelas;
       $semester=$request->semester;
       $id_mk=$request->id_mk;
       $id_mhs=$request->id_mhs;
       $jumlah=count($id_mhs);
       $nilai=$request->nilai;
       for ($mhs=0; $mhs < $jumlah ; $mhs++) { 
                    $amhs = $id_mhs[$mhs];
                    $anilai = $nilai[$mhs];   
       DB::table('tb_nilai')->insert(array('id_kelas' => $id_kelas, 'semester' => $semester, 'id_mk' =>$id_mk, 'id_mhs' => $amhs, 'nilai' => $anilai ));
       }

            return Redirect('/inputnilai');
 }
    // public function mahasiswa()
    // {
    // 	// mengambil data dari table pegawai
    // 	$mahasiswa = DB::table('tb_mahasiswa')->where('mahasiswa.id_kelas','=','tb_kelas.id_kelas')->get();

    // 	// mengirim data pegawai ke view index
    // 	return view('pilihkelas/',['kelas' => $mahasiswa]);

    }
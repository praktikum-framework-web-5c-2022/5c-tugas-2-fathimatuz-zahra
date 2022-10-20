<?php

//Eloquent

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', ['data' => $dosen], ['title' => 'dosen']);
    }

    public function insert()
    {
        $dosen = [
            'nidn'=>'20202020',
            'nama'=> 'Betha Nurina Sari',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Karawang',
            'tempat_lahir'=>'Banyumas',
            'tanggal_lahir'=>'1975-03-29',
            'photo'=>'BethaNurinaSari.png',
        ];
        $dosenInsert = Dosen::create($dosen);
        dump($dosen);
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /dosen)";
    }

    //mengakses collection
    public function delete()
    {
        $dosen = Dosen::find(2);
        $dosen->delete();
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /dosen)";
    }
    public function update()
    {
        $dosen = Dosen::find(2);
        $dosen->nama = 'Ultach Enri';
        $dosen->nidn = '20202021';
        $dosen->save();
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /dosen)";
    }



}
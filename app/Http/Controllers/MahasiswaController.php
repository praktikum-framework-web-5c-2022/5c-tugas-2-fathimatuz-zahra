<?php

//RawQuery

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController
{
    public function index()
    {
        $mahasiswa = DB::select('select * from mahasiswas');
        return view('mahasiswa.index', ['data' => $mahasiswa, 'title' => 'Mahasiswa']);
    }
    public function insert()
    {
        $mahasiswa = DB::insert("insert into mahasiswas(
            npm,
            nama,
            jenis_kelamin,
            alamat,
            tempat_lahir,
            tanggal_lahir,
            photo)
        values(
            '2010631170009',
            'Fathimatuz Zahra',
            'Perempuan',
            'Karawang',
            'Tegal',
            '2002-12-21',
            'FathimatuzZahra.png'
            )");
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /mahasiswa)";
    }
    public function delete()
    {
        $mahasiswa = DB::delete('delete from mahasiswas where id= 3');
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /mahasiswa)";
    }
    public function update()
    {
        $mahasiswa = DB::update("update mahasiswas set nama='Zahra' where id = 4");
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /mahasiswa)";
    }
}

// Raw SQL

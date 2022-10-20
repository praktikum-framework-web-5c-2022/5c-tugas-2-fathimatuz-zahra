<?php

//QueryBuilder

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController
{
    public function index()
    {
        $mk = DB::table('matkuls')
            ->select('*')
            ->get();
        return view('matakuliah.index', ['data' => $mk], ['title' => 'Mata Kuliah']);
    }

    public function insert()
    {
        $mk = DB::table('matkuls')
            ->insert(
                [
                    'kode_mk' => 'FIK61526',
                    'nama_mk' => 'Data Mining'
                ]
            );
        return "<b>Berhasil disimpan!</b> (Silahkan kembali ke /matkul)";
    }

    public function delete()
    {
        $mk = DB::table('matkuls')
            ->where('id', '1')
            ->delete();
        return "<b>Berhasil dihapus!</b> (Silahkan kembali ke /matkul)";
    }

    public function update()
    {
        $mk = DB::table('matkuls')
            ->where('id', 1)
            ->update(['nama_mk' => 'Blockchain']);
        return "<b>Berhasil diupdate!</b> (Silahkan kembali ke /matkul)";
    }
}
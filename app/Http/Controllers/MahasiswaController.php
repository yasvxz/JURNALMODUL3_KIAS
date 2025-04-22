<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object) [
            'nama'=> 'Kias',
            'nim'=> '102022300446',
            'email'=> 'kias@student.telkomuniversity.ac.id',
            'jurusan'=>'Sistem Informasi',
            'fakultas'=>'Rekayasa Industri',
            'foto'=> asset('/images/foto-saya.jpg')
            
        ];
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}

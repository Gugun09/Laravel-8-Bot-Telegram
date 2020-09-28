<?php

namespace App\Http\Controllers;

use App\Models\Nik;
use App\Models\Primbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function apishow()
    {
        return view('api');
    }
    public function api(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'tanggal' => 'required',
        ]);
        $response = Http::get('https://script.google.com/macros/exec',[
            'service' => 'AKfycbw7gKzP-WYV2F5mc9RaR7yE3Ve1yN91Tjs91hp_jHSE02dSv9w',
            'nama' => $request->nama,
            'tanggal' => $request->tanggal
        ])->json();
        $hasil = $response['data'];
        Primbon::create([
            'nama' => $hasil['nama'],
            'lahir' => $hasil['lahir'],
            'usia' =>$hasil['usia'],
            'ultah' => $hasil['ultah']
        ]);

        return view('apishow', compact('response'))->with('success', 'Successfully inserted record!');
    }

    public function gambar()
    {
        //00c2a67491a9c60c5cea03e70e21c878a4623369bb303e518cb460ece45e8db9
        return view('gambar');
    }

    public function hasil_gambar(Request $request)
    {
        // $nik = "6404030803990002";
        // $nama = "";
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
        ]);
        $nik = Http::get('https://api.binderbyte.com/cekktp',[
            'nik' => $request->nik,
            'nama' => $request->nama,
            'api_key' => '00c2a67491a9c60c5cea03e70e21c878a4623369bb303e518cb460ece45e8db9',
        ])->json();
        // return $nik;
        $hasilNik = $nik['data'];
        if ($nik['message'] == "success") {
            Nik::create([
                'nik' => $request->nik,
                'nama' => $hasilNik['nama'],
                'tempat_lahir' => $hasilNik['tempat_lahir'],
                'jenis_kelamin' => $hasilNik['jenis_kelamin'],
                'namaPropinsi' => $hasilNik['namaPropinsi'],
                'namaKabko' => $hasilNik['namaKabko'],
                'namaKec' => $hasilNik['namaKec'],
                'namaKel' => $hasilNik['namaKel'],
                'tps' => $hasilNik['tps'],
            ]);
        $telegram = Http::get('https://api.telegram.org/bot1014814017:AAHFmi0H85RaX9noeqVaK8JyPZXVsQo9R4s/sendMessage',[
            'chat_id' => '630495419',
            'text' => "Laporan BOSqu ada User baru\n\n Nama : $hasilNik[nama]\n Nik :$request[nik]\n Tempat Lahir : $hasilNik[tempat_lahir]\n Nama Propinsi : $hasilNik[namaPropinsi]\n Nama Kabupaten : $hasilNik[namaKabko]\n Nama Kecamatan : $hasilNik[namaKec]\n Nama Kelurahan : $hasilNik[namaKel]\n TPS : $hasilNik[tps]
            "
        ]);
        }elseif($nik['message'] == "failed"){
            return $nik['data']['pesan'];
        }
        return view('hasil_gambar', compact('nik'));

    }

    public function shoter(Request $request)
    {
        $shoter = Http::post('https://rel.ink/api/links/',[
            'url' => $request->url,
        ]);
        return $shoter->json();
    }

    // public function telegram()
    // {
    //     $nama['nama'] = "Nanda Gunawan";
    //     $nik['nik'] = "0814215245";
    //     $telegram = Http::get('https://api.telegram.org/bot1014814017:AAHFmi0H85RaX9noeqVaK8JyPZXVsQo9R4s/sendMessage',[
    //         'chat_id' => '630495419',
    //         'text' => "
    //             nama : $nama[nama]\n Nik : $nik[nik]
    //         ",
    //     ]);

    //     return $telegram;
    // }
}

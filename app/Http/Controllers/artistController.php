<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\artist;

class artistController extends Controller
{
    public function __construct(){
        $this->artist = new artist();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataArtists'=>$this->artist->all_data(),
                ];
                return view('pages.artist.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataArtists'=>$this->artist->searchData($keyword),
                ];
                return view('pages.artist.index',$data);
            }
        }else{
            $data = [
                'dataArtists'=>$this->artist->all_data(),
            ];
            return view('pages.artist.index',$data);
        }
    }
    public function tampilTambah(){
        return view('pages.artist.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'artist_name' => $request->nama_artist,
            'origin' => $request->origin,
        ];
        $this->artist->tambahData($response);
        return redirect()->route('artist')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/artist/'.$id, [
            'key' => '123',
        ]);
        $data = [
            'dataArtist'=>$this->artist->data_id($id),
        ];
        return view('pages.artist.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response=[
            'artist_name' => $request->nama_artist,
            'origin' => $request->origin,
        ];
        $this->artist->editData($id,$response);
        return redirect()->route('artist')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->artist->deleteData($id);
        return redirect()->route('artist')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->artist->data_id($id),
        ];
        return view('pages.artist.detail',$data);
    }
}

<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    public function all_data(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
            ])->get('http://localhost:8080/api/album/', [
                'key' => '123',
            ]);
        return $response['data'];
    }
    public function searchData($keyword){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/album/search/', [
            'key' => '123',
            'keyword'=>$keyword,
        ]);
        return $response['data'];
    }
    public function data_id($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/album/'.$id, [
            'key' => '123',
        ]);
        return $response['data'];
    }

    public function tambahData($data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->post('http://localhost:8080/api/album/', [
            'album_name' => $data['album_name'],
            'realease_date' => $data['realease_date'],
            'id_genre' => $data['id_genre'],
            'id_label' => $data['id_label'],
            'id_chart' => $data['id_chart'],
            'id_producer' => $data['id_producer'],
            'id_publisher' => $data['id_publisher'],
            'id_licensing' => $data['id_licensing'],
            'id_artist' => $data['id_artist'],
            'id_studio' => $data['id_studio'],
        ]);
    }
    public function editData($id,$data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->put('http://localhost:8080/api/album/'.$id, [
            'album_name' => $data['album_name'],
            'realease_date' => $data['realease_date'],
            'id_genre' => $data['id_genre'],
            'id_label' => $data['id_label'],
            'id_chart' => $data['id_chart'],
            'id_producer' => $data['id_producer'],
            'id_publisher' => $data['id_publisher'],
            'id_licensing' => $data['id_licensing'],
            'id_artist' => $data['id_artist'],
            'id_studio' => $data['id_studio'],
        ]);
        return redirect()->route('album')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function deleteData($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->delete('http://localhost:8080/api/album/'.$id, [
            'key' => '123',
        ]);
    }
}

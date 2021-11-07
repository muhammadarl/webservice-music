<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class artist extends Model
{
    public function all_Data(){
        $artist = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
            ])->get('http://localhost:8080/api/artist/', [
                'key' => '123',
            ]);
        return $artist['data'];
    }
    public function searchData($keyword){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/artist/search/', [
            'key' => '123',
            'keyword'=>$keyword,
        ]);
        return $response['data'];
    }
    public function data_id($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/artist/'.$id, [
            'key' => '123',
        ]);
        return $response['data'];
    }

    public function tambahData($data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->post('http://localhost:8080/api/artist/', [
            'artist_name' => $data['artist_name'],
            'origin' => $data['origin'],
        ]);
    }
    public function editData($id,$data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->put('http://localhost:8080/api/artist/'.$id, $data);
    }
    public function deleteData($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->delete('http://localhost:8080/api/artist/'.$id, [
            'key' => '123',
        ]);
    }
}

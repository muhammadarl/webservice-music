<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class label extends Model
{
    public function all_Data(){
        $label = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
            ])->get('http://localhost:8080/api/label/', [
                'key' => '123',
            ]);
        return $label['data'];
    }
    public function searchData($keyword){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/label/search/', [
            'key' => '123',
            'keyword'=>$keyword,
        ]);
        return $response['data'];
    }
    public function data_id($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->get('http://localhost:8080/api/label/'.$id, [
            'key' => '123',
        ]);
        return $response['data'];
    }

    public function tambahData($data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->post('http://localhost:8080/api/label/', $data);
    }
    public function editData($id,$data){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->put('http://localhost:8080/api/label/'.$id, $data);
    }
    public function deleteData($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJJZFVzZXIiOiIxIiwiVXNlcm5hbWUiOiJ1c2VyIn0.etslmofm0WvpDllo_wQau8mirKxw7TKV2x6M_eBTf24',
        ])->delete('http://localhost:8080/api/label/'.$id, [
            'key' => '123',
        ]);
    }
    
}

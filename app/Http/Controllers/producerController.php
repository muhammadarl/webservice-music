<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\producer;


class producerController extends Controller
{
    public function __construct(){
        $this->producer = new producer();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataProducers'=>$this->producer->all_data(),
                ];
                return view('pages.producer.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataProducers'=>$this->producer->searchData($keyword),
                ];
                return view('pages.producer.index',$data);
            }
            }else{
                $data = [
                    'dataProducers'=>$this->producer->all_data(),
                ];
                return view('pages.producer.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.producer.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'producer_namer' => $request->nama_producer,
            'award' => $request->award,
        ];
        $this->producer->tambahData($response);
        return redirect()->route('producer')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataProducer'=>$this->producer->data_id($id),
        ];
        return view('pages.producer.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'producer_namer' => $request->nama_producer,
            'award' => $request->award,
        ];
        $this->producer->editData($id,$response);
        return redirect()->route('producer')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->producer->deleteData($id);
        return redirect()->route('producer')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->producer->data_id($id),
        ];
        return view('pages.producer.detail',$data);
    }
}

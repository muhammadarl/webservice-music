<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\publisher;


class publisherController extends Controller
{
    public function __construct(){
        $this->publisher = new publisher();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataPublishers'=>$this->publisher->all_data(),
                ];
                return view('pages.publisher.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataPublishers'=>$this->publisher->searchData($keyword),
                ];
                return view('pages.publisher.index',$data);
            }
            }else{
                $data = [
                    'dataPublishers'=>$this->publisher->all_data(),
                ];
                return view('pages.publisher.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.publisher.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'publisher_name' => $request->nama_publisher,
        ];
        $this->publisher->tambahData($response);
        return redirect()->route('publisher')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataPublisher'=>$this->publisher->data_id($id),
        ];
        return view('pages.publisher.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'publisher_name' => $request->nama_publisher,
        ];
        $this->publisher->editData($id,$response);
        return redirect()->route('publisher')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->publisher->deleteData($id);
        return redirect()->route('publisher')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->publisher->data_id($id),
        ];
        return view('pages.publisher.detail',$data);
    }
}

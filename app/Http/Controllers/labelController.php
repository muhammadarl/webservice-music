<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\label;


class labelController extends Controller
{
    public function __construct(){
        $this->label = new label();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataLabels'=>$this->label->all_data(),
                ];
                return view('pages.label.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataLabels'=>$this->label->searchData($keyword),
                ];
                return view('pages.label.index',$data);
            }
            }else{
                $data = [
                    'dataLabels'=>$this->label->all_data(),
                ];
                return view('pages.label.index',$data);
            }
        }
    public function tampilTambah(){
        return view('pages.label.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'label_name' => $request->nama_label,
        ];
        $this->label->tambahData($response);
        return redirect()->route('label')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataLabel'=>$this->label->data_id($id),
        ];
        return view('pages.label.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'label_name' => $request->nama_label,
        ];
        $this->label->editData($id,$response);
        return redirect()->route('label')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->label->deleteData($id);
        return redirect()->route('label')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->label->data_id($id),
        ];
        return view('pages.label.detail',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\studio;


class studioController extends Controller
{
    public function __construct(){
        $this->studio = new studio();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataStudios'=>$this->studio->all_data(),
                ];
                return view('pages.studio.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataStudios'=>$this->studio->searchData($keyword),
                ];
                return view('pages.studio.index',$data);
            }
            }else{
                $data = [
                    'dataStudios'=>$this->studio->all_data(),
                ];
                return view('pages.studio.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.studio.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'studio_name' => $request->nama_Studio,
        ];
        $this->studio->tambahData($response);
        return redirect()->route('studio')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataStudio'=>$this->studio->data_id($id),
        ];
        return view('pages.studio.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'studio_name' => $request->nama_Studio,
        ];
        $this->studio->editData($id,$response);
        return redirect()->route('studio')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->studio->deleteData($id);
        return redirect()->route('studio')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->studio->data_id($id),
        ];
        return view('pages.studio.detail',$data);
    }
}

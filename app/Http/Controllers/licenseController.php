<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\license;


class licenseController extends Controller
{
    public function __construct(){
        $this->license = new license();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                $data = [
                    'dataLicenses'=>$this->license->all_data(),
                ];
                return view('pages.license.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataLicenses'=>$this->license->searchData($keyword),
                ];
                return view('pages.license.index',$data);
            }
            }else{
                $data = [
                    'dataLicenses'=>$this->license->all_data(),
                ];
                return view('pages.license.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.license.tambah');
    }
    public function submitTambahData(Request $request){
        $response = [
            'license_name' => $request->nama_license,
        ];
        $this->license->tambahData($response);
        return redirect()->route('license')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataLicense'=>$this->license->data_id($id),
        ];
        return view('pages.license.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'license_name' => $request->nama_license,
        ];
        $this->license->editData($id,$response);
        return redirect()->route('license')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->license->deleteData($id);
        return redirect()->route('license')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->license->data_id($id),
        ];
        return view('pages.license.detail',$data);
    }
}

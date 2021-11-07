<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\genre;


class genreController extends Controller
{
    public function __construct(){
        $this->genre = new genre();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->has('cari')){
                if($request->cari == null){
                    $data = [
                        'dataGenres'=>$this->genre->all_data(),
                    ];
                    return view('pages.genre.index',$data);
                }else{
                    $keyword = $request->cari;
                    $data=[
                        'dataGenres'=>$this->genre->searchData($keyword),
                    ];
                    return view('pages.genre.index',$data);
                }
            }
            }else{
                $data = [
                    'dataGenres'=>$this->genre->all_data(),
                ];
                return view('pages.genre.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.genre.tambah');
    }

    public function submitTambahData(Request $request){
        $response = [
            'genre_name' => $request->nama_genre,
        ];
        $this->genre->tambahData($response);
        return redirect()->route('genre')->with('success', 'Data Berhasil Di Tambahkan');
    }
    
    public function edit($id){
        $data = [
            'dataGenre'=>$this->genre->data_id($id),
        ];
        return view('pages.genre.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'genre_name' => $request->nama_genre,
            'year' => $request->tahun,
        ];
        $this->genre->editData($id,$response);
        return redirect()->route('genre')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->genre->deleteData($id);
        return redirect()->route('genre')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->genre->data_id($id),
        ];
        return view('pages.genre.detail',$data);
    }
}

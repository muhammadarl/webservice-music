<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\album;
use App\Models\artist;
use App\Models\chart;
use App\Models\genre;
use App\Models\label;
use App\Models\license;
use App\Models\producer;
use App\Models\publisher;
use App\Models\studio;

class albumController extends Controller
{
    public function __construct(){
        $this->album = new Album();
        $this->artist = new artist();
        $this->chart = new chart();
        $this->genre = new genre();
        $this->label = new label();
        $this->license = new license();
        $this->producer = new producer();
        $this->publisher = new publisher();
        $this->studio = new studio();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->cari == null){
                    $data = [
                        'dataAlbums'=>$this->album->all_data(),
                    ];
                    return view('pages.album.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataAlbums'=>$this->album->searchData($keyword),
                ];
                return view('pages.album.index',$data);
            }
        }else{
            $data = [
                'dataAlbums'=>$this->album->all_data(),
            ];
            return view('pages.album.index',$data);
        }
    }
    public function tampilTambah(){
        
            $data = [
                'dataArtists'=>$this->artist->all_data(),
                'dataLabels'=>$this->label->all_data(),
                'dataGenres'=>$this->genre->all_data(),
                'dataCharts'=>$this->chart->all_data(),
                'dataProducers'=>$this->producer->all_data(),
                'dataStudios'=>$this->studio->all_data(),
                'dataLicenses'=>$this->license->all_data(),
                'dataPublishers'=>$this->publisher->all_data(),

            ];
        return view('pages.album.tambah',$data);
    }
    public function submitTambahData(Request $request){
        $request=[
            'album_name' => $request->album_name,
            'realease_date' => $request->release_date,
            'id_genre' => $request->genre,
            'id_label' => $request->label,
            'id_chart' => $request->chart,
            'id_producer' => $request->producer,
            'id_publisher' => $request->publisher,
            'id_licensing' => $request->license,
            'id_artist' => $request->artist,
            'id_studio' => $request->studio,
            ];
            $this->album->tambahData($request);
        return redirect()->route('album')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit($id){
        $data = [
            'dataAlbums'=>$this->album->data_id($id),
            'dataArtists'=>$this->artist->all_data(),
            'dataLabels'=>$this->label->all_data(),
            'dataGenres'=>$this->genre->all_data(),
            'dataCharts'=>$this->chart->all_data(),
            'dataProducers'=>$this->producer->all_data(),
            'dataStudios'=>$this->studio->all_data(),
            'dataLicenses'=>$this->license->all_data(),
            'dataPublishers'=>$this->publisher->all_data(),
        ];
        return view('pages.album.edit',$data);
    }
    public function submitDataEdit(Request $request,$id){
       $response = [
        'album_name' => $request->nama_album,
        'realease_date' => $request->release_date,
        'id_genre' => $request->genre,
        'id_label' => $request->label,
        'id_chart' => $request->chart,
        'id_producer' => $request->producer,
        'id_publisher' => $request->publisher,
        'id_licensing' => $request->license,
        'id_artist' => $request->artist,
        'id_studio' => $request->studio,
       ];
        $this->album->editData($id,$response);
        return redirect()->route('album')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function deleteData($id){
        $this->album->deleteData($id);
        return redirect()->route('album')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->album->data_id($id),
        ];
        return view('pages.album.detail',$data);
    }
}

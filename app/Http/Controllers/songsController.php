<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\songs;
use App\Models\album;
use App\Models\artist;
use App\Models\chart;
use App\Models\genre;
use App\Models\label;
use App\Models\license;
use App\Models\producer;
use App\Models\publisher;
use App\Models\studio;


class songsController extends Controller
{
    public function __construct(){
        $this->songs = new songs();
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
                    'dataSongs'=>$this->songs->all_data(),
                ];
                return view('pages.songs.index',$data);
            }else{
                $keyword = $request->cari;
                $data=[
                    'dataSongs'=>$this->songs->searchData($keyword),
                ];
                return view('pages.songs.index',$data);
            }
            }else{
                $data = [
                    'dataSongs'=>$this->songs->all_data(),
                ];
                return view('pages.songs.index',$data);
            }
    }
    public function tampilTambah(){
        $data = [
            'dataAlbums'=>$this->album->all_data(),
            'dataArtists'=>$this->artist->all_data(),
            'dataLabels'=>$this->label->all_data(),
            'dataGenres'=>$this->genre->all_data(),
            'dataCharts'=>$this->chart->all_data(),
            'dataProducers'=>$this->producer->all_data(),
            'dataStudios'=>$this->studio->all_data(),
            'dataLicenses'=>$this->license->all_data(),
            'dataPublishers'=>$this->publisher->all_data(),
        ];
        return view('pages.songs.tambah',$data);
    }

    public function submitTambahData(Request $request){
        $response = [
            'title' => $request->title,
            'plays' => $request->plays,
            'id_genre'=>$request->genre,
            'id_album'=>$request->album,
            'id_artist'=>$request->artist,
            'id_label'=>$request->label,
        ];
        $this->songs->tambahData($response);
        return redirect()->route('songs')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id){
        $data = [
            'dataSong'=>$this->songs->data_id($id),
            'dataAlbums'=>$this->album->all_data(),
            'dataArtists'=>$this->artist->all_data(),
            'dataLabels'=>$this->label->all_data(),
            'dataGenres'=>$this->genre->all_data(),
            'dataCharts'=>$this->chart->all_data(),
            'dataProducers'=>$this->producer->all_data(),
            'dataStudios'=>$this->studio->all_data(),
            'dataLicenses'=>$this->license->all_data(),
            'dataPublishers'=>$this->publisher->all_data(),
        ];
            return view('pages.songs.edit',$data);
    }
    public function submitDataEdit(Request $request, $id){
        $response = [
            'title' => $request->title,
            'plays' => $request->plays,
            'id_genre'=>$request->genre,
            'id_album'=>$request->album,
            'id_artist'=>$request->artist,
            'id_label'=>$request->label,
        ];
        $this->songs->editData($id,$response);
        return redirect()->route('songs')->with('success', 'Data Berhasil Di Update');
    }
    public function deleteData($id){
        $this->songs->deleteData($id);
        return redirect()->route('songs')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->songs->data_id($id),
        ];
        return view('pages.songs.detail',$data);
    }
}

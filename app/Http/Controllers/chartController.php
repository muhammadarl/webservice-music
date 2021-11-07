<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\chart;

class chartController extends Controller
{
    public function __construct(){
        $this->chart = new chart();
    }
    public function index(request $request){
        if($request->has('cari')){
            if($request->has('cari')){
                if($request->cari == null){
                    $data = [
                        'dataCharts'=>$this->chart->all_data(),
                    ];
                    return view('pages.chart.index',$data);
                }else{
                    $keyword = $request->cari;
                    $data=[
                        'dataCharts'=>$this->chart->searchData($keyword),
                    ];
                    return view('pages.chart.index',$data);
                }
            }
            }else{
                $data = [
                    'dataCharts'=>$this->chart->all_data(),
                ];
                return view('pages.chart.index',$data);
            }
    }
    public function tampilTambah(){
        return view('pages.chart.tambah');
    }

    public function submitTambahData(Request $request){
        $response = [
            'chart_name' => $request->chart_name,
            'year' => $request->year,
        ];
        $this->chart->tambahData($response);
        return redirect()->route('chart')->with('success', 'Data Berhasil Di Tambahkan');
    }
    
    public function edit($id){
        $data = [
            'dataChart'=>$this->chart->data_id($id),
        ];
        return view('pages.chart.edit',$data);
    }

    public function submitDataEdit(Request $request, $id){
        $response = [
            'chart_name' => $request->nama_chart,
            'year' => $request->tahun,
        ];
        $this->chart->editData($id,$response);
        return redirect()->route('chart')->with('success', 'Data Berhasil Di Update');
    }

    public function deleteData($id){
        $this->chart->deleteData($id);
        return redirect()->route('chart')->with('success', 'Data Berhasil Di Hapus');
    }
    public function detail($id){
        $data = [
            'dataDetail'=>$this->chart->data_id($id),
        ];
        return view('pages.chart.detail',$data);
    }
}

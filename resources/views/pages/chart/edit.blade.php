@extends('layouts.admin')
@section('title')
Edit Chart {{$dataChart['chart_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('chart')}}" class="d-flex align-items-baseline">
        <i class="fas fa-long-arrow-alt-left"></i>
        <p class="ml-1">Back</p>
    </a>

    <!-- Page Heading -->

    <!-- Content Row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="/chart/update/{{$dataChart['id_chart']}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_chart">Nama Chart</label>
                    <input type="text" class="form-control" name="nama_chart" placeholder="Masukan Nama Chart"
                        value="{{$dataChart['chart_name']}}">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun"  
                        value="{{$dataChart['year']}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

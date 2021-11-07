@extends('layouts.admin')
@section('title')
Tambah Chart
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
            <form action="{{route('tambahDataChart')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="chart_name">Nama Chart</label>
                    <input type="text" class="form-control" name="chart_name" placeholder="Masukan Nama Chart"
                        value="{{ old('chart_name') }}">
                </div>
                <div class="form-group">
                    <label for="year">Tahun</label>
                    <input type="text" name="year" class="form-control" placeholder="Masukan Tahun"  
                        value="{{ old('year') }}">
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

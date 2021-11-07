@extends('layouts.admin')
@section('title')
Tambah Music Publisher
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('publisher')}}" class="d-flex align-items-baseline">
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
            <form action="{{route('tambahDataPublisher')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_label">Nama Publisher</label>
                    <input type="text" class="form-control" name="nama_publisher" placeholder="Masukan Nama Music Publisher"
                        value="{{ old('nama_publisher') }}">
                </div>
                <!-- <div class="form-group">
                    <label for="origin">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun"  
                        value="{{ old('tahun') }}">
                </div> -->
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
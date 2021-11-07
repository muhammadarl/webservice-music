@extends('layouts.admin')
@section('title')
Tambah Genre
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('genre')}}" class="d-flex align-items-baseline">
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
            <form action="{{route('tambahDataGenre')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_genre">Nama Genre</label>
                    <input type="text" class="form-control" name="nama_genre" placeholder="Masukan Nama Genre"
                        value="{{ old('nama_genre') }}">
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

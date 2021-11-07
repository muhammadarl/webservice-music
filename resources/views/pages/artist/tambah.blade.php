@extends('layouts.admin')
@section('title')
Tambah Artist
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('artist')}}" class="d-flex align-items-baseline">
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
            <form action="{{route('tambahDataArtist')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_artist">Nama artist</label>
                    <input type="text" class="form-control" name="nama_artist" placeholder="Masukan Nama Artist"
                        value="{{ old('nama_artist') }}">
                </div>
                <div class="form-group">
                    <label for="origin">Origin</label>
                    <input type="text" name="origin" class="form-control" placeholder="Masukan Origin"  
                        value="{{ old('origin') }}">
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

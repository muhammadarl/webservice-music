@extends('layouts.admin')
@section('title')
Tambah Prducer
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('producer')}}" class="d-flex align-items-baseline">
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
            <form action="{{route('tambahDataProducer')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_producer">Nama Producer</label>
                    <input type="text" class="form-control" name="nama_producer" placeholder="Masukan Nama Producer"
                        value="{{ old('nama_producer') }}">
                </div>
                <div class="form-group">
                    <label for="award">Award</label>
                    <input type="text" name="award" class="form-control" placeholder="Masukan Award"  
                        value="{{ old('award') }}">
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

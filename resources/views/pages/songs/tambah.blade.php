@extends('layouts.admin')
@section('title')
Tambah Lagu
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('songs')}}" class="d-flex align-items-baseline">
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
            <form action="{{route('tambahDataSongs')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukan Judul Lagu"
                        value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="plays" class="">Total Diputar</label>
                    <input type="text" name="plays" class="form-control datepicker" id="plays"
                        placeholder="Plays" />
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label" for="genre">Genre</label>
                        <select id="genre" name="genre" class="form-control">
                            @foreach($dataGenres as $dataGenre)
                                <option value="{{$dataGenre['id_genre']}}">{{$dataGenre['genre_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="album">Album</label>
                        <select id="album" name="album" class="form-control">
                        @foreach($dataAlbums as $dataAlbum)
                                <option value="{{$dataAlbum['id_album']}}">{{$dataAlbum['album_name']}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="artist">Artist</label>
                        <select id="artist" name="artist" class="form-control">
                            @foreach($dataArtists as $dataArtist)
                                <option value="{{$dataArtist['id_artist']}}">{{$dataArtist['artist_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="label">Label</label>
                        <select id="label" name="label" class="form-control">
                            @foreach($dataLabels as $dataLabel)
                                <option value="{{$dataLabel['id_label']}}">{{$dataLabel['label_name']}}</option>
                            @endforeach
                        </select>
                    </div>
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

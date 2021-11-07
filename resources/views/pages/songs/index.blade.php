@extends('layouts.admin')
@section('title')
Songs
@endsection
@section('content')
<div class="card background-table">
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-2 btn-responsive col-sm-12 col-md-6 col-lg-4 col-xl-2"
            href="{{route('tambahSongs')}}" role="button">Tambah Lagu</a>
        <form action="{{route('songs')}}" method="GET" class="form-inline my-2 my-lg-0">
            <input type="search" name="cari" placeholder="Search" aria-label="Search" class="form-control mr-sm-2">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Total Play</th>
                <th scope="col">Genre</th>
                <th scope="col">Album</th>
                <th scope="col">Artist</th>
                <th scope="col">Label</th>
                <th scope="col" class="text-center"><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>

            @foreach($dataSongs as $dataSong)
            <tr>
                <td data-label="No">{{$no++}}</td>
                <td data-label="Title">{{$dataSong['title']}}</td>
                <td data-label="Total Play">{{$dataSong['plays']}}</td>
                <td data-label="Genre">{{$dataSong['genre_name']}}</td>
                <td data-label="Album">{{$dataSong['album_name']}}</td>
                <td data-label="Artist">{{$dataSong['artist_name']}}</td>
                <td data-label="Label">{{$dataSong['label_name']}}</td>
                <td data-label="Option">
                    <a href="/songs/detail/{{$dataSong['id_song']}}" class="btn btn-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="/songs/edit/{{$dataSong['id_song']}}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#delete{{$dataSong['id_song']}}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach($dataSongs as $dataSong)
<div class="modal modal-danger fade" id="delete{{$dataSong['id_song']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modaL-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda Yakin Hapus Data Ini?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/songs/delete/{{$dataSong['id_song']}}">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
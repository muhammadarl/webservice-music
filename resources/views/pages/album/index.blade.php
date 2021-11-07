@extends('layouts.admin')
@section('title')
Album
@endsection
@section('content')
<div class="card background-table">
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-2 btn-responsive col-sm-12 col-md-6 col-lg-4 col-xl-2"
            href="{{route('tambahAlbum')}}" role="button">Tambah Album</a>
        <form action="{{route('album')}}" method="GET" class="form-inline my-2 my-lg-0">
            <input type="search" name="cari" placeholder="Search" aria-label="Search" class="form-control mr-sm-2">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Album name</th>
                <th scope="col">Release Date</th>
                <th scope="col">Genre</th>
                <th scope="col">Label</th>
                <th scope="col">Chart</th>
                <th scope="col">Producer</th>
                <th scope="col">Publisher</th>
                <th scope="col">License</th>
                <th scope="col">Artist</th>
                <th scope="col">Studio</th>
                <th scope="col" class="text-center"><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>

            @foreach($dataAlbums as $dataAlbum)
            <tr>
                <td data-label="No">{{$no++}}</td>
                <td data-label="Album name">{{$dataAlbum['album_name']}}</td>
                <td data-label="Release Date">{{$dataAlbum['realease_date']}}</td>
                <td data-label="Genre">{{$dataAlbum['genre_name']}}</td>
                <td data-label="Label">{{$dataAlbum['label_name']}}</td>
                <td data-label="Chart">{{$dataAlbum['chart_name']}}</td>
                <td data-label="Producer">{{$dataAlbum['producer_namer']}}</td>
                <td data-label="Publisher">{{$dataAlbum['publisher_name']}}</td>
                <td data-label="License">{{$dataAlbum['license_name']}}</td>
                <td data-label="Artist">{{$dataAlbum['artist_name']}}</td>
                <td data-label="Studio">{{$dataAlbum['studio_name']}}</td>
                <td data-label="Option">
                    <a href="/album/detail/{{$dataAlbum['id_album']}}" class="btn btn-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="/album/edit/{{$dataAlbum['id_album']}}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#delete{{$dataAlbum['id_album']}}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach($dataAlbums as $dataAlbum)
<div class="modal modal-danger fade" id="delete{{$dataAlbum['id_album']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <a class="btn btn-primary" href="/album/delete/{{$dataAlbum['id_album']}}">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
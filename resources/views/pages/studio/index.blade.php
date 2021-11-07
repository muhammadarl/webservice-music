@extends('layouts.admin')
@section('title')
studio
@endsection
@section('content')
<div class="card background-table">
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-2 btn-responsive col-sm-12 col-md-6 col-lg-4 col-xl-2"
            href="{{route('tambahStudio')}}" role="button">Tambah studio</a>
        <form action="{{route('studio')}}" method="GET" class="form-inline my-2 my-lg-0">
            <input type="search" name="cari" placeholder="Search" aria-label="Search" class="form-control mr-sm-2">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama studio</th>
                <th scope="col" class="text-center"><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>

            @foreach($dataStudios as $dataStudio)
            <tr>
                <td data-label="No">{{$no++}}</td>
                <td data-label="Nama Studio">{{$dataStudio['studio_name']}}</td>
                <td data-label="Option">
                    <a href="/studio/detail/{{$dataStudio['id_studio']}}" class="btn btn-primary">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="/studio/edit/{{$dataStudio['id_studio']}}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle='modal'
                        data-target="#delete{{$dataStudio['id_studio']}}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach($dataStudios as $dataStudio)
<div class="modal modal-danger fade" id="delete{{$dataStudio['id_studio']}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="studio/delete/{{$dataStudio['id_studio']}}">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
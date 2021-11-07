@extends('layouts.admin')
@section('title')
Detail Songs{{$dataDetail['title']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('songs')}}" class="d-flex align-items-baseline">
        <i class="fas fa-long-arrow-alt-left"></i>
        <p class="ml-1">Back</p>
    </a>
    <!-- Content Row -->
    <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Plays</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Nama Album</th>
                    <th scope="col">Nama Artist</th>
                    <th scope="col">Nama Label</th>
                </tr>
                <tr>
                    <td data-label="Title">{{$dataDetail['title']}}</td>
                    <td data-label="Plays">{{$dataDetail['plays']}}</td>
                    <td data-label="Genre">{{$dataDetail['genre_name']}}</td>
                    <td data-label="Nama Album">{{$dataDetail['album_name']}}</td>
                    <td data-label="Nama Artist">{{$dataDetail['artist_name']}}</td>
                    <td data-label="Nama Label">{{$dataDetail['label_name']}}</td>
                    
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

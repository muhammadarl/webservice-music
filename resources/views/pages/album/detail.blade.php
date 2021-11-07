@extends('layouts.admin')
@section('title')
Detail Album {{$dataDetail['album_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('album')}}" class="d-flex align-items-baseline">
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
                    <th scope="col">Nama Album</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Label</th>
                    <th scope="col">Chart</th>
                    <th scope="col">Producer</th>
                    <th scope="col">Music Publisher</th>
                    <th scope="col">License</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Studio</th>
                </tr>
                <tr>
                    <td data-label="Nama Album">{{$dataDetail['album_name']}}</td>
                    <td data-label="Release Datei">{{$dataDetail['realease_date']}}</td>
                    <td data-label="Genre">{{$dataDetail['genre_name']}}</td>
                    <td data-label="Label">{{$dataDetail['label_name']}}</td>
                    <td data-label="Chart">{{$dataDetail['chart_name']}}</td>
                    <td data-label="Producer">{{$dataDetail['producer_namer']}}</td>
                    <td data-label="Publisher">{{$dataDetail['publisher_name']}}</td>
                    <td data-label="License">{{$dataDetail['license_name']}}</td>
                    <td data-label="Artist">{{$dataDetail['artist_name']}}</td>
                    <td data-label="Studio">{{$dataDetail['studio_name']}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

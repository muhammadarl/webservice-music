@extends('layouts.admin')
@section('title')
Edit Album {{$dataAlbums['album_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('album')}}" class="d-flex align-items-baseline">
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
            <form action="/album/update/{{$dataAlbums['id_album']}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_album">Nama Album</label>
                    <input type="text" class="form-control" name="nama_album" placeholder="Masukan Nama Album"
                        value="{{$dataAlbums['album_name']}}">
                </div>
                <div class="form-group">
                    <label for="release_date" class="">Release Date</label>
                    <input type="date" name="release_date" class="form-control datepicker" id="release_date"
                        placeholder="Masukan Tanggal Release" value="{{$dataAlbums['realease_date']}}" />
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label" for="genre">Genre</label>
                        <select id="genre" name="genre" class="form-control">
                            <option value="{{$dataAlbums['id_genre']}}">{{$dataAlbums['genre_name']}}</option>
                            @foreach($dataGenres as $dataGenre)
                            @continue($dataAlbums['id_genre']==$dataGenre['id_genre'])
                                <option value="{{$dataGenre['id_genre']}}">{{$dataGenre['genre_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="label">Label</label>
                        <select id="label" name="label" class="form-control">
                            <option value="{{$dataAlbums['id_label']}}">{{$dataAlbums['label_name']}}</option>
                            @foreach($dataLabels as $dataLabel)
                            @continue($dataAlbums['id_label']==$dataLabel['id_label'])
                                <option value="{{$dataLabel['id_label']}}">{{$dataLabel['label_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="chart">Chart</label>
                        <select id="chart" name="chart" class="form-control">
                            <option value="{{$dataAlbums['id_chart']}}">{{$dataAlbums['chart_name']}}</option>
                            @foreach($dataCharts as $dataChart)
                            @continue($dataAlbums['id_chart']==$dataChart['id_chart'])
                                <option value="{{$dataChart['id_chart']}}">{{$dataChart['chart_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="publisher">Publisher</label>
                        <select id="publisher" name="publisher" class="form-control">
                            <option value="{{$dataAlbums['id_publisher']}}">{{$dataAlbums['publisher_name']}}</option>
                            @foreach($dataPublishers as $dataPublisher)
                            @continue($dataAlbums['id_publisher']==$dataPublisher['id_publisher'])
                                <option value="{{$dataPublisher['id_publisher']}}">{{$dataPublisher['publisher_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label" for="producer">Producer</label>
                        <select id="producer" name="producer" class="form-control">
                            <option value="{{$dataAlbums['id_producer']}}">{{$dataAlbums['producer_namer']}}</option>
                            @foreach($dataProducers as $dataProducer)
                            @continue($dataAlbums['id_producer']==$dataProducer['id_producer'])
                                <option value="{{$dataLabel['id_label']}}">{{$dataLabel['label_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="license">License</label>
                        <select id="license" name="license" class="form-control">
                            <option value="{{$dataAlbums['id_licensing']}}">{{$dataAlbums['license_name']}}</option>
                            @foreach($dataLicenses as $dataLicense)
                            @continue($dataAlbums['id_licensing']==$dataLicense['id_licensing'])
                                <option value="{{$dataLicense['id_licensing']}}">{{$dataLicense['license_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="artist">Artist</label>
                        <select id="artist" name="artist" class="form-control">
                            <option value="{{$dataAlbums['id_artist']}}">{{$dataAlbums['artist_name']}}</option>
                            @foreach($dataArtists as $dataArtist)
                            @continue($dataAlbums['id_artist']==$dataArtist['id_artist'])
                                <option value="{{$dataArtist['id_artist']}}">{{$dataArtist['artist_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="studio">Studio</label>
                        <select id="studio" name="studio" class="form-control">
                            <option value="{{$dataAlbums['id_studio']}}">{{$dataAlbums['studio_name']}}</option>
                            @foreach($dataStudios as $dataStudio)
                            @continue($dataAlbums['id_studio']==$dataStudio['id_studio'])
                                <option value="{{$dataStudio['id_studio']}}">{{$dataStudio['studio_name']}}</option>
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
@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('
                frontend / images / ic_doe.png ') }}" />'
            }
        });
    });
</script>
@endpush

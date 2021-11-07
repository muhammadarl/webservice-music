@extends('layouts.admin')
@section('title')
Tambah Album
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
            <form action="{{route('tambahDataAlbum')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_album">Nama Album</label>
                    <input type="text" class="form-control" name="album_name" placeholder="Masukan Nama Album"
                        value="{{ old('nama_album') }}">
                </div>
                <div class="form-group">
                    <label for="release_date" class="">Release Date</label>
                    <input type="date" name="release_date" class="form-control" id="realease_date"
                        placeholder="Masukan Tanggal Release" />
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
                        <label class="control-label" for="label">Label</label>
                        <select id="label" name="label" class="form-control">
                            @foreach($dataLabels as $dataLabel)
                                <option value="{{$dataLabel['id_label']}}">{{$dataLabel['label_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="chart">Chart</label>
                        <select id="chart" name="chart" class="form-control">
                            @foreach($dataCharts as $dataChart)
                                <option value="{{$dataChart['id_chart']}}">{{$dataChart['chart_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="genre">Genre</label>
                        <select id="genre" name="publisher" class="form-control">
                            @foreach($dataPublishers as $dataPublisher)
                                <option value="{{$dataPublisher['id_publisher']}}">{{$dataPublisher['publisher_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label" for="producer_namer">Producer</label>
                        <select id="producer_namer" name="producer" class="form-control">
                            @foreach($dataProducers as $dataProducer)
                                <option value="{{$dataProducer['id_producer']}}">{{$dataProducer['producer_namer']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="license_name">License</label>
                        <select id="license_name" name="license" class="form-control">
                            @foreach($dataLicenses as $dataLicense)
                                <option value="{{$dataLicense['id_licensing']}}">{{$dataLicense['license_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="artist_name">Artist</label>
                        <select id="artist_name" name="artist" class="form-control">
                            @foreach($dataArtists as $dataArtist)
                                <option value="{{$dataArtist['id_artist']}}">{{$dataArtist['artist_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="studio_name">Studio</label>
                        <select id="studio_name" name="studio" class="form-control">
                            @foreach($dataStudios as $dataStudio)
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

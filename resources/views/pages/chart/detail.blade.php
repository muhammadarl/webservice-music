@extends('layouts.admin')
@section('title')
Detail chart {{$dataDetail['chart_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('chart')}}" class="d-flex align-items-baseline">
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
                    <th scope="col">Nama Chart</th>
                    <th scope="col">Tahun</th>
                </tr>
                <tr>
                    <td data-label="Nama Chart">{{$dataDetail['chart_name']}}</td>
                    <td data-label="Tahun">{{$dataDetail['year']}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

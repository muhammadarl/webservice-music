@extends('layouts.admin')
@section('title')
Detail Publisher {{$dataDetail['publisher_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('publisher')}}" class="d-flex align-items-baseline">
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
                    <th scope="col">Nama Publisher</th>
                    
                </tr>
                <tr>
                    <td data-label="Nama Publisher">{{$dataDetail['publisher_name']}}</td>
                    
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

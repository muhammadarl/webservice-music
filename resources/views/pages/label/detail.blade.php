@extends('layouts.admin')
@section('title')
Detail Label {{$dataDetail['label_name']}}
@endsection
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="{{route('label')}}" class="d-flex align-items-baseline">
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
                    <th scope="col">Nama Label</th>
                </tr>
                <tr>
                    <td data-label="Nama Label">{{$dataDetail['label_name']}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

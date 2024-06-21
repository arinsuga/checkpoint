@extends('layouts.appbo')

@section('content_title', 'User Backend Edit')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ url()->previous() }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-lg fa-save"></i>
    </a>
</li>

@endsection

@section('content')
    <h1>EDIT</h1>
@endsection

@extends('layouts.appbo')

@section('content_title', 'User Backend Delete')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ url()->previous() }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-lg fa-trash"></i>
    </a>
</li>

@endsection

@section('content')
    <h1>DELETE</h1>
    <p>{{ url()->previous() }}</p>
@endsection

@extends('layouts.appbo')

@section('content_title', 'User Backend Add')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ route('UserAdmin.index') }}">
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
    <h1>CREATE</h1>

    
<form method="POST" action="{{ route('UserAdmin.store') }}">
    @csrf

    <label>Nama</label>
    <input type="text" name = "IniRequestNama"></input>

    <button type="submit">Save</button>
</form>


@endsection

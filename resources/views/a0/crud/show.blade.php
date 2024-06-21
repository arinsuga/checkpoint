@extends('layouts.appbo')

@section('content_title', 'User Backend Info')

@section('toolbar')

<!-- button back -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('UserAdmin.index') }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<!-- button edit -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('UserAdmin.edit', ['UserAdmin' => 1]) }}">
        <i class="fas fa-lg fa-edit"></i>
    </a>
</li>

<!-- button delete -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('UserAdmin.delete', ['UserAdmin' => 1]) }}">
        <i class="fas fa-lg fa-trash"></i>
    </a>
</li>

@endsection

@section('content')
    <div style="margin-bottom: 20px;">

        @include('bo.UserAdmin.data-field-items')

    </div>

@endsection

@section('style')

    <!-- Styles -->
    <!-- <link href="{{ asset('css/CustomForShow.css') }}" rel="stylesheet"> -->

@endsection

@section('js')

    <!-- javascript -->
    <!-- <script src="{{ asset('js/CustomForShow.js') }}" defer></script> -->

@endsection


@extends('layouts.fo.app')

@section('content_title', 'List Absensi - '.\Arins\Facades\Formater::dateMonth(now()))

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" href="#" >
        <i class="fas fa-lg fa-filter"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('fo.absen.data-list-filters-index')
    </div>
@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}" defer></script>

@endsection

@section('content')

<div class="card">
    <div class="card-body table-responsive">
        @include('fo.absen.data-list-items-index')
    </div>
</div>


@endsection

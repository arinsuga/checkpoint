@extends('layouts.fo.app')

@section('content_title', 'Form Absensi - '.\Arins\Facades\Formater::dateMonth(now()))

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" href="#" >
        <i class="fas fa-lg fa-filter"></i>
    </a>
</li>

@endsection

@section('control_sidebar')
    <div class="control-sidebar-content">
        @include('fo.absen.data-list-filters')
    </div>
@endsection

@section('js')

<script>

</script>

@endsection

@section('content')

@if (!isset($admin))
<nav class="navbar navbar-expand ">
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('absen') }}" style="font-weight: bold;">
                Checkpoint
            </a>
        </li>

        <li class="nav-item" style="border-bottom: 5px solid red;">
            <a class="nav-link" href="{{ route('absen.history') }}" style="font-weight: bold;">
                History
            </a>
        </li>

    </ul>
</nav>
@endif

<div>
    @include('fo.absen.list')
</div>


@endsection

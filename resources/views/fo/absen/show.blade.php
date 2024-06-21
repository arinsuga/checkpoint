@extends('layouts.fo.app')

@section('content_title', 'Checkpoint Hari Ini - '.\Arins\Facades\Formater::dateMonth(now()))

@section('toolbar')

@endsection

@section('control_sidebar')
@endsection

@section('js')

@endsection

@section('content')

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

<div class="card">

    <div class="card-body">
        @if ($viewModel->data !=null)
            @include('fo.absen.show-field')
        @endif
    </div>

</div>


@endsection

@extends('layouts.fo.app')

@section('content_title', 'Form Absensi - ')

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

@section('content')

<nav class="navbar navbar-expand ">
    @if (!isset($admin))
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
    @endif

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <button id="btnView" type="button" class="btn btn-block btn-info btn-flat">View</button>
        </li>
        <li class="nav-item">
            <button id="btnPDF" type="button" class="btn btn-block btn-danger btn-flat">PDF</button>
        </li>
    </ul>

</nav>

<form role="form" id="frmData" method="POST" action="{{ route('absen.history.post') }}" enctype="multipart/form-data">
    @csrf
    <div class="card" style="margin-top: 10px;">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @include('fo.absen.check-history-fields')
                </div>
            </div>
        </div>
    </div>
</form>


@endsection

@section('js')

@include('fo.absen._script')

@endsection

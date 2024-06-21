@extends('layouts.fo.app')

@section('content_title', 'Absensi - Export to PDF')

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

$(document).ready(function() {
    var username = document.getElementById('username');
    printPDF();
    function printPDF() {
        var options = {
            columnStyles:{
                0: {
                    cellWidth: 40, halign: 'center', fontSize: number = 8
                },
                1: {
                    cellWidth: 60, overflow: 'linebreak', fontSize: number = 8
                }, 
                2: {
                    cellWidth: 60, overflow: 'linebreak', fontSize: number = 8
                },
                3: {
                    cellWidth: 20, halign: 'center', fontSize: number = 8
                },
            }
        };

        TableToPdf('filter', 'checkpoint_report_'+username.value, 'p', 'a4', options);
        
    } //end if

});

</script>

@endsection

@section('content_header_title', 'Print PDF Success')

@section('content')


<nav class="navbar navbar-expand ">

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            @if (isset($admin))
                <a href="{{ route('absen.history.admin') }}" class="btn btn-block btn-default btn-flat">Back</a>
            @else
                <a href="{{ route('absen.history') }}" class="btn btn-block btn-default btn-flat">Back</a>
            @endif
        </li>
    </ul>

</nav>

<div style="display: none;">
    @include('fo.absen.list')
</div>


@endsection

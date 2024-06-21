@extends('layouts.appbo')

@section('content')

<div class="container">
    <div class="card">
    <div class="card-header">
        <h3>INDEX</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <input type="text" id="filter0" name="filter0" class="form-control float-right" placeholder="Filter by Name">
                <div class="input-group-append">
                    <span class="btn btn-default"><i class="fas fa-filter"></i></span>
                </div>

                <input type="text" id="filter1" name="filter1" class="form-control float-right" placeholder="Filter by Email" style="margin-left: 5px;">
                <div class="input-group-append">
                    <span class="btn btn-default"><i class="fas fa-filter"></i></span>
                </div>

                <input type="text" id="filter2" name="filter2" class="form-control float-right" placeholder="Filter by Status" style="margin-left: 5px;">
                <div class="input-group-append">
                    <span class="btn btn-default"><i class="fas fa-filter"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0" style="height: 400px;">
        @include('bo.user.index-item')
    </div>
    </div>
</div>

@endsection

@section('js')

    <script src="{{ asset('js/CustomForIndex.js') }}" defer></script>

@endsection

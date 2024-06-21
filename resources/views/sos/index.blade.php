@extends('layouts.app')

@section('content')

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


<div class="container">
    <div class="card">
    <div class="card-header">
        <h3>Emergency Exit</h3>
    </div>
    <div class="card-body">
        <a href="{{ route('logout') }}" class="btn btn-danger"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         Logout / Exit
      </a>

    </div>
    </div>
</div>


@endsection

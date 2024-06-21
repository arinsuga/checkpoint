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
    
    <form method="POST" action="{{ route($viewModel->formAction.'.store') }}">
        @csrf

        <div>
            <label>Number format</label>
            <input type="text" name="number_format" value="{{ number_format( 49995 , 0 , '.' , ',' ) }}">
        </div>

        <div>
            <label>Email Verified at {{ now()->format(config('a1.date.short')) }} ==> {{ now() }}</label>
            <input type="text" name = "email_verified_at" value="{{ now()->format(config('a1.date.short')) }}"></input>
        </div>

        <div>
            <label>Name</label>
            <input type="text" name = "name"></input>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name = "email"></input>
        </div>
        <div>
            <label>password</label>
            <input type="text" name = "password"></input>
        </div>

        <button type="submit">Save</button>
    </form>
@endsection

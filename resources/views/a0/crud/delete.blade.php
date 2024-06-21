@extends('layouts.appbo')

@section('content_title', 'User Backend Delete')

@section('toolbar')

<li class="nav-item">
    <a class="nav-link" href="{{ url()->previous() }}">
        <i class="fas fa-lg fa-arrow-left"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-lg fa-trash"></i>
    </a>
</li>

@endsection

@section('content')
    <h1>DELETE</h1>

    <form method="POST" action="{{ route($viewModel->formAction . '.destroy', ['crud' => $viewModel->data->id]) }}">
        @csrf
        @method('DELETE')

        <label>Nama</label>
        <input type="text" name = "deleteData"></input>

        <button type="submit">Delete</button>
    </form>    
@endsection

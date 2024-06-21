<form id="frmSubmit" style="margin:10px;" method="POST" action="{{ route($viewModel->data->action) }}" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="hidden" name="attend_id" value="{{ $viewModel->data->user->attend_id }}">
        <input type="hidden" id="latitude" name="latitude" placeholder="latitude">
        <input type="hidden" id="longitude" name="longitude" placeholder="longitude">
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (session('status-failed'))
        <div class="alert alert-danger">
            {{ session('status-failed') }}
        </div>
    @endif

    <input type="hidden" name="testonly[0]" value="nama 1">
    <input type="hidden" name="testonly[1]" value="nama 2">

    <div class="card">

        <div class="card-header d-flex justify-content-center">
            <h4>{{ $viewModel->data->action_button }}</h4>
        </div>

        <div class="card-body">
            @if ($viewModel->data !=null)
                @include('fo.absen.data-field-items')
            @endif

            <div class="row">
                <div class="col-md-12">
                    <button id="btnSubmit" type="button" class="btn btn-primary btn-block">{{ $viewModel->data->action_button }}</button>
                </div>
            </div>
        </div>

    </div>

</form>

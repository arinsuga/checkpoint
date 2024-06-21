
<div class="row">
  <div class="col-md-12">
    <!-- text input -->
    <div class="form-group">
      <label>Nama</label>
      <div class="form-control" style="border-top:none;border-left:none;border-right:none;">
        {{ $viewModel->data->user->name }}
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6">
        <h3>Checkin</h3>
        @include('fo.absen.show-field-checkin')
    </div>

    <div class="col-sm-12 col-md-6">
        <h3>Checkout</h3>
        @include('fo.absen.show-field-checkout')
    </div>
</div>

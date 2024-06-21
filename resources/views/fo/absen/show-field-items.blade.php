
<div class="row">
  <div class="col-sm-12">
    <label>Screenshoot</label>
    <div class="box full-width-sm">
      <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->attend->checkin_image) }}" alt="">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <!-- text input -->
    <div class="form-group">
      <label>Nama</label>
      <div class="form-control" style="border-top:none;border-left:none;border-right:none;">
        {{ $viewModel->data->user->name }}
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <!-- text input -->
    <div class="form-group">
      <label>Waktu Checkin</label>
      <div class="form-control" style="border-top:none;border-left:none;border-right:none;">
        {{ $viewModel->data->attend->checkin_time }}
      </div>
    </div>
  </div>
</div>

<div class="row" style="border-top:none;border-left:none;border-right:none;border-bottom: 1px solid #CED4DA">
  <div class="col-md-12">
    <!-- text input -->
    <div class="form-group">
      <label>Lokasi Checkin</label>
      <div>
        {{ $viewModel->data->attend->checkin_address }}
      </div>
    </div>
  </div>
</div>

<div class="row" style="border-top:none;border-left:none;border-right:none;border-bottom: 1px solid #CED4DA">
  <div class="col-md-12">
      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkin</label>
        <div>{{ $viewModel->data->attend->checkin_description }}</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkout</label>
        <textarea id="checkout_description" name="checkout_description" class="form-control" rows="3" placeholder="">{{ $viewModel->data->attend->checkout_description }}</textarea>
      </div>

  </div>
</div>

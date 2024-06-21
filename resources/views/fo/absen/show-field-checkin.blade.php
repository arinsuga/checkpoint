
<div class="row">
  <div class="col-sm-12">
    <label></label>
    <div class="box full-width-sm">
      <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->attend->checkin_image) }}" alt="">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <!-- text input -->
    <div class="form-group">
      <label>Waktu</label>
      <div class="form-control" style="border-top:none;border-left:none;border-right:none;">
        {{ $viewModel->data->attend->checkin_time }}
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <!-- text input -->
    <div class="form-group">
      <label>Lokasi</label>
      <div style="border-top:none;border-left:none;border-right:none;border-bottom: 1px solid #CED4DA">
        {{ $viewModel->data->attend->checkin_address }}
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi</label>
        <div style="min-height: 120px;border-top:none;border-left:none;border-right:none;border-bottom: 1px solid #CED4DA">
          {{ $viewModel->data->attend->checkin_description }}
        </div>
      </div>
  </div>
</div>

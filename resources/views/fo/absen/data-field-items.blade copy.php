
<div class="row">
  <div class="col-sm-12">

        <input type="hidden" id="image" name="image" value="{{ $viewModel->data->user->checkin_image }}" placeholder="image">
        <input type="hidden" id="toggleRemoveImage" name="toggleRemoveImage" value="false">
        <input type="hidden" id="imageTemp" name="imageTemp" value="{{ session('imageTemp') }}" placeholder="imageTemp">
        <input type="hidden" id="base64file" name="base64file">

          <label>Screenshoot</label>
          <div class="box full-width-sm">
            <span class="control">
              <video height="200" id="video" autoplay></video>
            </span>

            <span class="control">
              <canvas id="canvas" height="200" class="hide"></canvas>
            </span>

            <!-- <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->user->checkin_image) }}" alt=""> -->

            <img id="imageViewer">

              <!-- @if (session('imageTemp'))
                <img id="imageViewer" src="{{ Arins\Facades\Filex::image(session('imageTemp')) }}" alt="">
              @else
                <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->user->checkin_image) }}" alt="">
              @endif -->

              @if ($viewModel->data->user->checkin_image)
                <!-- <img id="imageViewer" src="{{ Arins\Facades\Filex::image($viewModel->data->user->checkin_image) }}" alt=""> -->
                <!-- <span class="control control-widebox">  
                  <a onclick="event.preventDefault(); document.getElementById('upload').click();" href="#"><i class="fas fa-lg fa-edit"></i></a>
                  <a onclick="event.preventDefault(); removeImage('upload', 'imageViewer', 'toggleRemoveImage');" href="#"><i class="fas fa-lg fa-trash"></i></a>
                </span> -->
              @else
                <!-- <span id="control" style="position: absolute;" class="position-center">
                  <a style="height: 50px; width: 50px; color: #FFFFFF; opacity: 65%;" id="start-camera" onclick="event.preventDefault();" href="#"><i class="fa-solid fa-camera-retro fa-xl"></i></a>
                  <a style="height: 50px; width: 50px; color: #FFFFFF; opacity: 65%;" id="stop-camera" onclick="event.preventDefault();" href="#" class="hide" ><i class="fas fa-lg fa-trash"></i></a>
                </span> -->
              @endif
              
          </div>
          <div style="margin: 5px;" class="position-center">
            <button type="button" id="open-camera" style="color: #E52D27; opacity: 95%; height: 50px; width: 50px; border: solid 1px #E52D27; border-radius: 50%;"><i class="fa-solid fa-camera-retro fa-xl"></i></button>
            <button type="button" id="close-camera" class="hide" style="color: #E52D27; opacity: 65%; height: 50px; width: 50px; border: solid 1px #E52D27; border-radius: 50%;"><i class="fa-solid fa-ban fa-xl"></i></button>
            <button type="button" id="cancel-photo" class="hide" style="color: #E52D27; opacity: 65%; height: 50px; width: 50px; border: solid 1px #E52D27; border-radius: 50%;"><i class="fa-solid fa-trash fa-xl"></i></button>
            <button type="button" id="capture-photo" class="hide" style="color: #E52D27; opacity: 65%; height: 50px; width: 50px; border: solid 1px #E52D27; border-radius: 50%;"><i class="fa-solid fa-circle fa-xl"></i></button>
            <button type="button" id="rotate-camera" class="hide" style="color: #E52D27; opacity: 65%; height: 50px; width: 50px; border: solid 1px #E52D27; border-radius: 50%;"><i class="fa-solid fa-camera-rotate fa-xl"></i></button>
          </div>
          <!-- <input id="upload" name="upload" onchange="previewImage('upload', 'imageViewer', 'toggleRemoveImage');" style="display:none;" type="file" class="form-control" accept="image/*"> -->
          <input type="file" id="upload" name="upload" style="display:none;" class="form-control" accept="image/*">
  
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
        {{ $viewModel->data->user->checkin_time }}
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
        {{ $viewModel->data->user->checkin_address }}
      </div>
    </div>
  </div>
</div>

@if (strtolower($viewModel->data->action_button) == 'checkin')

<div class="row">
  <div class="col-md-12">

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkin</label>
        <textarea id="checkin_description" name="checkin_description" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('checkin_description') : $viewModel->data->user->checkin_description ) }}</textarea>
        <p class="text-red">{{ $errors->first('checkin_description') }}</p>
      </div>

  </div>
</div>

@else

<div class="row" style="border-top:none;border-left:none;border-right:none;border-bottom: 1px solid #CED4DA">
  <div class="col-md-12">
      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkin</label>
        <div>{{ $viewModel->data->user->checkin_description }}</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkout</label>
        <textarea id="checkout_description" name="checkout_description" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('checkout_description') : $viewModel->data->user->checkout_description ) }}</textarea>
        <p class="text-red">{{ $errors->first('checkout_description') }}</p>
      </div>

  </div>
</div>

@endif

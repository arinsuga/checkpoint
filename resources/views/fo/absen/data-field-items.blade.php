
<div class="row">
  <div class="col-sm-12">

        <input type="hidden" id="image" name="image" value="{{ $viewModel->data->user->checkin_image }}" placeholder="image">
        <input type="hidden" id="toggleRemoveImage" name="toggleRemoveImage" value="false">
        <input type="hidden" id="imageTemp" name="imageTemp" value="{{ session('imageTemp') }}" placeholder="imageTemp">
        <input type="hidden" id="base64file" name="base64file">

          <label></label>
          <div class="box full-width-sm">
            <div class="control">
              <video id="video" style="width: 100%;" height="200" autoplay></video>
              <canvas id="canvas" height="200" class="hide"></canvas>
              <img id="imageViewer">
            </div>
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

@if (strtolower($viewModel->data->action_button) == 'checkin')

<div class="row">
  <div class="col-md-12">

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea id="checkin_description" name="checkin_description" class="form-control" rows="5" placeholder="">{{ ( $errors->any() ? old('checkin_description') : ( session('checkin_description') ? session('checkin_description') : $viewModel->data->user->checkin_description ) ) }}</textarea>
        <p class="text-red">{{ $errors->first('checkin_description') }}</p>
      </div>

  </div>
</div>

@else

<div class="row">
  <div class="col-md-12">

      <!-- textarea -->
      <div class="form-group">
        <label>Deskripsi Checkout</label>
        <textarea id="checkout_description" name="checkout_description" class="form-control" rows="5" placeholder="">{{ ( $errors->any() ? old('checkout_description') : (session('checkout_description') ? session('checkout_description') : $viewModel->data->user->checkout_description ) ) }}</textarea>
        <p class="text-red">{{ $errors->first('checkout_description') }}</p>
      </div>

  </div>
</div>

@endif

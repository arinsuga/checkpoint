@extends('layouts.fo.app')

@section('content_title', \Arins\Facades\Formater::dateMonth(now()))

@section('toolbar')

@endsection

@section('control_sidebar')
@endsection

@section('js')

<script>

window.onerror = function (message, url, lineNo){
    alert('Error: ' + message + '\n' + 'Line Number: ' + lineNo);
    return true;
}

//Variable
var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");
var frmSubmit = document.getElementById("frmSubmit");
var btnSubmit = document.getElementById("btnSubmit");

if ('geolocation' in navigator) {
    btnSubmit.disabled = false;
} else {
    btnSubmit.disabled = true;
    alert('Device anda tidak support Geolocation');
}


let open_camera = document.querySelector("#open-camera");
let close_camera = document.querySelector("#close-camera");
let rotate_camera = document.querySelector("#rotate-camera");

let capture_photo = document.querySelector("#capture-photo");
let cancel_photo = document.querySelector("#cancel-photo");

let video = document.querySelector("#video");
let image_viewer = document.getElementById("imageViewer");
let canvas = document.querySelector("#canvas");
let base64file = document.querySelector("#base64file");
let upload = document.querySelector("#upload");

let stream = null;
let frontCamera = false;

function refreshCamera() {

    if (stream) {
        stream.getTracks().forEach(function(track) {
            track.stop();
        });    
    } //end if

    video.srcObject = null;
    stream = null;
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);

}

//#open-camera
open_camera.addEventListener('click', async function() {

    frontCamera = false;    
    this.classList.add("hide");
    cancel_photo.classList.add("hide");
    close_camera.classList.remove("hide");
    capture_photo.classList.remove("hide");
    rotate_camera.classList.remove("hide");

    image_viewer.classList.add("hide");
   	stream = await navigator.mediaDevices.getUserMedia({
        video: { facingMode: 'environment' },
        audio: false,
    });
	video.srcObject = stream;
});

//#close-camera
close_camera.addEventListener('click', function() {

    cancel_photo.click();
    refreshCamera();

    // stream.getTracks().forEach(function(track) {
    //     track.stop();
    // });    

	video.srcObject = null;

    this.classList.add('hide');
    capture_photo.classList.add('hide');
    rotate_camera.classList.add('hide');
    open_camera.classList.remove('hide');
    
});

//#rotate-camera
rotate_camera.addEventListener('click', async function() {

    refreshCamera();
   if (frontCamera == false) {
        frontCamera = true;
        stream = await navigator.mediaDevices.getUserMedia({
                        video: { facingMode: 'user' },
                        audio: false,
                });

   } else {
        frontCamera = false;
        stream = await navigator.mediaDevices.getUserMedia({
                            video: { facingMode: 'environment' },
                            audio: false,
                });

   } //end if

    video.srcObject = stream;
});

//#capture-photo
capture_photo.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	
    //base64FileString
    let image_data_url = canvas.toDataURL('image/jpeg');
    base64file.value = image_data_url;

    // JPEG file
    let file = null;
    let blob = canvas.toBlob(function(blob) {
                    file = new File([blob], 'temp.jpg', { type: 'image/jpeg' });
                    let container = new DataTransfer();    
                    container.items.add(file);
                    upload.files = container.files;    
			    }, 'image/jpeg');

    this.classList.add("hide");
    video.classList.add("hide");
    canvas.classList.remove("hide");
    cancel_photo.classList.remove("hide");

});

//#cancel-photo
cancel_photo.addEventListener('click', function() {

    // canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);

    refreshCamera();
    let image_data_url = canvas.toDataURL('image/jpeg');
    base64file.value = image_data_url;

    this.classList.add("hide");
    video.classList.remove("hide");
    canvas.classList.add("hide");
    capture_photo.classList.remove("hide");

});

//Event listener
btnSubmit.addEventListener("click", function() {

    //Run getLocation
    getLocation();

}); //end event

//Methods
function getLocation() {
  
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, failLocation);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
    location.reload();
  } //end if

} //end method

function failLocation(error) {
    alert('GPS / Location belum di aktifkan');
}

function showPosition(position) {

    latitude.value = position.coords.latitude;
    longitude.value = position.coords.longitude;
    if ((latitude.value) && (longitude.value)) {
        //Runs Submit Form
        frmSubmit.submit();
    } else {
        alert('GPS / Location belum di aktifkan');
    } //end if


    console.log(latitude.value + ',' + longitude.value);
} //end method

</script>

@endsection

@section('content')

<nav class="navbar navbar-expand ">
    <ul class="navbar-nav">

        <li class="nav-item" style="border-bottom: 5px solid red;">
            <a class="nav-link" href="{{ route('absen') }}" style="font-weight: bold;">
                Checkpoint
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('absen.history') }}" style="font-weight: bold;">
                History
            </a>
        </li>

    </ul>
</nav>


<div class="row">
    <div class="col-sm-12">

        @if ($viewModel->data !=null)
            @include('fo.absen.input')
        @endif

    </div>
</div>

@endsection

function previewImage(poFileID, psImgID, psToggleRemoveImage)
{
    var input = null;
    var image = document.getElementById(psImgID);
    var toggleRemoveImage = document.getElementById(psToggleRemoveImage);

    input = document.getElementById(poFileID);
    if (input.files && input.files[0]) {
        var reader = null;
        reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = function(e) {
            image.src = e.target.result;
            toggleRemoveImage.value = 'false';
        };
    }

    var controlAdd = document.getElementById('controlAdd');
    var controlRemove = document.getElementById('controlRemove');

    //Hide Control
    if (controlAdd) {
        controlAdd.classList.add("hide");
    }
    
    //Show Control
    if (controlRemove)
    {
        controlRemove.classList.remove("hide");
    }
}

function removeImage(poFileID, psImgID, psToggleRemoveImage)
{
    var input = document.getElementById(poFileID);
    var image = document.getElementById(psImgID);
    var toggleRemoveImage = document.getElementById(psToggleRemoveImage);
    image.src = '';
    input.value = '';
    toggleRemoveImage.value = 'true';

    var controlAdd = document.getElementById('controlAdd');
    var controlRemove = document.getElementById('controlRemove');
    //Hide Control
    if (controlAdd)
    {
        controlAdd.classList.remove("hide");
    }
    //Show Control
    if (controlRemove)
    {
        controlRemove.classList.add("hide");
    }
}
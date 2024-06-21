<script>
    // flatpickr(".date", {
    //     enableTime: true,
    //     dateFormat: "{{ config('a1.datejs.datetime') }}"
    // });
    //CKEDITOR.replace( 'description' );

$(document).ready(function() {

    // flatpickr(".date");
    flatpickr(".date", {
        enableTime: false,
        dateFormat: "{{ config('a1.datejs.date') }}"
    });
    $('.select2').select2();

    $('#btnView').click(function() {
        event.preventDefault();

        var historyMedia = document.getElementById('history_media');
        historyMedia.value = "view";

        document.getElementById('frmData').submit();
    })

    $('#btnPDF').click(function() {
        event.preventDefault();

        var historyMedia = document.getElementById('history_media');
        historyMedia.value = "pdf";

        document.getElementById('frmData').submit();
    })

});

</script>

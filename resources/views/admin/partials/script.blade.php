<script>
    var hostUrl = "assets/";
</script>

<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>



<script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>


<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
{{-- <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script> --}}
<!-- Custom:Shahed --->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('backend/assets/js/custom/techfocus/font-awesome.js') }}"></script>

{{-- <script src="{{ asset('backend/assets/js/custom/techfocus/toastr.js') }}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
<script src="{{ asset('backend/assets/js/bootstrap.multi-select.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.js"></script>
{{-- <script src="{{ asset('backend/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script> --}}
{{-- <script src="{{ asset('backend/assets/js/custom/documentation/editors/tinymce/plugins.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/custom/input-tags/js/tagsinput.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
<!-- Custom:Shahed --->

@stack('scripts')




<script>
    // Clear messages after a delay
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(function(alert) {
            alert.remove();
        });
    }, 2000); // Adjust the delay as needed (e.g., 5000 milliseconds = 5 seconds)
</script>


<script>
    $.fn.poshytip = {
        defaults: null
    }
</script>


<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success.message') }}',
        });
    @endif

    @if (session('error'))
        var errorMessage = @json(session('error'));
        Swal.fire({
            icon: 'error',
            title: 'You have recently got some errors while esecuting your acr=tio',
            html: errorMessage.join('<br>'),
        });
    @endif

    // Color Preview
    $(document).ready(function() {
        // Attach an input event listener to the color input
        $('.colorCode').on('input', function() {
            // Get the entered color code
            var colorCode = $(this).val();

            // Update the content of the preview element
            $(this).closest('.row').find('.colorCodePreview').text(colorCode);
        });

        function updateClock() {
            // Get the current time using moment.js
            var currentTime = moment().format('YYYY-MM-DD HH:mm:ss');

            // Update the content of the live clock element
            $('#liveClock').text('Current Time: ' + currentTime);
        }

        // Call updateClock function every second
        setInterval(updateClock, 1000);

        // Run updateClock initially to set the initial time
        updateClock();
    });
</script>

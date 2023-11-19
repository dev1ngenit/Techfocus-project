<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
{{-- <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script> --}}
<!-- Custom:Shahed --->
<script src="{{ asset('backend/assets/js/custom/techfocus/font-awesome.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/custom/techfocus/toastr.js') }}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
<script src="{{ asset('backend/assets/js/bootstrap.multi-select.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.js" ></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<!-- Custom:Shahed --->
<!--end::Page Custom Javascript-->
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

//     $(document).ready(function() {
//          // Initialize Bootstrap Multiselect
//       $('.bootstrap-multiselect').multiselect();
//    });
</script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            title: 'Error!',
            html: errorMessage.join('<br>'),
        });
    @endif
</script>

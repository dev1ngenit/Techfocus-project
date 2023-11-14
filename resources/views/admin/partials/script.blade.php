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


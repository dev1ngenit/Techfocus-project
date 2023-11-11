@unless (Auth::guard('admin')->user()->hasVerifiedEmail())
    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-3">
        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                    fill="currentColor" />
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-grow-1">
            <!--begin::Content-->
            <div class="fw-bold">
                <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                <div class="fs-6 text-gray-700">Your Profile is not verified. To verify, please
                    <a class="fw-bolder" href="{{route('admin.verification.notice')}}">Click Here..</a>.
                </div>
            </div>

            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
        <!-- Close button in the header -->
        <div class="btn btn-icon btn-sm btn-bg-danger ms-2" onclick="parentNode.remove()">
            <span class="svg-icon svg-icon-2x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                        transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                        fill="currentColor"></rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!-- End Close button in the header -->
    </div>
@endunless

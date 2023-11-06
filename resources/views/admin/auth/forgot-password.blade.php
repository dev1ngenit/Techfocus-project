@extends('admin.auth.app')
@section('content')
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form method="POST" action="{{ route('admin.password.email') }}"
                    class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="common_form">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">{{ __('Forgot your password?') }}</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">
                            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>
                        <!--end::Link-->
                        <!-- Session Status -->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                        <input class="form-control form-control-solid" type="email" placeholder="Enter Your Email Address"
                            name="email" required autocomplete="off" value="{{ old('email') }}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                        <button type="submit" id="common_submit" class="btn btn-lg common-btn-3 fw-bolder me-4 w-150px">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <a href="{{ route('admin.login') }}"
                            class="common-btn-2 btn btn-lg fw-bolder text-gradient w-100px border">Cancel</a>
                    </div>
                    <!--end::Actions-->
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->

    </div>
@endsection

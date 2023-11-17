@extends('admin.auth.app')
@section('content')
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                {{-- action="{{ route('admin.login') }}" --}}
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="common_form" action="{{ route('admin.login') }}"
                    method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Sign In</h1>
                        <!--end::Title-->
                        <!--begin::Link-->

                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg form-control-solid" type="email" name="identity"
                            value="{{ old('email') }}" required autocomplete="off" />
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="{{ route('admin.password.request') }}" class="link-primary fs-6 fw-bolder">
                                Forgot Password ?
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        {{-- <a href="java" id="togglePassword" class="link-primary fs-6 fw-bolder"
                            onclick="togglePasswordVisibility()">
                            
                        </a> --}}
                        <!--begin::Input-->
                        <div class="d-flex align-items-center">
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                id="passwordField" name="password" autocomplete="off" required />
                            <i class="fas fa-eye login_eye_icon" id="eyeIcon" style="margin-left: -2.5rem;"
                                onclick="togglePasswordVisibility()"></i>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" id="common_submit" class="btn btn-lg common-btn-3 fw-bolder me-4 w-150px mb-5">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Submit button-->

                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->

    </div>
@endsection

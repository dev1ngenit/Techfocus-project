@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 offset-lg-3 mb-5">
                <div class="card border-0 rounded-0 p-lg-5 p-3">
                    <h3 class="text-center font-poppins fw-bold mb-0">Reset Password</h3>
                    <hr class="w-25 mx-auto mt-1" style="color: var(--main-color);">
                    <p class="text-center font-poppins">You can reset your password from below.</p>
                    <div class="row mb-5">
                        <div class="col-lg-6 offset-lg-3">
                            <form action="{{ route('password.update') }}" class="login-validation" method="POST" novalidate>
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control rounded-0" id="email" value="{{ $request->email }}"
                                        placeholder="Enter Email" name="email" required>
                                    <div class="valid-feedback">Looks Good.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control rounded-0" id="pwd"
                                        placeholder="Enter password" name="password" required>
                                    <div class="valid-feedback">Looks Good.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                                    <input type="password" class="form-control rounded-0" id="password_confirmation"
                                        placeholder="Confirm Your password" name="password_confirmation" required>
                                    <div class="valid-feedback">Looks Good.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn common-btn-3 w-auto rounded-0">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            "use strict";

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll(".login-validation");

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener(
                    "submit",
                    function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
    </script>
@endpush

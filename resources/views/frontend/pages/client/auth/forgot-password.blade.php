@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 offset-lg-3 mb-5">
                <div class="card border-0 rounded-0 p-lg-5 p-3">
                    <h4 class="text-center font-poppins fw-bold">Forgot Password</h4>
                    <hr class="w-25 mx-auto" style="color: var(--main-color);">
                    <p class="text-center font-poppins">'Forgot your password? No problem. <br>
                        Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <div class="row mb-5">
                        <div class="col-lg-6 offset-lg-3">
                            <form action="{{ route('password.email') }}" class="login-validation" method="POST" novalidate>
                                @csrf
                                <div class="row py-2">
                                    <div class="mb-3 mt-3">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control rounded-0" id="email" value="{{ old('email') }}"
                                            placeholder="Enter Email" name="email" required>
                                        <div class="valid-feedback">Looks Good.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                               
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn common-btn-3 rounded-0 w-75">Email Password Reset Link</button>
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

@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!-- content start -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-6 offset-lg-3 mb-5">
                <div class="card border-0 rounded-0 p-3 pt-5">
                    <h1 class="text-center font-poppins fw-bold">Sign Up</h1>
                    <hr class="w-25 mx-auto" style="color: var(--main-color)" />
                    <p class="text-center font-poppins">
                        You can view your conversation and request <br />
                        history in your account.
                    </p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="row mb-5">
                        <div class="col-lg-8 offset-lg-2">
                            <form action="{{ route('register') }}" method="POST" class="signup_validation needs-validation"
                                novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3 mt-3">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" class="form-control rounded-0" id="name"
                                                placeholder="Enter First Name" name="name" required />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Excellent.</div>
                                            {{-- <div class="invalid-feedback">
                                                Please fill out this field.
                                            </div> --}}
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3 mt-3">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" class="form-control rounded-0" id="email"
                                                placeholder="Enter Email" name="email" required />
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Good.</div>
                                            {{-- <div class="invalid-feedback">
                                                Please fill out this field.
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control rounded-0" id="phone"
                                                placeholder="Enter Phone Number" name="phone" required />
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Valid.</div>
                                            {{-- <div class="invalid-feedback">
                                                Please fill out this field.
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Company Name</label>
                                            <input type="text" class="form-control rounded-0" id="company_name"
                                                placeholder="Enter Company Name" name="company_name" />
                                            @error('company_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Excellent.</div>
                                            {{-- <div class="invalid-feedback">
                                                Please fill out this field.
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="pwd" class="form-label">Password:</label>
                                            <input type="password" class="form-control rounded-0" id="pwd"
                                                placeholder="Enter password" name="password" required />
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Good.</div>
                                            {{-- <div class="invalid-feedback">
                                                Please fill out this field.
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="confirm_password" class="form-label">Confirm Password:</label>
                                            <input type="password" class="form-control rounded-0" id="confirm_password"
                                                placeholder="Enter password" name="password_confirmation" required />
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Password Strong.</div>
                                            <!-- <div class="invalid-feedback">Passwords do not match or are not strong enough.</div> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="d-flex justify-content-center align-items-center mb-3 py-3">
                                            <input class="form-check-input mt-0 me-2" type="checkbox" id="myCheck" checked
                                                name="check_terms" required>
                                            <label class="form-check-label" for="myCheck">I agree on Tech Focus Term &amp;
                                                Condition.</label>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">
                                                Check this checkbox to continue.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn signin rounded-0 w-auto">
                                        Sign Up Now
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <span>Already Have An Accounts?
                                        <a href="{{ route('login') }}" class="my-3 main-color fw-bold">Login Now</a></span>
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
        $(document).ready(function() {
            // Your existing validation logic
            $(".needs-validation").on("submit", function(event) {
                var form = $(this);
                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.addClass("was-validated");
            });

            // Additional password matching logic
            $("#pwd, #confirm_password").on("keyup change", function() {
                var password = $("#pwd").val();
                var confirmPassword = $("#confirm_password").val();

                if (password !== confirmPassword) {
                    $("#confirm_password")[0].setCustomValidity(
                        "Passwords do not match"
                    );
                } else {
                    $("#confirm_password")[0].setCustomValidity("");
                }
            });
        });
    </script>
@endpush

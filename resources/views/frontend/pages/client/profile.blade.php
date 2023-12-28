@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
        <!--Banner -->
        @include('frontend.pages.client.partials.page_header')
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card border-0 rounded-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center  mb-3">
                                <div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/547/547590.png"
                                        class="border border-1 border-opacity-50 border-dark" width="60px"
                                        height="60px" alt="">
                                </div>
                                <div class="fw-bold"> My Profile </div>
                            </div>
                            <h5 class="card-title text-center py-2 main-color"> My Personal Information</h5>
                            <form class="row g-3 profileValidation pt-3" novalidate>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">First Name</label>
                                    <input type="text" class="form-control rounded-0" id="validationCustom01"
                                        placeholder="Enter First Name" name="first_name" value="Mark" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid First Name.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Last Name</label>
                                    <input type="text" class="form-control rounded-0" id="validationCustom02"
                                        placeholder="Enter Last Name" name="last_name" value="Otto" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid Last Name.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Company</label>
                                    <input type="text" class="form-control rounded-0" id="validationCustom02"
                                        placeholder="Enter Company" name="Company" value="Ngen IT" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid Company.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-0" id="validationCustom03"
                                        placeholder="Enter Email" name="email" value="demo@gmail.com" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid Email.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control rounded-0" id="validationCustom02"
                                        placeholder="Enter Number" name="phone_number" value="015666458" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid Phone Number.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">City</label>
                                    <input type="text" class="form-control rounded-0" id="validationCustom03"
                                        placeholder="Enter City" name="city" value="Dhaka" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Type Of Company</label>
                                    <select class="form-select rounded-0" id="validationCustom04"
                                        placeholder="Enter Type Of Company" name="type_of_company" required>
                                        <option disabled value="">Choose...</option>
                                        <option>Industrial sub-contractor</option>
                                        <option>Design office, R&D</option>
                                        <option>Distributor, Retailer</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please select a valid Type Of Company.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Sector</label>
                                    <select class="form-select rounded-0" id="validationCustom04"
                                        placeholder="Enter Sector" name="sector" required>
                                        <option disabled value="">Choose...</option>
                                        <option>Aeronautics</option>
                                        <option>Agri-food</option>
                                        <option>Automotive</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please select a valid Sector.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Website</label>
                                    <input type="url" class="form-control rounded-0" id="validationCustom03"
                                        placeholder="Enter Website" name="website" value="http://ngenitltd.com/"
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid Website URl.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-10">
                                            <div class="mb-3">
                                                <label for="validationCustom03" class="form-label">Profile Image</label>
                                                <input type="file" class="form-control rounded-0" name="profile_image"
                                                    aria-label="file example" required>
                                                <div class="invalid-feedback">Please Choose Your Profile Photo</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/547/547590.png"
                                                class="rounded-circle border border-1 border-opacity-50 border-dark"
                                                width="60px" height="60px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label pt-1" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <span class="text-primary font-two">If Need :</span>
                                                <button class="accordion-button collapsed border-0 bg-light"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                    aria-controls="flush-collapseOne">
                                                    I Want To Change My Password
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="mb-2">
                                                        <label class="pb-2" for="oldpassword">Enter Old Password</label>
                                                        <input type="password" class="form-control rounded-0"
                                                            placeholder="Enter Your Old Password" name="old_password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="pb-2" for="oldpassword">Enter New Password</label>
                                                        <input type="password" class="form-control rounded-0"
                                                            placeholder="Enter Your Old Password" name="new_password">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="pb-2" for="oldpassword">Enter Confirm
                                                            Password</label>
                                                        <input type="password" class="form-control rounded-0"
                                                            placeholder="Enter Your Confirm Password"
                                                            name="confirm_password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-end">
                                    <button class="btn signin w-auto rounded-0" type="submit">Update Information</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-3">
                <div class="col-lg-12 col-sm-12">
                    <p class="main-color text-center">
                        *Prices are pre-tax. They exclude delivery charges and customs
                        duties and do not include additional charges for installation or
                        activation options. Prices are indicative only and may vary by
                        country, with changes to the cost of raw materials and exchange
                        rates.
                    </p>
                </div>
            </div>
        </div>
@endsection

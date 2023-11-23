@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm px-0">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                        style="min-height: 45px;">
                        <div class="container px-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                    <div class="card-title ps-3">
                                        <h2 class="text-start">Company Add From</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
                                    <a href="{{ route('admin.company.index') }}"
                                        class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                        <i class="las la-arrow-left fs-2 me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="myForm" action="{{ route('admin.company.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3 mb-1">
                                                <label for="name" class="form-label mb-0">Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('name') is-invalid @enderror"
                                                    name="name" id="name" placeholder="E.g : Your Name">
                                                @error('name')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Industry</label>
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('industry') is-invalid @enderror"
                                                    name="industry[]" data-control="select2" multiple="multiple"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    @foreach (getIndustry() as $industry)
                                                        <option value="{{ $industry->id }}">
                                                            {{ $industry->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('industry')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Country
                                                    Name</label>
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('country') is-invalid @enderror"
                                                    name="country[]" data-control="select2" multiple="multiple"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Location</label>
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('location') is-invalid @enderror"
                                                    name="location[]" data-control="select2" multiple="multiple"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    @foreach (getAddress() as $address)
                                                        <option value="{{ $address->id }}">
                                                            {{ $address->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('location')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('phone') is-invalid @enderror"
                                                    name="phone" id="validationCustom01" placeholder="E.g: 017 **** ****">
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Email</label>
                                                <input type="email"
                                                    class="form-control form-control-solid form-control-sm @error('email') is-invalid @enderror"
                                                    name="email" id="validationCustom01"
                                                    placeholder="E.g: yourmail@mail.com">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Website
                                                    Url</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('text') is-invalid @enderror"
                                                    name="website_url" id="validationCustom01"
                                                    placeholder="E.g: yourwebsite.com">
                                                @error('website_url')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm @error('file') is-invalid @enderror"
                                                    name="logo" id="validationCustom01">
                                                @error('logo')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Postal
                                                    Code</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('postal_code') is-invalid @enderror"
                                                    name="postal_code" id="validationCustom01" placeholder="E.g: 1265">
                                                @error('postal_code')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('contact_name') is-invalid @enderror"
                                                    name="contact_name" id="validationCustom01"
                                                    placeholder="E.g: Your Contact Name">
                                                @error('contact_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Email</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('contact_email') is-invalid @enderror"
                                                    name="contact_email" id="validationCustom01"
                                                    placeholder="E.g: demo@mail.com">
                                                @error('contact_email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('contact_phone') is-invalid @enderror"
                                                    name="contact_phone" id="validationCustom01"
                                                    placeholder="E.g: 015 **** ****">
                                                @error('contact_phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Headquarter Country
                                                    Name</label>
                                                <select
                                                    class="form-select form-select-sm form-select-solid @error('headquarter_country_id') is-invalid @enderror"
                                                    name="headquarter_country_id" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('headquarter_country_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Founder</label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm @error('founder') is-invalid @enderror"
                                                name="founder" id="validationCustom01" placeholder="E.g: Founder">
                                            @error('founder')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">CEO</label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm @error('ceo') is-invalid @enderror"
                                                name="ceo" id="validationCustom01" placeholder="E.g: CEO">
                                            @error('ceo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Year
                                                Founded</label>
                                            <input type="number"
                                                class="form-control form-control-solid form-control-sm @error('year_founded') is-invalid @enderror"
                                                name="year_founded" min="1000" max="9999"
                                                id="validationCustom01" placeholder="E.g: 1920">
                                            @error('year_founded')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Headquarter</label>
                                            <textarea rows="1" name="headquarter"
                                                class="form-control form-control-sm form-control-solid @error('headquarter') is-invalid @enderror"></textarea>
                                            @error('headquarter')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Mission</label>
                                            <textarea name="mission" class="tox-target kt_docs_tinymce_plugins @error('mission') is-invalid @enderror">{{ old('mission') }}</textarea>
                                            @error('mission')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Vision</label>
                                            <textarea name="vision" class="tox-target kt_docs_tinymce_plugins @error('vision') is-invalid @enderror">{{ old('vision') }}</textarea>
                                            @error('vision')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">History</label>
                                            <textarea name="history" class="tox-target kt_docs_tinymce_plugins @error('history') is-invalid @enderror">{{ old('history') }}</textarea>
                                            @error('history')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="about" class="form-label required mb-0">About</label>
                                            <textarea id="about" name="about"
                                                class="tox-target kt_docs_tinymce_plugins @error('about') is-invalid @enderror">{{ old('about') }} </textarea>
                                            @error('about')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12 mt-5">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

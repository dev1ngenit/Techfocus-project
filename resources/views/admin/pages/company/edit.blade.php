@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm px-0">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                        style="min-height: 45px;">
                        <div class="container-fluid px-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                    <div class="card-title ps-3">
                                        <h2 class="text-start">Company Edit From</h2>
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
                        <form action="{{ route('admin.company.edit', $company->id) }}" class="needs-validation"
                            method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="container-fluid px-2">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-3 mb-1">
                                                <label for="validationCustom01" class="form-label required mb-0">Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    value="{{ $company->name }}" id="validationCustom01"
                                                    placeholder="E.g : Your Name" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>

                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Industry</label>
                                                @php
                                                    $industries = is_array($company->industry) ? $company->industry : (isset($company->industry) ? json_decode($company->industry, true) : []);
                                                @endphp
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('industry') is-invalid @enderror""
                                                    name="industry[]" id="field2" multiple multiselect-search="true"
                                                    multiselect-select-all="true" multiselect-max-items="2">
                                                    @if ($industries)
                                                        @foreach (getIndustry() as $industry)
                                                            <option @selected(in_array($industry->id, $industries))
                                                                value="{{ $industry->id }}">
                                                                {{ $industry->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value=""></option>
                                                    @endif
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Industry. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Country
                                                    Name</label>
                                                @php
                                                    $countries = is_array($company->country) ? $company->country : (isset($company->country) ? json_decode($company->country, true) : []);
                                                @endphp
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('country') is-invalid @enderror""
                                                    name="country[]" id="field2" multiple multiselect-search="true"
                                                    multiselect-select-all="true" multiselect-max-items="2">
                                                    @if ($countries)
                                                        @foreach (getAllCountry() as $country)
                                                            <option @selected(in_array($country->id, $countries))
                                                                value="{{ $country->id }}">
                                                                {{ $country->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value=""></option>
                                                    @endif
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Country. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Location</label>
                                                @php
                                                    $addresses = is_array($company->address) ? $company->address : (isset($company->address) ? json_decode($company->address, true) : []);
                                                @endphp
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('location') is-invalid @enderror""
                                                    name="location[]" id="field2" multiple multiselect-search="true"
                                                    multiselect-select-all="true" multiselect-max-items="2">
                                                    @if ($addresses)
                                                        @foreach (getAddress() as $address)
                                                            <option @selected(in_array($address->id, $addresses))
                                                                value="{{ $address->id }}">
                                                                {{ $address->name }}</option>
                                                        @endforeach
                                                    @else
                                                        <option value=""></option>
                                                    @endif
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Location. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="phone"
                                                    value="{{ $company->phone }}" id="validationCustom01"
                                                    placeholder="E.g: 017 **** ****">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Phone. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Email</label>
                                                <input type="email"
                                                    class="form-control form-control-solid form-control-sm" name="email"
                                                    value="{{ $company->email }}" id="validationCustom01"
                                                    placeholder="E.g: yourmail@mail.com">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Email. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Website
                                                    Url</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="website_url" value="{{ $company->website_url }}"
                                                    id="validationCustom01" placeholder="E.g: yourwebsite.com">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Website. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="logo"
                                                    id="validationCustom01">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Logo </div>
                                            </div>

                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Postal
                                                    Code</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="postal_code" value="{{ $company->postal_code }}"
                                                    id="validationCustom01" placeholder="E.g: 1265">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Postal Code. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="contact_name" value="{{ $company->contact_name }}"
                                                    id="validationCustom01" placeholder="E.g: Your Contact Name">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Contact Name. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Email</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="contact_email" value="{{ $company->contact_email }}"
                                                    id="validationCustom01" placeholder="E.g: demo@mail.com">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Contact Email. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Contact
                                                    Phone</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="contact_phone" value="{{ $company->contact_phone }}"
                                                    id="validationCustom01" placeholder="E.g: 015 **** ****">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Contact Phone. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Headquarter Country
                                                    Name</label>
                                                <select class="form-select form-select-sm form-select-solid"
                                                    name="headquarter_country_id" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option @selected($company->headquarter_country_id == $country->id) value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Headquater Country Name.
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Founder</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="founder"
                                                    value="{{ $company->founder }}" id="validationCustom01"
                                                    placeholder="E.g: Founder">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Founder. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">CEO</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="ceo"
                                                    value="{{ $company->ceo }}" id="validationCustom01"
                                                    placeholder="E.g: CEO">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a CEO. </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Year
                                                    Founded</label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="year_founded" value="{{ $company->year_founded }}"
                                                    min="1000" max="9999" id="validationCustom01"
                                                    placeholder="E.g: 1920">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Year Founded. </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Headquarter</label>
                                                <textarea rows="1" name="headquarter" class="form-control form-control-sm form-control-solid">{{ $company->headquarter }}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Headquarter. </div>
                                            </div>

                                            <div class="col-lg-12 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Mission</label>
                                                <textarea name="mission" class="tox-target kt_docs_tinymce_plugins">{!! $company->mission !!}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Year Founded. </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Vision</label>
                                                <textarea name="vision" class="tox-target kt_docs_tinymce_plugins">{!! $company->vision !!}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a Vision. </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">History</label>
                                                <textarea name="history" class="tox-target kt_docs_tinymce_plugins">{!! $company->history !!}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a History. </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">About</label>
                                                <textarea name="about" class="tox-target kt_docs_tinymce_plugins">{!! $company->about !!}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a About. </div>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

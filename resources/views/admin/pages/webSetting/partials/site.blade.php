<form action="{{ route('admin.site.setting') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Country Name</label>
            <select class="form-select form-select-solid form-select-sm @error('country_id') is-invalid @enderror"
                name="country_id" data-control="select2" data-hide-search="false"
                data-placeholder="Select an Product Type" data-allow-clear="true">
                <option></option>
                @foreach (getAllCountry() as $country)
                    <option value="{{ $country->id }}" @selected($country->id == $site->country_id)>{{ $country->name }}</option>
                @endforeach
                
            </select>
            @error('country_id')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Company Name</label>
            <select class="form-select form-select-solid form-select-sm @error('company_id') is-invalid @enderror"
                name="company_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                <option></option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}" @selected($company->id == $site->company_id)>{{ $company->name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Name</label>
                <input name="system_name" value="{{ optional($site)->system_name }}"
                    class="form-control form-control-sm form-control-solid @error('system_name') is-invalid @enderror"
                    placeholder="Enter system name" type="text" />
                @error('system_name')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Frontend Web site Name</label>
                <input name="frontend_website_name" value="{{ optional($site)->frontend_website_name }}"
                    class="form-control form-control-sm form-control-solid @error('frontend_website_name') is-invalid @enderror"
                    placeholder="Enter Frontend website Name" type="text" />
                @error('frontend_website_name')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Site Motto</label>
                <input name="site_motto" value="{{ optional($site)->site_motto }}"
                    class="form-control form-control-sm form-control-solid @error('site_motto') is-invalid @enderror"
                    placeholder="Enter Site Motto" type="text" />
                @error('site_motto')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Site Icon</label>
                <input name="site_icon"
                    class="form-control form-control-sm form-control-solid @error('site_icon') is-invalid @enderror"
                    placeholder="Enter Site Icon" type="file" accept="image/*" />
                @error('site_icon')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Logo White</label>
                <input name="system_logo_white"
                    class="form-control form-control-sm form-control-solid @error('system_logo_white') is-invalid @enderror"
                    placeholder="Enter System Logo White" type="file" accept="image/*" />
                @error('system_logo_white')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Logo Black</label>
                <input name="system_logo_black"
                    class="form-control form-control-sm form-control-solid @error('system_logo_black') is-invalid @enderror"
                    placeholder="Enter System Logo Black" type="file" accept="image/*" />
                @error('system_logo_black')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">System Timezone</label>
                <input name="system_timezone" value="{{ optional($site)->system_timezone }}"
                    class="form-control form-control-sm form-control-solid @error('system_timezone') is-invalid @enderror"
                    placeholder="Enter System Timezone" type="text" />
                @error('system_timezone')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Base Color</label>
                <input name="base_color" value="{{ optional($site)->base_color }}"
                    class="form-control form-control-sm form-control-solid @error('base_color') is-invalid @enderror"
                    placeholder="Enter Base Color" type="color" />
                @error('base_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Base Hover Color</label>
                <input name="base_hover_color" value="{{ optional($site)->base_hover_color }}"
                    class="form-control form-control-sm form-control-solid @error('base_hover_color') is-invalid @enderror"
                    placeholder="Enter Base Hover Color" type="color" />
                @error('base_hover_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Secondary Base Color</label>
                <input name="secondary_base_color" value="{{ optional($site)->secondary_base_color }}"
                    class="form-control form-control-sm form-control-solid @error('secondary_base_color') is-invalid @enderror"
                    placeholder="Enter Secondary Base Color" type="color" />
                @error('secondary_base_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Secondary Base Hover Color</label>
                <input name="secondary_base_hover_color" value="{{ optional($site)->secondary_base_hover_color }}"
                    class="form-control form-control-sm form-control-solid @error('secondary_base_hover_color') is-invalid @enderror"
                    placeholder="Enter Secondary Base Hover Color" type="color" />
                @error('secondary_base_hover_color')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Phone One</label>
                <input name="phone_one" value="{{ optional($site)->phone_one }}"
                    class="form-control form-control-sm form-control-solid @error('phone_one') is-invalid @enderror"
                    placeholder="Enter Phone One" type="number" />
                @error('phone_one')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Phone Two</label>
                <input name="phone_two" value="{{ optional($site)->phone_two }}"
                    class="form-control form-control-sm form-control-solid @error('phone_two') is-invalid @enderror"
                    placeholder="Enter Phone Two" type="number" />
                @error('phone_two')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Whatsapp Number</label>
                <input name="whatsapp_number" value="{{ optional($site)->whatsapp_number }}"
                    class="form-control form-control-sm form-control-solid @error('whatsapp_number') is-invalid @enderror"
                    placeholder="Enter Whatsapp Number" type="number" />
                @error('whatsapp_number')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Default Language</label>
                <input name="default_language" value="{{ optional($site)->default_language }}"
                    class="form-control form-control-sm form-control-solid @error('default_language') is-invalid @enderror"
                    placeholder="Enter Default Language" type="text" />
                @error('default_language')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Contact Email</label>
                <input name="contact_email" value="{{ optional($site)->contact_email }}"
                    class="form-control form-control-sm form-control-solid @error('contact_email') is-invalid @enderror"
                    placeholder="Enter Contact Email" type="text" />
                @error('contact_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Support Email</label>
                <input name="support_email" value="{{ optional($site)->support_email }}"
                    class="form-control form-control-sm form-control-solid @error('support_email') is-invalid @enderror"
                    placeholder="Enter Support Email" type="text" />
                @error('support_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Info Email</label>
                <input name="info_email" value="{{ optional($site)->info_email }}"
                    class="form-control form-control-sm form-control-solid @error('info_email') is-invalid @enderror"
                    placeholder="Enter Info Email" type="text" />
                @error('info_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Sales Email</label>
                <input name="sales_email" value="{{ optional($site)->sales_email }}"
                    class="form-control form-control-sm form-control-solid @error('sales_email') is-invalid @enderror"
                    placeholder="Enter Sales Email" type="text" />
                @error('sales_email')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Facebook URL</label>
                <input name="facebook_url" value="{{ optional($site)->facebook_url }}"
                    class="form-control form-control-sm form-control-solid @error('facebook_url') is-invalid @enderror"
                    placeholder="Enter Facebook URL" type="url" />
                @error('facebook_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Twitter URL</label>
                <input name="twitter_url" value="{{ optional($site)->twitter_url }}"
                    class="form-control form-control-sm form-control-solid @error('twitter_url') is-invalid @enderror"
                    placeholder="Enter Twitter URL" type="url" />
                @error('twitter_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Instagram URL</label>
                <input name="instagram_url" value="{{ optional($site)->instagram_url }}"
                    class="form-control form-control-sm form-control-solid @error('instagram_url') is-invalid @enderror"
                    placeholder="Enter Instagram URL" type="url" />
                @error('instagram_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Linkedin URL</label>
                <input name="linkedin_url" value="{{ optional($site)->linkedin_url }}"
                    class="form-control form-control-sm form-control-solid @error('linkedin_url') is-invalid @enderror"
                    placeholder="Enter Linkedin URL" type="url" />
                @error('linkedin_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Youtube URL</label>
                <input name="youtube_url" value="{{ optional($site)->youtube_url }}"
                    class="form-control form-control-sm form-control-solid @error('youtube_url') is-invalid @enderror"
                    placeholder="Enter Youtube URL" type="url" />
                @error('youtube_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Github URL</label>
                <input name="github_url" value="{{ optional($site)->github_url }}"
                    class="form-control form-control-sm form-control-solid @error('github_url') is-invalid @enderror"
                    placeholder="Enter Github URL" type="url" />
                @error('github_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Portfolio URL</label>
                <input name="portfolio_url" value="{{ optional($site)->portfolio_url }}"
                    class="form-control form-control-sm form-control-solid @error('portfolio_url') is-invalid @enderror"
                    placeholder="Enter Portfolio URL" type="url" />
                @error('portfolio_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Fiver URL</label>
                <input name="fiver_url" value="{{ optional($site)->fiver_url }}"
                    class="form-control form-control-sm form-control-solid @error('fiver_url') is-invalid @enderror"
                    placeholder="Enter fiver URL" type="url" />
                @error('fiver_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Upwork URL</label>
                <input name="upwork_url" value="{{ optional($site)->upwork_url }}"
                    class="form-control form-control-sm form-control-solid @error('upwork_url') is-invalid @enderror"
                    placeholder="Enter upwork URL" type="url" />
                @error('upwork_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Service Days</label>
                <input name="service_days" value="{{ optional($site)->service_days }}"
                    class="form-control form-control-sm form-control-solid @error('service_days') is-invalid @enderror"
                    min="1" max="100" placeholder="Enter Service Days" type="number" />
                @error('service_days')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row mb-3">
                <label class="form-label">Service Time</label>
                <input name="service_time" value="{{ optional($site)->service_time }}"
                    class="form-control form-control-sm form-control-solid @error('service_time') is-invalid @enderror"
                    placeholder="Enter service_time" type="text" />
                @error('service_time')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-lg btn-info rounded-0">
                    Submit
                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
</form>

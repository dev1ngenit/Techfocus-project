@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
                    <div class="main_bg card-header py-2 main_bg align-items-center">
                        <div class="col-lg-5 col-sm-12">
                            <div>
                                <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ URL::previous() }}">
                                    <i class="fa-solid fa-arrow-left text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 d-flex justify-content-end">
                            <h4 class="text-white p-0 m-0 fw-bold">Dynamic Css Form</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.css.update', $css->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Primary Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="primary_color" value="{{ optional($css)->primary_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('primary_color') is-invalid @enderror"
                                                    placeholder="Enter Primary_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->primary_color }}</span>
                                            </div>
                                            @error('primary_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Secondary Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="secondary_color" value="{{ optional($css)->secondary_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('secondary_color') is-invalid @enderror"
                                                    placeholder="Enter Secondary_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->secondary_color }}</span>
                                            </div>
                                            @error('secondary_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Secondary_Bg Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="secondary_bg_color"
                                                    value="{{ optional($css)->secondary_bg_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('secondary_bg_color') is-invalid @enderror"
                                                    placeholder="Enter Secondary_Bg_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->secondary_bg_color }}</span>
                                            </div>
                                            @error('secondary_bg_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Secondary_Deep Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="secondary_deep_color"
                                                    value="{{ optional($css)->secondary_deep_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('secondary_deep_color') is-invalid @enderror"
                                                    placeholder="Enter Secondary_Deep_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->secondary_deep_color }}</span>
                                            </div>
                                            @error('secondary_deep_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Btn Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="btn_color" value="{{ optional($css)->btn_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('btn_color') is-invalid @enderror"
                                                    placeholder="Enter Btn_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->btn_color }}</span>
                                            </div>
                                            @error('btn_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Main_Bg Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="main_bg_color" value="{{ optional($css)->main_bg_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('main_bg_color') is-invalid @enderror"
                                                    placeholder="Enter Main_Bg_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->main_bg_color }}</span>
                                            </div>
                                            @error('main_bg_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Paragraph Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="paragraph_color"
                                                    value="{{ optional($css)->paragraph_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('paragraph_color') is-invalid @enderror"
                                                    placeholder="Enter Paragraph_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->paragraph_color }}</span>
                                            </div>
                                            @error('paragraph_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Secondary_Paragraph Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="secondary_paragraph_color"
                                                    value="{{ optional($css)->secondary_paragraph_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('secondary_paragraph_color') is-invalid @enderror"
                                                    placeholder="Enter Secondary_Paragraph_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->secondary_paragraph_color }}</span>
                                            </div>
                                            @error('secondary_paragraph_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Heading Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="heading_color" value="{{ optional($css)->heading_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('heading_color') is-invalid @enderror"
                                                    placeholder="Enter Heading_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->heading_color }}</span>
                                            </div>
                                            @error('heading_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">White</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="white" value="{{ optional($css)->white }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('white') is-invalid @enderror"
                                                    placeholder="Enter White" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->white }}</span>
                                            </div>
                                            @error('white')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Black</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="black" value="{{ optional($css)->black }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('black') is-invalid @enderror"
                                                    placeholder="Enter Black" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->black }}</span>
                                            </div>
                                            @error('black')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Secoandaryborder Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="secoandaryborder_color"
                                                    value="{{ optional($css)->secoandaryborder_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('secoandaryborder_color') is-invalid @enderror"
                                                    placeholder="Enter Secoandaryborder_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->secoandaryborder_color }}</span>
                                            </div>
                                            @error('secoandaryborder_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Border Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="border_color" value="{{ optional($css)->border_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('border_color') is-invalid @enderror"
                                                    placeholder="Enter Border_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->border_color }}</span>
                                            </div>
                                            @error('border_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Divider Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="divider_color" value="{{ optional($css)->divider_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('divider_color') is-invalid @enderror"
                                                    placeholder="Enter Divider_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->divider_color }}</span>
                                            </div>
                                            @error('divider_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Toggle Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="toggle_color" value="{{ optional($css)->toggle_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('toggle_color') is-invalid @enderror"
                                                    placeholder="Enter Toggle_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->toggle_color }}</span>
                                            </div>
                                            @error('toggle_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Text Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="text_color" value="{{ optional($css)->text_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('text_color') is-invalid @enderror"
                                                    placeholder="Enter Text_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->text_color }}</span>
                                            </div>
                                            @error('text_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Para Color</label>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <input name="para_color" value="{{ optional($css)->para_color }}"
                                                    class="form-control form-control-sm form-control-solid colorCode @error('para_color') is-invalid @enderror"
                                                    placeholder="Enter Para_Color" type="color" />

                                            </div>
                                            <div class="col-8">
                                                <span class="input-group-text rounded-0 colorCodePreview"
                                                    id="colorCodePreview">{{ optional($css)->para_color }}</span>
                                            </div>
                                            @error('para_color')
                                                <div class="invalid-feedback"> {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Custom Shadow</label>
                                        <input name="custom_shadow" value="{{ optional($css)->custom_shadow }}"
                                            class="form-control form-control-sm form-control-solid @error('custom_shadow') is-invalid @enderror"
                                            placeholder="Enter Custom Shadow" type="text" />
                                        @error('custom_shadow')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Primary Font</label>
                                        <input name="primary_font" value="{{ optional($css)->primary_font }}"
                                            class="form-control form-control-sm form-control-solid @error('primary_font') is-invalid @enderror"
                                            placeholder="Enter Primary Font" type="text" />
                                        @error('primary_font')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Number Font</label>
                                        <input name="number_font" value="{{ optional($css)->number_font }}"
                                            class="form-control form-control-sm form-control-solid @error('number_font') is-invalid @enderror"
                                            placeholder="Enter Number Font" type="text" />
                                        @error('number_font')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Section Title Font Size</label>
                                        <input name="section_title_font_size"
                                            value="{{ optional($css)->section_title_font_size }}"
                                            class="form-control form-control-sm form-control-solid @error('section_title_font_size') is-invalid @enderror"
                                            placeholder="Enter Section Title Font Size" type="text" />
                                        @error('section_title_font_size')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Header Font Size</label>
                                        <input name="header_font_size" value="{{ optional($css)->header_font_size }}"
                                            class="form-control form-control-sm form-control-solid @error('header_font_size') is-invalid @enderror"
                                            placeholder="Enter Header Font Size" type="text" />
                                        @error('header_font_size')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Content Title Font Size</label>
                                        <input name="content_title_font_size"
                                            value="{{ optional($css)->content_title_font_size }}"
                                            class="form-control form-control-sm form-control-solid @error('content_title_font_size') is-invalid @enderror"
                                            placeholder="Enter Content Title Font Size" type="text" />
                                        @error('content_title_font_size')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Paragraph Font Size</label>
                                        <input name="paragraph_font_size"
                                            value="{{ optional($css)->paragraph_font_size }}"
                                            class="form-control form-control-sm form-control-solid @error('paragraph_font_size') is-invalid @enderror"
                                            placeholder="Enter Paragraph Font Size" type="text" />
                                        @error('paragraph_font_size')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Badge Font Size</label>
                                        <input name="badge_font_size" value="{{ optional($css)->badge_font_size }}"
                                            class="form-control form-control-sm form-control-solid @error('badge_font_size') is-invalid @enderror"
                                            placeholder="Enter Badge Font Size" type="text" />
                                        @error('badge_font_size')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Primary Font Url</label>
                                        <input name="primary_font_url" value="{{ optional($css)->primary_font_url }}"
                                            class="form-control form-control-sm form-control-solid @error('primary_font_url') is-invalid @enderror"
                                            placeholder="Enter Badge Font Size" type="url" />
                                        @error('primary_font_url')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Number Font Url</label>
                                        <input name="number_font_url" value="{{ optional($css)->number_font_url }}"
                                            class="form-control form-control-sm form-control-solid @error('number_font_url') is-invalid @enderror"
                                            placeholder="Enter Badge Font Size" type="url" />
                                        @error('number_font_url')
                                            <div class="invalid-feedback"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-lg btn-info rounded-0">
                                        Submit
                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush

<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="../../demo1/dist/index.html">
            {{-- <img alt="Logo" src="{{ asset('backend/assets/media/logos/logo-1-dark.svg') }}" class="h-25px logo" /> --}}
            <img alt="Logo" src="https://i.ibb.co/dD1P3Wt/Demo-Logo.png" class="h-45px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">

                {{-- Start --}}

                <div class="menu-item">
                    <a class="menu-link {{ Route::current()->getName() == 'admin.dashboard' ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-house-chimney-window"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::current()->getName() == 'admin.dashboard' ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-house-chimney-window"></i>
                                
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion {{ Route::current()->getName() == 'admin.dashboard' ? 'menu-active-bg ' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Supply Chain</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Business</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Accounts Finance</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Site Contents</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">HR & Admin</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">CRM</span>
                            </a>
                        </div>


                    </div>
                </div> --}}
                @php
                    $supplychain = ['supplychain', 'admin.category.index', 'admin.brand.index', 'admin.attribute.index', 'admin.product-color.index', 'admin.product.index', 'admin.product.create', 'admin.product.edit'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $supplychain) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-truck"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Supply Chain</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $supplychain) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Logistics</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">

                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.brand.index' ? 'active' : '' }}"
                                        href="{{ route('admin.brand.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Brands</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.category.index' ? 'active' : '' }}"
                                        href="{{ route('admin.category.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.attribute.index' ? 'active' : '' }}"
                                        href="{{ route('admin.attribute.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Attributes</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.product-color.index' ? 'active' : '' }}"
                                        href="{{ route('admin.product-color.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Colors</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.product.index', 'admin.product.create', 'admin.product.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.product.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Products</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.product-sas.index', 'admin.product-sas.create', 'admin.product-sas.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.product-sas.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Products SAAS</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Purchase</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Orders Listing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Delivery</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo1/dist/apps/ecommerce/customers/listing.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Listing</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $business = ['admin.sales-year-target.index', 'admin.sales-team-target.index', 'admin.rfq.index', 'admin.deal.index'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $business) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-business-time"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Business</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.rfq.index', 'admin.deal.index']) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">RFQ Management</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                {{-- <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.brand.index' ? 'active' : '' }}"
                                        href="{{ route('admin.brand.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Pending</span>
                                        <span class="menu-badge"><span class="badge badge-danger">RFQ :
                                                3</span></span>
                                        <span class="menu-badge"><span class="badge badge-danger">Deals :
                                                3</span></span>
                                    </a>
                                </div> --}}
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.rfq.index' ? 'active' : '' }}"
                                        href="{{ route('admin.rfq.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Client RFQs</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.deal.index' ? 'active' : '' }}"
                                        href="{{ route('admin.deal.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Deals</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.sales-year-target.index', 'admin.sales-team-target.index']) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sales</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click"
                                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.sales-year-target.index', 'admin.sales-team-target.index']) ? 'here show' : '' }}">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Targets</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link {{ Route::current()->getName() == 'admin.sales-year-target.index' ? 'active' : '' }}"
                                                href="{{ route('admin.sales-year-target.index') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Year Target</span>
                                            </a>
                                            <a class="menu-link {{ Route::current()->getName() == 'admin.sales-team-target.index' ? 'active' : '' }}"
                                                href="{{ route('admin.sales-team-target.index') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Team Target</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $business) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Marketing</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                {{-- <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.brand.index' ? 'active' : '' }}"
                                        href="{{ route('admin.brand.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Home Page</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $accounts = ['admin.accounts-document.index', 'admin.vat-tax.index', 'admin.banking.index'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $accounts) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Accounts Finance</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.accounts-document.index']) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Accounts Documents</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.accounts-document.index' ? 'active' : '' }}"
                                        href="{{ route('admin.accounts-document.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Accounts Documents</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::current()->getName() == 'admin.vat-tax.index' ? 'active' : '' }}"
                                href="{{ route('admin.vat-tax.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Vat & Tax</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::current()->getName() == 'admin.banking.index' ? 'active' : '' }}"
                                href="{{ route('admin.banking.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Banking</span>
                            </a>
                        </div>
                    </div>

                </div>

                @php
                    $sitecontent = ['admin.brand-page.index', 'admin.solution-details.index', 'admin.homepage.index', 'admin.homepage.create', 'admin.homepage.edit', 'admin.aboutpage.index', 'admin.aboutpage.create', 'admin.aboutpage.edit', 'admin.industry.index', 'admin.news-trend.index', 'admin.news-trend.create', 'admin.news-trend.edit', 'admin.terms-and-policy.index', 'admin.row.index', 'admin.row.create', 'admin.row.edit', 'admin.company.index', 'admin.company.create', 'admin.company.edit', 'admin.solution-card.index', 'admin.solution-card.create', 'admin.solution-card.edit', 'admin.blog.index', 'admin.story.index', 'admin.tech-content.index', 'admin.blog.create', 'admin.story.create', 'admin.tech-content.create', 'admin.blog.edit', 'admin.story.edit', 'admin.tech-content.edit'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $sitecontent) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-file-invoice"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Site Contents</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $sitecontent) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pages</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">

                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.homepage.index', 'admin.homepage.create', 'admin.homepage.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.homepage.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Home Page</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.brand-page.index', 'admin.brand-page.create', 'admin.brand-page.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.brand-page.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Brand Page</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.aboutpage.index', 'admin.aboutpage.create', 'admin.aboutpage.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.aboutpage.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">About Us</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.solution-details.index', 'admin.solution-details.create', 'admin.solution-details.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.solution-details.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Solution Details</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.industry.index', 'admin.industry.create', 'admin.industry.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.industry.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Indusry</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.solution-card.index', 'admin.solution-card.create', 'admin.solution-card.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.solution-card.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Solution Cards</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.row.index', 'admin.row.create', 'admin.row.edit']) ? 'active' : '' }}"
                                        href="{{ route('admin.row.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Rows</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::current()->getName() == 'admin.news-trend.index' ? 'active' : '' }}"
                                href="{{ route('admin.news-trend.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">News & Trends</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::current()->getName() == 'admin.news-trend.index' ? 'active' : '' }}"
                                href="{{ route('admin.news-trend.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Features</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), [
                                'admin.blog.index',
                                'admin.story.index',
                                'admin.tech-content.index',
                                'admin.blog.create',
                                'admin.story.create',
                                'admin.tech-content.create',
                                'admin.blog.edit',
                                'admin.story.edit',
                                'admin.tech-content.edit',
                            ])
                                ? 'here show'
                                : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blogs, Techglossy & Client Story</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.blog.index' ? 'active' : '' }}"
                                        href="{{ route('admin.blog.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Blogs</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.story.index' ? 'active' : '' }}"
                                        href="{{ route('admin.story.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Client Story</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.tech-content.index' ? 'active' : '' }}"
                                        href="{{ route('admin.tech-content.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tech Contents</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::current()->getName() == 'admin.terms-and-policy.index' ? 'active' : '' }}"
                                href="{{ route('admin.terms-and-policy.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Terms & Policy</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ in_array(Route::current()->getName(), ['admin.company.index', 'admin.company.create', 'admin.company.edit']) ? 'active' : '' }}"
                                href="{{ route('admin.company.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Company</span>
                            </a>
                        </div>
                    </div>
                </div>



                @php
                    $hr_admin = ['admin.hr.dashboard', 'admin.employee-category.index', 'admin.employee-department.index', 'admin.employee.index'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $hr_admin) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-user-tie side_baricon"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">HR & Admin</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.hr.dashboard') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>

                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.employee-category.index', 'admin.employee-department.index', 'admin.employee.index']) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Employee</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.employee-category.index' ? 'active' : '' }}"
                                        href="{{ route('admin.employee-category.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Employee Category</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.employee-department.index' ? 'active' : '' }}"
                                        href="{{ route('admin.employee-department.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Employee Department</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.employee.index' ? 'active' : '' }}"
                                        href="{{ route('admin.employee.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Employee List</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $supplychain) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Leave</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">

                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.brand.index' ? 'active' : '' }}"
                                        href="{{ route('admin.brand.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Applications</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.category.index' ? 'active' : '' }}"
                                        href="{{ route('admin.category.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $supplychain) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Logistics</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">

                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.brand.index' ? 'active' : '' }}"
                                        href="{{ route('admin.brand.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.category.index' ? 'active' : '' }}"
                                        href="{{ route('admin.category.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.product-attribute.index' ? 'active' : '' }}"
                                        href="{{ route('admin.product-attribute.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Attributes</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.product-color.index' ? 'active' : '' }}"
                                        href="{{ route('admin.product-color.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product Colors</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Products</span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>



                <div class="menu-item">
                    <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Calendar</span>
                    </a>
                </div>

                @php
                    $setting = ['admin.web.setting', 'admin.css.index', 'admin.currency.index', 'admin.country.state.city.index'];
                @endphp
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ in_array(Route::current()->getName(), $setting) ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm001.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-solid fa-user-tie side_baricon"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Settings</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.web.setting') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Setting</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.css.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Website CSS Setting</span>
                            </a>
                        </div>

                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ in_array(Route::current()->getName(), ['admin.currency.index', 'admin.country.state.city.index']) ? 'here show' : '' }}">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Others Setting</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">

                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.country.state.city.index' ? 'active' : '' }}"
                                        href="{{ route('admin.country.state.city.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Country</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.currency.index' ? 'active' : '' }}"
                                        href="{{ route('admin.currency.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Currency</span>
                                    </a>
                                </div>
                                {{-- <div class="menu-item">
                                    <a class="menu-link {{ Route::current()->getName() == 'admin.category.index' ? 'active' : '' }}"
                                        href="{{ route('admin.category.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Categories</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-0">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Layout</span>
                    </div>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto p-3 px-5 bg-dark" id="kt_aside_footer">
        {{-- <a href="../../demo1/dist/documentation/getting-started.html" class="btn btn-custom btn-primary w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">Docs &amp; Components</span>
            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
            <span class="svg-icon btn-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.3"
                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                        fill="currentColor" />
                    <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                    <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                    <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </a> --}}
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4">
                <a href="">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M22 7H2V11H22V7Z" fill="currentColor"></path>
                            <path opacity="0.3"
                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!--end::Footer-->
</div>

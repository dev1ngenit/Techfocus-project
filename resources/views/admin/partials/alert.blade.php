@if (Session::has('success'))
    <div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
        {{-- Add your icon if needed --}}
        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="mb-2 light">{{ $message }}</h4>
            <!--end::Title-->

        </div>

        <!--begin::Close-->
        <button type="button"
            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
            data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span class="path2"></span></i>
        </button>
        <!--end::Close-->

    </div>
    {{Session::forget('success')}}
@endif
@if (Session::has('error'))
    @foreach (session('error')->all() as $message)
        <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
            {{-- Add your icon if needed --}}
            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                <!--begin::Title-->
                <h4 class="mb-2 light">{{ $message }}</h4>
                <!--end::Title-->
            </div>

            <!--begin::Close-->
            <button type="button"
                class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                data-bs-dismiss="alert">
                <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span
                        class="path2"></span></i>
            </button>
            <!--end::Close-->
        </div>
        @endforeach
        {{Session::forget('error')}}
@endif

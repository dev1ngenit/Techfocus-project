@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    @include('frontend.pages.client.partials.page_header')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="row bg-white p-2 align-items-center">
                    <div class="col-lg-10">
                        <h4 class="pt-1"><i class="fa-solid fa-bars me-2"></i> Summary of Requests</h4>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="main-color">09</span> Items
                            <select class="form-select rounded-0 ms-3" aria-label="Default select example">
                                <option selected>Last 30 Day</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-0 m-0">
                <div class="p-3 bg-white">
                    <table class="table p-0 m-0">
                        <thead class="" style="background-color: var(--main-color);">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
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

@push('scripts')
@endpush

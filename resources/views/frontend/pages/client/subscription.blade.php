@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    @include('frontend.pages.client.partials.page_header')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center pt-5">
                    <h2>Stay informed by subscribing to our newsletters!</h2>
                    <p class="pt-2">Product Newsletter</p>
                    <p>
                        Select the sectors that interest you to receive product news in
                        your inbox every 15 days.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="d-lg-flex d-sm-block justify-content-end">
                <a href="#" class="selectAllLink btn btn-outline-danger main-color rounded-0 mb-2"
                    id="selectAllLink">Select
                    All</a>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://img.directindustry.com/images_di/universe/subscription-form/1.jpg"
                        class="card-img-top rounded-0" alt="..." />
                    <div class="card-body">
                        <p class="card-text text-center">Detection - Measurement</p>
                    </div>
                    <!-- Hidden Checkbox under the image -->
                    <div class="form-check text-center mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://img.directindustry.com/images_di/universe/subscription-form/1.jpg"
                        class="card-img-top rounded-0" alt="..." />
                    <div class="card-body">
                        <p class="card-text text-center">Detection - Measurement</p>
                    </div>
                    <!-- Hidden Checkbox under the image -->
                    <div class="form-check text-center mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://img.directindustry.com/images_di/universe/subscription-form/1.jpg"
                        class="card-img-top rounded-0" alt="..." />
                    <div class="card-body">
                        <p class="card-text text-center">Detection - Measurement</p>
                    </div>
                    <!-- Hidden Checkbox under the image -->
                    <div class="form-check text-center mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://img.directindustry.com/images_di/universe/subscription-form/1.jpg"
                        class="card-img-top rounded-0" alt="..." />
                    <div class="card-body">
                        <p class="card-text text-center">Detection - Measurement</p>
                    </div>
                    <!-- Hidden Checkbox under the image -->
                    <div class="form-check text-center mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="pt-5 text-center">E-Magazine Newsletter</h3>
                <p class="mb-3 pt-1 text-center">Click on the image to receive the latest news in innovations and
                    interviews
                    with specialists in your field for free every month.</p>
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://img.directindustry.com/images_di/2ai/mail/Emag_DI-Mea-Left_September_2023_TUNISH-ok.jpg"
                        alt="">
                    <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
                </div>
            </div>
            <div class="col-lg-12">
                <h3 class="pt-5 text-center">Partner News</h3>
                <p class="mb-3 pt-1 text-center">Click on the image to receive the latest news in innovations and
                    interviews
                    with specialists in your field for free every month.</p>
                <div class="card rounded-0" onclick="toggleCardSelection(this)">
                    <img src="https://www.directindustry.com/images_di/universe/subscription-form/dedicated.jpg"
                        alt="">
                    <input class="form-check-input" type="checkbox" id="myCheck" style="display: none" />
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

@push('scripts')
    <script>
        function toggleCardSelection(card) {
            const checkbox = card.querySelector(".form-check-input");
            card.classList.toggle("highlight-card"); // Add or remove the highlight-card class
            checkbox.checked = !checkbox.checked; // Toggle the checkbox state
        }

        document
            .getElementById("selectAllLink")
            .addEventListener("click", function(e) {
                e.preventDefault(); // Prevent the default behavior of the anchor tag
                toggleSelectAllCards();
                return false; // Prevent any further default behavior
            });

        function toggleSelectAllCards() {
            const cards = document.querySelectorAll(".card");
            const selectAllLink = document.getElementById("selectAllLink");
            let allSelected = true;

            cards.forEach((card) => {
                const checkbox = card.querySelector(".form-check-input");
                if (!checkbox.checked) {
                    allSelected = false;
                    card.classList.add("highlight-card"); // Add the highlight-card class
                    checkbox.checked = true; // Check the checkbox
                } else {
                    card.classList.remove("highlight-card"); // Remove the highlight-card class
                    checkbox.checked = false; // Uncheck the checkbox
                }
            });

            // Toggle the "Select All" link text
            selectAllLink.textContent = allSelected ? "Select All" : "Deselect All";
        }
    </script>
@endpush

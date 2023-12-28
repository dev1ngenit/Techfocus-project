<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
    <style>
       .offcanvas.compare-canvas{
        max-height: 40vh !important;
       }
    </style>
</head>

<body>
    <!-- HEADER-BEGIN -->

    <header>
        @include('frontend.partials.header')
    </header>

    <!-- HEADER-END -->

    <!-- Main Content Start -->
    <main>
        @yield('content')
    </main>
    <!-- Main Content End -->
    <!-- Footer Start -->
    <footer>
        @include('frontend.partials.footer')
    </footer>
    <!-- Footer End -->
    <!-- Go To Top Button -->
    <a id="goTop"></a>
    <div id="modalOverlay">
        <div class="modalPopup">
            <div class="row headerBar align-items-center">
                <div class="col-2"></div>
                <div class="col-8 text-center">
                    <h1 class="modalh1">Attention</h1>
                </div>
                <div class="col-2 text-end">
                    <i class="fas fa-times text-danger" id="closeIcon"></i>
                </div>
            </div>
            <div class="modalContent">
                <h1 class="mb-3 modalh1">The Website is in Under Construction</h1>
                <h6 class="mb-5">We are sorry for the temporary inconvenience. If you face any problem, contact our
                    support team.</h6>
                <span class="skype-button bubble" data-color="#0078D4" data-contact-id="ngenit"></span>
                <span class="skype-chat" data-color-message="#0078D4"></span>
                <button class="buttonStyle" id="closeButton">Close</button>
            </div>
        </div>
    </div>
    {{-- Compare Product --}}
    <button class="btn btn-primary custom-sticky-button w-100 rounded-0" id="stickyButton" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
        <div class="d-flex align-items-center justify-content-center">
            <p class="m-0 p-0 me-2">1/10 products to compare</p>
            <p class="m-0 p-2" style="background-color: var(--secondary-color)">Compare</p>
        </div>
    </button>

    <div class="offcanvas offcanvas-bottom compare-canvas" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel"
        style="background-color: var(--secondary-color);">
        <div class="offcanvas-header">
            <div class="text-center">
                <p class="m-0 p-0 me-2 text-white">1/10 products to compare</p>
            </div>
            <button type="button" class="btn-close bg-white rounded-0" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="container p-0">
                <div class="compare-card slider">
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
                    </div>
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
                    </div>
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
                    </div>
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
                    </div>
                    <div class="slide"><img
                            src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Compare Product End --}}

<<<<<<< HEAD
    <span class="skype-button bubble" data-color="#0078D4" data-contact-id="ngenit"></span>
    <span class="skype-chat" data-color-message="#0078D4"></span>

    
=======


>>>>>>> d3c5bb0bf6ccb013fd86c9c79864aac54517bd43
    <!-- *********************************Script Start***********************************-->
    @include('frontend.partials.script')
    <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.compare-card').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: true,
                dots: true,
                pauseOnHover: false,
                prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
                nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <script>
        window.onload = function() {
            // Add a click event listener to the modalOverlay
            document.getElementById('modalOverlay').addEventListener('click', function(event) {
                // Check if the clicked element has the id 'modalOverlay'
                if (event.target.id === 'modalOverlay' || event.target.id === 'closeIcon' || event.target.id ===
                    'closeButton') {
                    closePopup();
                }
            });

            // Function to close the modal
            function closePopup() {
                document.getElementById('modalOverlay').style.display = 'none';
            }
        };
    </script>

    <!-- *********************************Script End***********************************-->
</body>

</html>

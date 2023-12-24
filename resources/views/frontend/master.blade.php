<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
    <style>
        #modalOverlay {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99999;
            height: 100%;
            width: 100%;
        }

        .modalPopup {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            width: 60%;
            padding: 0 0 30px;
            -webkit-box-shadow: 0 2px 10px 3px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 2px 10px 3px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 10px 3px rgba(0, 0, 0, .2);
            height: 50vh;
            text-align: center
        }

        .modalContent {
            padding: 3rem;
        }

        .headerBar {
            width: 100%;
            background: #edcb04 url(http://cognex.com/gfx/site/bg-global-header.png) repeat-x 0 0;
            margin: 0;
            text-align: center;
            padding: 1rem;
        }

        .headerBar img {
            margin: 1em .7em;
        }

        .modalh1 {
            margin-bottom: 0;
            font-size: 26px;
            line-height: 1;
            font-weight: 700;
            text-transform: capitalize;
        }

        #closeIcon {
            font-size: 1.7em;
        }

        
        .buttonStyle {
            border: transparent;
            border-radius: 0;
            background: #6d6d6d;
            color: #eee !important;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
            padding: 6px 25px;
            text-decoration: none;
            background: -moz-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #6d6d6d), color-stop(100%, #1e1e1e));
            background: -webkit-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
            background: -o-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
            background: -ms-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
            background: linear-gradient(to bottom, #6d6d6d 0%, #1e1e1e 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6d6d6d', endColorstr='#1e1e1e', GradientType=0);
            /*	-webkit-box-shadow: 0 2px 4px 0 #999;
  box-shadow: 0 2px 4px 0 #999; */
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }

        .buttonStyle:hover {
            background: #1e1e1e;
            color: #fff;
            background: -moz-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e1e1e), color-stop(100%, #6d6d6d), color-stop(100%, #6d6d6d));
            background: -webkit-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            background: -o-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            background: -ms-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            background: linear-gradient(to bottom, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e1e1e', endColorstr='#6d6d6d', GradientType=0);
        }

        .returnToProfile {
            text-align: center;
            margin: 3em;
        }

        .returnToProfile a,
        .returnToProfile a:visited {
            color: #ddd;
        }

        .returnToProfile a:hover {
            color: #fff;
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
    {{-- <div id="modalOverlay">
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
                <button class="buttonStyle" id="closeButton">Close</button>
            </div>
        </div>
    </div> --}}

    <!-- *********************************Script Start***********************************-->
    @include('frontend.partials.script')
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

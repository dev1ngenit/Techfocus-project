<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')

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

    <!-- *********************************Script Start***********************************-->
    @include('frontend.partials.script')
    <!-- *********************************Script End***********************************-->
</body>

</html>

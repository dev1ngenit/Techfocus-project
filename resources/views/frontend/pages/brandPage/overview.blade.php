@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var accordions = document.querySelectorAll('.accordion');

            accordions.forEach(function(accordion) {
                accordion.addEventListener('show.bs.collapse', function(event) {
                    var currentlyOpen = accordion.querySelector('.show');
                    if (currentlyOpen && currentlyOpen !== event.target) {
                        bootstrap.Collapse.getInstance(currentlyOpen).hide();
                    }
                });
            });
        });
    </script>
@endpush

 {{-- @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <ul>
            @foreach(Session::get('success') as $success)
                <li>{{ $success }}</li>
            @endforeach
        </ul>
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach(Session::get('error') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{ Session::forget(['success','error']) }} --}}

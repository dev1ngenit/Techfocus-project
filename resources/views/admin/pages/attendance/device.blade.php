@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.machine.devicesetip') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-9">
                            <input type="text" name="deviceip" class="form-control" required />
                        </div>
                        <div class="col-3">
                            <button class="btn btn-success" style="width: 100%">Set IP</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush

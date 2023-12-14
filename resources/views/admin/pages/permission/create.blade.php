@extends('admin.master')
@section('content')
    <form action="{{ route('admin.permission.store') }}" method="POST">
        @csrf <!-- CSRF token for Laravel -->

        <div>
            <label for="name">Permission Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <button type="submit">Create Permission</button>
    </form>
@endsection

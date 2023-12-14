@extends('admin.master')

@section('content')
    <h2>Assign Roles to {{ $admin->name }}</h2>

    <form action="{{ route('admin.user-roles.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Method spoofing for PUT request --}}

        @foreach ($roles as $role)
            <div>
                <input type="checkbox" id="role_{{ $role->id }}" name="roles[]" value="{{ $role->id }}"
                    {{ $admin->roles->contains($role->id) ? 'checked' : '' }}>
                <label for="role_{{ $role->id }}">{{ $role->name }}</label>
            </div>
        @endforeach

        <button type="submit">Update Roles</button>
    </form>
@endsection

@extends('admin.master')

@section('content')
    <h2>Remove Permissions from {{ $user->name }}</h2>

    @foreach ($permissions as $permission)
        <div>
            <span>{{ $permission->name }}</span>
            <form action="{{ route('admin.user-permission.destroy', ['user' => $user->id, 'permission' => $permission->id]) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Remove</button>
            </form>
        </div>
    @endforeach
@endsection

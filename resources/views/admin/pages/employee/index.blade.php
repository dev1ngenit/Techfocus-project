@extends('admin.master')

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @if ($admins)
                    @foreach ($admins as $admin)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <a href="{{ route('admin.user-permission.create', $admin->id) }}">Assign Permissions</a>
                                <a href="{{ route('admin.user-permission.edit', $admin->id) }}">Edit Permissions</a>

                                @foreach ($admin->permissions as $permission)
                                    <div>
                                        {{ $permission->name }}
                                        <form
                                            action="{{ route('admin.permission.destroy', ['user' => $admin->id, 'permission' => $permission->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Remove</button>
                                        </form>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

@extends('admin.master')
@section('content')
    <!-- roles/index.blade.php -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('admin.role.edit', $role->id) }}">Edit</a>
                        <a href="{{ route('admin.role-permissions.show', $role->id) }}">Permissions</a>
                        <form action="{{ route('admin.role.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

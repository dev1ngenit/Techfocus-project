@extends('admin.master')

@section('content')
    <div class="container mt-5">
        <h2>Admins and Their Roles</h2>

        <table>
            <thead>
                <tr>
                    <th>Admin</th>
                    <th>Roles</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->name }}</td>
                        <td>
                            @foreach ($admin->roles as $role)
                                <span>{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.user-roles.edit', $admin->id) }}">Edit Roles</a>
                            @foreach ($admin->roles as $role)
                                <div>
                                    {{-- {{ $role->name }} --}}
                                    <form
                                        action="{{ route('admin.user-roles.destroy', ['user' => $admin->id, 'role' => $role->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Remove Role</button>
                                    </form>
                                </div>
                            @endforeach

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

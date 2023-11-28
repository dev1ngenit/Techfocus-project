@extends('admin.master')

@section('content')
    <div>
        <h2>Manage Role Permissions</h2>
        <!-- Form to Assign Permission to Role -->
        <form action="{{ route('admin.role-permissions.assign', $role->id) }}" method="POST">
            @csrf
            <div>
                <label for="permission">Assign Permission:</label>
                <select name="permission_id" id="permission">
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Assign Permission</button>
        </form>

        <!-- List Current Permissions with Remove Option -->
        <h3>Current Permissions</h3>
        <ul>
            @foreach ($role->permissions as $permission)
                <li>
                    {{ $permission->name }}
                    <form
                        action="{{ route('admin.role-permissions.remove', ['role' => $role->id, 'permission' => $permission->id]) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@push('scripts')
@endpush

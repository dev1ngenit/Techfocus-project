@extends('admin.master')

@section('content')
    <form action="{{ route('admin.role.store') }}" method="POST">
        @csrf
        <div>
            <label for="role_name">Role Name:</label>
            <input type="text" id="role_name" name="role_name" required>
        </div>

        <div>
            <label>Permissions:</label>
            <div>
                <input type="checkbox" id="selectAll"> Select All Permissions
            </div>
            @foreach ($permissions as $permission)
                <div>
                    <input type="checkbox" class="permissionCheckbox" id="permission_{{ $permission->id }}"
                        name="permissions[]" value="{{ $permission->id }}">
                    <label for="permission_{{ $permission->id }}">{{ $permission->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit">Create Role</button>
    </form>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#selectAll').click(function() {
                $('.permissionCheckbox').prop('checked', this.checked);
            });

            $('.permissionCheckbox').change(function() {
                if ($('.permissionCheckbox:checked').length == $('.permissionCheckbox').length) {
                    $('#selectAll').prop('checked', true);
                } else {
                    $('#selectAll').prop('checked', false);
                }
            });
        });
    </script>
@endpush
{{-- https://chat.openai.com/c/68b297bb-a6ab-4abb-9c29-aaafb6bcfee7 --}}

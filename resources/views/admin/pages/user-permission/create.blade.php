@extends('admin.master')

@section('content')
    <h2>Assign Permissions to {{ $user->name }}</h2>

    <form action="{{ route('admin.user-permission.store', $user->id) }}" method="POST">
        @csrf
        <div>
            <input type="checkbox" id="selectAll"> Select All Permissions
        </div>
        @foreach ($permissions as $permission)
            <div>
                <!-- Hidden field for unchecked state -->
                <input type="hidden" name="permissions[{{ $permission->id }}]" value="0">
                <!-- Actual checkbox -->
                <input type="checkbox" class="permissionCheckbox" id="permission_{{ $permission->id }}"
                    name="permissions[{{ $permission->id }}]" value="1"
                    {{ $user->permissions->contains('id', $permission->id) ? 'checked' : '' }}>
                <label for="permission_{{ $permission->id }}">{{ $permission->name }}</label>
            </div>
        @endforeach


        <button type="submit">Assign Permissions</button>
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

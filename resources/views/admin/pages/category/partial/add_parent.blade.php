{{-- @if ($type == 'add') --}}
    <option value="{{ $dropdown_category->id }}">
        {{ $indent }}{{ $dropdown_category->name }}
    </option>

    @foreach ($dropdown_category->children as $child)
        @include('admin.pages.category.partial.add_parent', [
            'category' => $child,
            'indent' => $indent . '-',
            'type' => 'add',
        ])
    @endforeach
{{-- @else
    <option value="{{ $dropdown_category->id }}" @selected($dropdown_category->id == $category->parent_id)>
        {{ $indent }}{{ $dropdown_category->name }}
    </option>

    @foreach ($dropdown_category->children as $child)
        @include('admin.pages.category.partial.add_parent', [
            'category' => $child,
            'indent' => $indent . '-',
            'type' => 'edit',
        ])
    @endforeach
@endif --}}

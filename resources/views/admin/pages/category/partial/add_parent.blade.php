


    <option value="{{ $category->id }}">
        @php echo str_repeat('-', $level) @endphp {{ $category->name }}
    </option>
    
    @if ($category->children && count($category->children))
        @foreach ($category->children as $child)
            @include('admin.pages.category.partial.add_parent', ['category' => $child, 'level' => $level + 1])
        @endforeach
    @endif



{{-- @foreach ($dropdown_category->children as $child)
    @include('admin.pages.category.partial.add_parent', [
        'dropdown_category_children' => $child,
        'indent' => $indent . '-',
        'type' => $type,
    ])
@endforeach --}}





{{-- @if ($type == 'add') --}}
{{-- <option value="{{ $dropdown_category_children->id }}">
    {{ $indent }}{{ $dropdown_category_children->name }}
</option>

@foreach ($dropdown_category_children->children as $child)
    @include('admin.pages.category.partial.add_parent', [
        'dropdown_category_children' => $child,
        'indent' => $indent . '-',
        'type' => $type,
    ])
@endforeach --}}

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

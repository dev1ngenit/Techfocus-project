<option value="{{ $category->id }}">
    @php echo str_repeat('-', $level) @endphp {{ $category->name }}
</option>

@if ($category->children && count($category->children))
    @foreach ($category->children as $child)
        @include('admin.pages.category.partial.add_parent', ['category' => $child, 'level' => $level + 1])
    @endforeach
@endif

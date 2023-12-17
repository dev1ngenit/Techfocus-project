<option value="{{ $category->id }}"  @selected($category->id == $category->parent_id)>
    {{ str_repeat('-', $level) }} {{ $category->name }}
</option>

@if ($category->children && count($category->children))
    @foreach ($category->children as $child)
        @include('admin.pages.category.partial.edit_parent', ['category' => $child, 'level' => $level + 1])
    @endforeach
@endif
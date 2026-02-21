<h2>Categories</h2>
<a href="{{ route('categories.create') }}">Add Category</a>

@foreach($categories as $category)
    <p>{{ $category->name }}</p>
@endforeach
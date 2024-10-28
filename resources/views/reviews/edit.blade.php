@extends('layouts.app')

@section('title', 'Edit Review')

@section('content')
    <h1>Edit Review</h1>
    <form action="{{ route('reviews.update', $review) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $review->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" required>{{ $review->content }}</textarea>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" name="rating" min="1" max="5" value="{{ $review->rating }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
@extends('layouts.app')

@section('title', 'Create Review')

@section('content')
    <h1>Create Review</h1>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" required></textarea>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" name="rating" min="1" max="5" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
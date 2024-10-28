@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
    <h1>Reviews</h1>
    <a href="{{ route('reviews.create') }}">Create New Review</a>
    <ul>
        @foreach($reviews as $review)
            <li>
                <strong>{{ $review->category->name }}</strong>: {{ $review->content }} (Rating: {{ $review->rating }})
                - <a href="{{ route('reviews.edit', $review) }}">Edit</a> 
                - <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
@extends('layouts.app')

@section('title', 'Review Details')

@section('content')
    <h1>Review Details</h1>
    <h2>Category: {{ $review->category->name }}</h2>
    <p><strong>Content:</strong> {{ $review->content }}</p>
    <p><strong>Rating:</strong> {{ $review->rating }}</p>
    <a href="{{ route('reviews.index') }}">Back to Reviews</a>
@endsection
@extends('layouts.app')

@section('title', 'Edit Tag')

@section('content')
    <h1>Edit Tag</h1>
    <form action="{{ route('tags.update', $tag) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $tag->name }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
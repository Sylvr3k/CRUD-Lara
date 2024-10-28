@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
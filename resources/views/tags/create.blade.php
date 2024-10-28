@extends('layouts.app')

@section('title', 'Create Tag')

@section('content')
    <h1>Create Tag</h1>
    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
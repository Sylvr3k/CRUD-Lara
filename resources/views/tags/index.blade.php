@extends('layouts.app')

@section('title', 'Tags')

@section('content')
    <h1>Tags</h1>
    <a href="{{ route('tags.create') }}">Create New Tag</a>
    <ul>
        @foreach($tags as $tag)
            <li>
                {{ $tag->name }} 
                - <a href="{{ route('tags.edit', $tag) }}">Edit</a> 
                - <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
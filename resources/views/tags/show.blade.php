@extends('layouts.app')

@section('title', 'Tag Details')

@section('content')
    <h1>{{ $tag->name }}</h1>
    <a href="{{ route('tags.index') }}">Back to Tags</a>
@endsection
@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>
    <a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection
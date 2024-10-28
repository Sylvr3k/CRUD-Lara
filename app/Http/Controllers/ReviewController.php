<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Category;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('category')->get();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('reviews.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        Review::create($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        $categories = Category::all();
        return view('reviews.edit', compact('review', 'categories'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        $review->update($request->all());
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
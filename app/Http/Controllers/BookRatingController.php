<?php

namespace App\Http\Controllers;

use App\Models\BookRating;
use Illuminate\Http\Request;

class BookRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BookRatings = BookRating::all();
        return view('Dashboard.BookRatings.AllBookRatings', compact('BookRatings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.BookRatings.AddBookRatings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_rating_name' => 'required|unique:book_ratings|max:255',
            'book_rating_description' => 'required',
        ], [
            'book_rating_name.required' => 'يرجى ادخال اسم تصنيف الكتاب',
        ]);
        BookRating::create([
            'book_rating_name' => $request->book_rating_name,
            'book_rating_description' => $request->book_rating_description,
        ]);
        $BookRatings = BookRating::all();
        return redirect('/book_ratings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function show(BookRating $bookRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookRating = BookRating::find($id);
        return view('Dashboard.BookRatings.EditBookRatings', compact('bookRating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookRating $bookRating)
    {
        $publishingHouse = BookRating::findOrFail($request->id);

        $publishingHouse->update([
            'book_rating_name' => $request->book_rating_name,
            'book_rating_description' => $request->book_rating_description,
        ]);
        return redirect('book_ratings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bookRating = BookRating::findOrFail($request->id);
        $bookRating->delete();
        return redirect('book_ratings');
    }
}

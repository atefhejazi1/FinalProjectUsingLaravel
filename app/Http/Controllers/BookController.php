<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\BookRating;
use App\Models\PublishingHouse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('Dashboard.Books.AllBook', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $publishingHouses = PublishingHouse::all();
        $bookRatings = BookRating::all();
        return view('Dashboard.Books.AddBook', compact('authors', 'publishingHouses', 'bookRatings'));
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
            'book_name' => 'required|unique:books|max:255',
            'author_id' => 'required',
            'publishing_house_id' => 'required',
            'book_rating_id' => 'required',
            'issue_number' => 'required',
        ], [
            'book_name.required' => 'يرجى ادخال اسم الكتاب',
        ]);
        Book::create([
            'book_name' => $request->book_name,
            'author_id' => $request->author_id,
            'publishing_house_id' => $request->publishing_house_id,
            'book_rating_id' => $request->book_rating_id,
            'issue_number' => $request->issue_number,
        ]);
        $authors = Book::all();
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);
        $authors = Author::all();
        $publishingHouses = PublishingHouse::all();
        $bookRatings = BookRating::all();
        return view('Dashboard.Books.ShowBook', compact('books', 'authors', 'publishingHouses', 'bookRatings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        $authors = Author::all();
        $publishingHouses = PublishingHouse::all();
        $bookRatings = BookRating::all();
        return view('Dashboard.Books.EditBook', compact('books', 'authors', 'publishingHouses', 'bookRatings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book = Book::findOrFail($request->id);

        $book->update([
            'book_name' => $request->book_name,
            'author_id ' => $request->author_id,
            'publishing_house_id ' => $request->publishing_house_id,
            'book_rating_id ' => $request->book_rating_id,
            'issue_number' => $request->issue_number,
        ]);

        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $book->delete();
        return redirect('book');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $books = Book::where('book_name', 'LIKE', '%' . $search_text . '%')->get();
        return view('Dashboard.Books.SearchBook', compact('books'));
    }

    public function searchHomePage(Request $request)
    {
        $search_text = $_GET['query'];
        $books = Book::where('book_name', 'LIKE', '%' . $search_text . '%')->get();
        return view('homePage.searchBookHomePage', compact('books'));
    }
}

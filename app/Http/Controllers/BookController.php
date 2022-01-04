<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){

        $books = Book::all();

        return view('books', ['books' => $books]);
    }

    public function search(){

        $books = Book::where(strtolower('book_name'),strtolower(request('bookSearch')))->orderBy('book_name')->get();

        return view('search', ['books' => $books]);
    }
    
}

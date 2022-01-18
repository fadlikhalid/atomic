<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){

        $books = Book::all();

        return view('welcome', ['books' => $books]);

    }

    public function index2(){

        $books = Book::all();

        return view('admin.managebook', ['books' => $books]);
    }

    public function edit($id){

        $book = Book::find($id);

        return view('admin.editbook', ['book' => $book]);

    }

    public function search(){

        $books = Book::where(strtolower('book_name'),strtolower(request('bookSearch')))->orderBy('book_name')->get();

        return view('search', ['books' => $books]);
    }
    

    public function save($id){

        $book = Book::findOrFail($id);

        $book->book_name= request('bname');
        $book->author= request('bauthor');
        $book->book_cover= request('bcover');
        $book->book_file= request('bfile');
        $book->genre= request('bgenre');
        $book->published= request('bpdate');
        $book->total_page= request('btpage');
        $book->book_desc= request('bdesc');

        $book->save();

        return redirect('{{route(\'admin.book.manage\')}}');
    }

    public function new(){

        $book = new Book();

        $book->book_name= request('bname');
        $book->author= request('bauthor');
        $book->book_cover= request('bcover');
        $book->book_file= request('bfile');
        $book->genre= request('bgenre');
        $book->published= request('bpdate');
        $book->total_page= request('btpage');
        $book->book_desc= request('bdesc');

        $book->save();

        return redirect('{{route(\'admin.book.manage\')}}');
    }

}

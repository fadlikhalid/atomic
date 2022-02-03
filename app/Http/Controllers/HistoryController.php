<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function display($id)
    {
        $hist = History::where('book_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first();

        if ($hist == NULL) {
            $history = new History();

            $history->book_id = $id;
            $history->user_id = Auth::user()->id;
            $history->save();
        } else{
            $hist->touch();
        }

        $book = Book::findOrFail($id);

        $file = $book->book_file;

        $path = public_path('book/file' . '/' . $file);

        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $file . '"'
        ];

        return response()->file($path, $header);
    }

    public function view()
    {

        $ui = Auth::user()->id;

        $history = History::join('books', 'history.book_id', '=', 'books.book_id')->where('history.user_id', $ui)->orderBy('updated_at', 'desc')->get(['history.*', 'books.book_cover as cover', 'books.book_name as name']);

        return view('history', ['history' => $history]);
    }
}

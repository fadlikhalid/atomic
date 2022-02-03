<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Credit_Card;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

        
    public function postVerify(){
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin.route');
        }else{
            return redirect()->route('book.index');
        }
    }

    public function count(){
        // $data = DB::table('Book')->count();
        $databooks = Book::all();
        $countbooks = $databooks->count(); 

        $datauser = User::all();
        $countuser = $datauser->count();
        

        $datacredit = Credit_Card::all();
        $countcredit = $datacredit->count(); 
        // return view('dashboard', compact('data'));
        // return View::make('dashboard')->with('data', $data);

        $latestbook = Book::latest()->first();
        $latestuser = User::latest()->first();
        

        return view('/admin/dashboard',[
            'countbooks' => $countbooks,
            'countuser' => $countuser,
            'countcredit' => $countcredit,
            'latestbook' => $latestbook,
            'latestuser' => $latestuser,
        ]);
    }
}

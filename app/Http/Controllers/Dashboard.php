<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Credit_Card;
use App\Models\User;
use Illuminate\Support\Facades\View;

class Dashboard extends Controller
{
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

    // public function countuser(){
    //     $data = User::all()
    //     $count1 = $data->count();
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // pertemuenak ke 43 memampilkan data
        // auth() artinya user yang sedang login itu siapa
        // user() artinya ambil data user
        // borrow artinya ambil relasinya
        $books = auth()->user()->borrow; // mengambil data buku apa saja yang sudah di pinjam pleh user
        // dd($books);


        return view('home',[
            'books' => $books,
        ]);
    }
}

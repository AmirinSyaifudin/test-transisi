<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\User;

class ReportController extends Controller
{
    //
    public function topBook()
    {
        //$books = Book::paginate(10);
        // borrowed di ambil dari model book method fungsi borrowed
        $books = Book::withCount('borrowed')
                      ->orderBy('borrowed_count','desc')
                      ->paginate(env('PAGINATION_ADMIN'));

        return view('admin.report.top-book',[
            'books' => $books,
        ]);
    }

    public function topUser()
    {
        // memanggil relasi di model User.php
        $users = User::withcount('borrow')
                      ->orderBy('borrow_count', 'desc')
                      ->paginate(10);

        return view('admin.report.top-user',[
            'users' => $users,
        ]);
    }

}

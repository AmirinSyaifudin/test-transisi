<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book; // import
use App\BorrowHistory;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::paginate(10);

        return view('frontend.book.index',[
            'title' => 'Beranda Perpustakaan',
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        // dd($book); // untuk mengecek data sudah masuk apa belum
        return view('frontend.book.show', [
            'title' => $book->title,
            'book' => $book,
            ]);

    }

    // public function borrow(Book $book)
    // {
    //     // dd($book);
    //     // dd(auth()->id());
    //      BorrowHistory::create([
    //         'user_id' => auth()->id(),
    //         'book_id' => $book->id
    //      ]);

    //      return 'Ok';
    // }


    public function borrow(Book $book)
    {
        $user = auth()->user(); // mengambil data user yang login, dengan mengambil id
        //SATU USER HANYA BOLEH MEMINJAM SATU BUKU,( SATU JUDUL BUKU)
        if($user->borrow()->isStillBorrow($book->id)) {

            return redirect()->back()->with('toast','Kamu Sudah meminjam buku dengan judul : ' . $book->title);
        }

        // menggunakan relasinya
        $user->borrow()->attach($book); // untuk peminjaman buku

        // mengurangi jumlah QTY apabila buku di pinjam
        $book->decrement('qty');

       //  return redirect()->back(); // input data peminjaman buku dan lihat di databases borrow_history, data akan terinput
        return redirect()->back()->with('toast','Sukses meminjam buku oyeachhh...');
    }


    // public function borrow(Book $book)
    // {
    //    $user = auth()->user();

    //    if ($user->borrow()->where('books.id', $book->id)->count() > 0) {
    //        return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
    //    }

    //    $user->borrow()->attach($book);
    //    $book->decrement('qty');

    //    return redirect()->back()->with('toast', 'Berhasil meminjam buku');
    // }


}

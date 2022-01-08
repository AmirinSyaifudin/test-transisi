<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BorrowHistory;
use carbon\Carbon;

class BorrowController extends Controller
{
    // membuat method
    public function index()
    {
        return view('admin.borrow.index',[
            'title' => 'Daftar Buku yang Di Pinjam',
        ]);
    }

    // 47
    public function returnBook(Request $request, BorrowHistory $borrowHistory)
    {
        $borrowHistory->update([
            'returned_at' => Carbon::now(), // untuk =pengembalikan buku
            'admin_id' => auth()->id(), // untuk user id yang sdang login
        ]);

        // per 51 , mengambil data buku kkemudian ke relasi buku dan menambahakn method increment artinya tambah
        $borrowHistory->book()->increment('qty');

        return redirect()->back()->withSuccess('Buku Di Kembalikan');
    }
}

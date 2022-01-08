<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author; 
use App\Book; 
use App\BorrowHistory;
use App\Company;
use App\Employe;

class DataController extends Controller
{
    
    public function company()
    {
         $company = Company::orderBy('nama','ASC')->get();
       //  return datatables()->of(Company::query())->toJson();
        return datatables()->of($company)
       
        ->editColumn('cover', function (Company $model) {
            return '<img src="' . $model->getCover() . '"height="150px">'; 
        })
        ->addColumn('action', 'admin.company.action')
        ->addIndexColumn()
        ->rawColumns(['cover','action'])
        ->toJson();
    }


    public function employe()
    {
        $employe = Employe::orderBy('nama','ASC');
        // return datatables()->of(Employe::query())->toJson();
        return datatables()->of($employe)
        ->addColumn('company', function(Employe $model) {
            return $model->company->nama;
        })
        ->addColumn('action','admin.employe.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    // author / penulis
    public function authors()
    {
        $author = Author::orderBy('name', 'ASC');
        //return datatables()->of(Author::query())->toJson(); // ASC
        return datatables()->of($author)
            ->addColumn('action', 'admin.author.action') // mengarah ke action.blade.php
            ->addIndexColumn() // tambah colom
            ->rawColumns(['action']) // di confert menjasdi format html
            ->toJson(); // DESC
    }


    // book buku
    public function books()
    {
          //$books = Book::orderBy('title', 'ASC');
          // per50 -> MENGATASI MASALAH QUERY SETELAH DI LOOPING DENGAN RELASI BANYAK QUERY
          $books = Book::with('author')->orderBy('title', 'ASC')->get();

          $books->load('author');

            return datatables()->of($books)
                ->addColumn('author', function (Book $model) {
                    return $model->author->name; // untuk memanggil relasi dan mengubah tampilan id angga menjadi nama author
                })
                ->editColumn('cover', function (Book $model) {
                    return '<img src="' . $model->getCover() . '"height="150px">'; // untuk merubah cover menjadi format img
                })
                ->addColumn('action', 'admin.book.action') // mengarah ke action.blade.php
                ->addIndexColumn() // tambah colom
                ->rawColumns(['cover', 'action']) // di confert menjasdi format html
                ->toJson(); // DESC
    }


    public function borrows()
    {
        //    $borrows = BorrowHistory::latest();
         // 48 mengubah code dan di tambahkan isBorrowed, untuk menampilkan buku yang di pinjam saja
       //$borrows = BorrowHistory::isBorrowed()->latest();
       $borrows = BorrowHistory::isBorrowed()->latest()->get();

       $borrows->load('user','book');

        return datatables()->of($borrows)
            ->addColumn('user', function (BorrowHistory $model) {
                return $model->user->name; // untuk memanggil relasi dan mengubah tampilan id angka menjadi nama author
            })
            ->addColumn('book_title', function (BorrowHistory $model) {
                return $model->book->title; // untuk memanggil relasi dan mengubah tampilan id angga menjadi nama author
            })
            ->addColumn('action','admin.borrow.action') // mengarah ke action.blade.php
            ->addIndexColumn() // tambah colom
            ->rawColumns(['action']) // di confert menjasdi format html
            ->toJson(); // DESC
    }
}

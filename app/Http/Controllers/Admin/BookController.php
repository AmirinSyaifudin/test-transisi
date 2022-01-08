<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use Illuminate\Support\Facades\Storage; // import

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.book.index', [
            'title' => 'Data Buku',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.book.create', [
            'title' => 'Tambah Buku',
            'authors' => Author::orderBy('name', 'ASC')->get(), // memanggil dara relasi author dengan formai nama
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image', // dalam bentuk file format image
            'qty' => 'required|numeric' // format jumlah angga
        ]);

        // buat tambah create buku
        $cover = null; // validati cover biar ketika tidak ada cover yang di input , akan tampil cover default

        // membuat fungsi untuk mengecek gambar
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }

        Book::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'author_id'     => $request->author_id,
            'cover'         => $cover,
            'qty'           => $request->qty,
        ]);

        // jika selesai di create arahkan ke redirect
        return redirect()->route('admin.book.index')
        ->withSuccess('Data Buku berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('admin.book.edit', [
            'title' => 'Ubah data buku',
            'book' => $book,
            'authors' => Author::orderBy('name', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image', // dalam bentuk file format image
            'qty' => 'required|numeric' // format jumlah angga
        ]);

        // buat tambah create buku
        $cover = $book->cover; // akan tampil ini jika tidak upload file cover

        // jika upload file akan eksekusi kode di bawah
        if ($request->hasFile('cover')) {
            Storage::delete($book->cover);  // menghapus cover yang lama dan di ganti dengan cove yang baru
            $cover = $request->file('cover')->store('assets/covers');
        }

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);

        // jika selesai di create arahkan ke redirect
        return redirect()->route('admin.book.index')->withSuccess('Data Buku berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();

        return redirect()->route('admin.book.index')->withDanger('Data Buku berhasil di Delete');


    }
}

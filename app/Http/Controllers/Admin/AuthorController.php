<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author; // add model

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.author.index',[
            'title' => 'Data Penulis'
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
        return view('admin.author.create',[
            'title' => 'Tambah Data Penulis'
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
        //pert ke 23
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);
        // memanggil model
        Author::create($request->only('name'));

        // return redirect()->route('admin.author.index');
        return redirect()->route('admin.author.index')
                ->with('success','Data Penulis berhasil di tambahkan');

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
    public function edit(Author $author)
    {

        // dd($author);
        return view('admin.author.edit', [
            'title' => 'Edit Data Penulis',
            'author' => $author,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $author->update($request->only('name'));

        //return redirect()->route('admin.author.index');
        return redirect()->route('admin.author.index')
                ->with('info','Data Penulis berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author) // route model bailding ,
    {
        //
        $author->delete();

        return redirect()->route('admin.author.index')
                ->with('danger','Data Penulis berhasil di Delete');
    }



}

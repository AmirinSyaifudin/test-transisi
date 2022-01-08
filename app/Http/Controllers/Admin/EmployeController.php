<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Employe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.employe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('admin.employe.create',[
            'nama'      => $request->nama,
            'email'     => $request->email,
            'company'   => Company::orderBy('nama','ASC')->get(),
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
        Employe::create([
            'nama'             => $request->nama,
            'email'            => $request->email,
            'company_id'       => $request->company_id,
        ]);

        return redirect()->route('admin.employe.index')
        ->withSuccess('Data Employee sudah berhasil di Tambahkan !!! ');
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
    public function edit(Employe $employe)
    {
        //
        return view('admin.employe.edit',[
            'employe'   => $employe,   
            'company'   => Company::orderBy('nama', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
        $employe->update([
            'nama'              => $request->nama,
            'email'             => $request->email,
            'company_id'        => $request->company_id,
        ]);

        return redirect()->route('admin.employe.index')
        ->withSuccess('Data Employe Berhasil di Update !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
        $employe->delete();

        return redirect()->route('admin.employe.index')
        ->withDanger('Data EMploye Berhasil di Hapus !!! ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.company.create');
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
        $cover = null;        
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }
    
        Company::create([
                'nama'     => $request->nama,
                'email'    => $request->email,
                'cover'    => $cover,
        ]);

        return redirect()->route('admin.company.index')
        ->withSuccess('Data Company berhasil di simpan');
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
    public function edit(Company $company)
    {
        //
        return view('admin.company.edit',['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //

        $cover = $company->cover;
        if ($request->hasFile('cover')) {
            storage::delete($company->cover);
            $cover = $request->file('cover')->store('assets/covers');
        }

        $company->update([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'cover'     => $cover,
        ]);


        return redirect()->route('admin.company.index')
        ->withSuccess('Data Berhaisl DI update !!! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();

        return redirect()->route('admin.company.index')
        ->withDanger('Data Company Berhasil di hapus !! ');
    }
}

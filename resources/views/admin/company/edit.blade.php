@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">EDIT DATA COMPANY</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.company.update', $company )}}" method="POST">
                @csrf
                @method("PUT")

                    <div class="form-group @error('nama') has-error @enderror">
                         <label for="">NAMA</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama "
                            value="{{ old('nama') ?? $company->nama }}">
                            @error('nama')
                                <span class="help-block">{{ $message}}</span>
                            @enderror
                    </div>

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="">EMAIL</label>
                           <input type="text" name="email" class="form-control" placeholder="Masukkan email Email"
                           value="{{ old('email') ?? $company->email }}">
                           @error('email')
                               <span class="help-block">{{ $message}}</span>
                           @enderror
                   </div>

                   <div class="form-group @error('cover') has-error @enderror">
                        <label for="">COVER</label>
                        <input type="file" name="cover" class="form-control">
                        @error('cover')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                 

                    <div class="form-group">
                        <input type="submit" value="Ubah" class ="btn btn-primary">
                    </div>
                </form>
            </div>
    </div>
@endsection
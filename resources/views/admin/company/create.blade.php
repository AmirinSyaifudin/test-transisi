@extends('admin.templates.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">ADDA COMPANY</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.company.store') }}" method="POST">
                @csrf

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA</label>
                        <!-- //value="{{ old('nama')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}"> 
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="">EMAIL</label>
                        <!-- //value="{{ old('email')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email " value="{{ old('email') }}"> 
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
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                    </div>
                </form>
            </div>
    </div>
@endsection
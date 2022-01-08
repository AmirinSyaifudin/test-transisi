<!-- validasi artinya jika tidak tervjadi error maka akan menampilkan nilai di databases, dan jika error akan berganti sesuai inputan name 
value="{{ old('name') ?? $author->name }}" -->
@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">EDIT DATA AUTHOR</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.author.update', $author) }}" method="POST">
                @csrf
                @method("PUT")

                    <div class="form-group @error('name') has-error @enderror">
                         <label for="">NAMA</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Penulis"
                            value="{{ old('name') ?? $author->name }}">
                            @error('name')
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
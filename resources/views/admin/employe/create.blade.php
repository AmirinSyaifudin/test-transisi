@extends('admin.templates.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">ADD DATA EMPLOYE</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.employe.store') }}" method="POST">
                @csrf
                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA EMPLOYE</label>
                        <!-- //value="{{ old('nama')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Penulis" value="{{ old('nama') }}"> 
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="">EMAIL EMPLOYE </label>
                        <!-- //value="{{ old('email')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="email" class="form-control" placeholder="Masukkan email Penulis" value="{{ old('email') }}"> 
                        @error('email')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('company') has-error @enderror">
                        <label for="">NAMA COMPANY</label>

                        <select name="company_id" id="" class="form-control select2">
                            @foreach ($company as $cmp)
                                    <option value="{{ $cmp->id}}">{{ $cmp->nama}}</option>
                            @endforeach
                        </select>
                        @error('company')
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

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush

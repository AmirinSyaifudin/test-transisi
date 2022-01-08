@extends('admin.templates.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">EDIT EMPLOYEE</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.employe.update', $employe) }}"
                 method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA</label>
                        <!-- //value="{{ old('nama')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $employe->nama ?? old('nama') }}">
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="">EMAIL</label>
                        <!-- //value="{{ old('email')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="{{ $employe->email ?? old('email') }}">
                        @error('email')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                  
                    <div class="form-group @error('company') has-error @enderror">
                        <label for="">NAMA COMAPNY</label>

                        <select name="company_id" id="" class="form-control select2">
                            @foreach ($company as $p)
                                    <option value="{{ $p->id}}"
                                        @if ($p->id === $employe->company_id)
                                                selected
                                            @endif
                                        >
                                        {{ $p->nama}}
                                    </option>
                            @endforeach
                        </select>
                        @error('company')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Simpan" class ="btn btn-primary">
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

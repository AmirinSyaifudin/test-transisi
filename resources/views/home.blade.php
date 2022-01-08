@extends('frontend.templates.default')

@section('content')
<div class="row">
    <h2>BUKU YANG SEDANG DI PINJAM</h2>

    @foreach ($books as $book)
    <div class="col s12 m12">
        <div class="card horizontal hoverable">
            {{--  <div class="card-image">  --}}
            <img src="{{ $book->getCover() }}">
            {{--  </div>  --}}
            <div class="card-stacked">
            <div class="card-content">
                {{-- <h5>{{ $book->title }}</h5> --}}
                <h4 class="red-text accent-2">{{ $book->title }}</h4>
                 {{-- <p>{{ $book->description }}</p> --}}
                <blockquote>
                    <p>{{ $book->description }}</p>
                </blockquote>
                <p>
                    {{--  {{ $book->author->name}} relasi dari book ke author ..cek model   --}}
                    <i class="material-icons">person</i> : {{ $book->author->name}}
                </p>

            </div>

            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection

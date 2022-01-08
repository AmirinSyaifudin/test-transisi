@extends('frontend.templates.default')

@section('content')
<h3>Detail Buku</h3>
{{--  copy dari index  --}}
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
            <p>
                <i class="material-icons">book</i> : {{ $book->qty }}
            </p>
        </div>
        <div class="card-action">
            <form action="{{ route('book.borrow', $book) }}" method="POST">
                @csrf
                <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
            </form>
        </div>
        </div>
    </div>
</div>

<h4>Buku Lainnya dari penulis {{ $book->author->name }}...</h4>
    <div class="row">
        {{--  {{ dd($book->author->books) }}  --}}
        {{--  @foreach ($book->author->books as $book) looping berelasi buku dan penulis   --}}
        @foreach ($book->author->books->shuffle()->take(4) as $book)
            {{-- @component('frontend.templates.components.card-book', ['book' => $book])
            @endcomponent --}}
            @include('frontend.templates.components.card-book', [  'book' => $book])
        @endforeach
    </div>

@endsection

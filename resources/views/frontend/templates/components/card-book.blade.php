<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
        <img src="{{ $book->getCover() }}" height="200px">
        </div>
        <div class="card-stacked">
        <div class="card-content">
            {{-- <h5>{{ $book->title }}</h5> --}}
            <h6>
                <a href="{{ route('book.show', $book) }}">
                    {{ Str::limit($book->title,30) }}
                </a>
            </h6>
            {{-- <p>{{ $book->description }}</p> --}}
            <p>{{ Str::limit($book->description, 150) }}</p>
        </div>
        <div class="card-action">
            <form action="{{ route('book.borrow', $book) }}" method="POST">
                @csrf
                <input type="submit" value="Pinjam Buku" class="btn info accent-1 right waves-effect waves-light">
            </form>
        </div>
        </div>
    </div>
</div>

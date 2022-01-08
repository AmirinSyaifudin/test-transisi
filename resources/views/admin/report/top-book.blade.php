@extends('admin.templates.default')
@section('content')
 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">LAPORAN DATA BUKU TERLARIS YANG DI PINJAM </h3><br><br>
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>JUDUL BUKU</th>
                            <th>DESKRIPSI BUKU</th>
                            <th>JUMLAH BUKU</th>
                            <th>TOTAL DIPINJAM</th>
                            <th>PENULIS BUKU</th>
                            <th>SAMPUL</th>
                        </tr>
                    </thead>

                     <tbody>
                        @php
                            $page = 1;
                                if (request()->has('page')) {
                                    $page = request('page');
                                }
                            $no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') -1);
                         @endphp


                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->qty }}</td>
                                <td>{{ $book->borrowed_count }}</td>
                                <td>{{ $book->author->name }}</td>
                                <td>
                                    <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title}}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            {{ $books->links() }}
        </div>
</div>

@endsection

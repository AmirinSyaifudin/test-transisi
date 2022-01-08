@extends('admin.templates.default')
@section('content')
 <!-- /.box-header -->
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">LAPORAN DATA USER</h3><br><br>
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA USER</th>
                            <th>EMAIL USER </th>
                            <th>JUMLAH PEMINJAM</th>
                            <th>BERGABUNG</th>
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

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->borrow_count }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            {{ $users->links() }}
        </div>
</div>

@endsection

@extends('admin.templates.default')
@section('content')
<h1>Penulis</h1>

 {{-- <!-- /.box-header --> --}}
 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA PEMINJAMAN BUKU</h3><br><br>
              <a href="#" class="btn btn-primary">DATA PEMINJAMAN BUKU</a>
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA PEMINJAM</th>
                            <th>JUDUL BUKU</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
            </table>
        </div>
</div>
    <form action="" method="post" id="returnForm">
        @csrf
        @method("PUT")
        <input type="submit" value="Return" style="display:none">
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('scripts')

<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>


    <script src="{{ asset('/assets/plugins/bs.notify.min.js')}}"></script>
    @include('admin.templates.partials.alerts')

    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable : false},
                    { data: 'user'},
                    { data: 'book_title'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush

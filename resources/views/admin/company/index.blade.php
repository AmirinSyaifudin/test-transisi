@extends('admin.templates.default')
@section('content')
<h1>COMPANY</h1>

 <div class="box">
        <div class="box-header">
              <h3 class="box-title">DATA COMPANY</h3><br><br>
              <a href="{{ route('admin.company.create')}}" class="btn btn-primary">TAMBAH DATA COMPANY</a>
         </div>
         <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='5'>ID</th>
                            <th width='5'>NAMA</th>
                            <th width='120'>EMAIL</th>
                            <th width='60'>FOTO</th>
                            <th width='50'>ACTION</th>
                        </tr>
                    </thead>
                      {{-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                    </tbody>   --}}
            </table>
        </div>
</div>

<form action="" method="post" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display:none">
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
                "pageLength": 5,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.company.data') }}',
                columns: [
                   // { data: 'id'},
                     { data: 'DT_RowIndex', orderable: false, searchable : false}, //
                    { data: 'nama'},
                    { data: 'email'},
                    { data: 'cover'},
                    { data: 'action'},
                ]
            });
        });
    </script>
@endpush


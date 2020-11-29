@extends('template.admin')

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Bengkel Motor</h3>
        <a href="{{url('dataMotor/create')}}" class="btn btn-dark btn-sm float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>

    </div>
    <!-- /.card-header -->
    <div class="card-body table_datatable">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Judul</th>
                    <th>Komentar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($list_komen as $komen)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="d-flex nowrap ">
                        <a href="{{url('admin/komentar', $komen->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                        @include('template.utils.delete', ['url' => url('admin/komentar', $komen->id)])
                    </td>
                    <td>{{$komen->judul}}</td>
                    <td>{{$komen->komentar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
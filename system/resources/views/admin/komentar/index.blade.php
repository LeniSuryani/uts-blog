@extends('template.admin')

@section('content')

<div class="card">

    <div class="card-body table_datatable">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Pengomentar</th>
                    <th>Komentar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($list_komen as $komen)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="d-flex nowrap ">
                        @include('template.utils.delete', ['url' => url('admin/komentar', $komen->id)])
                        <a href="{{url('admin/komen', $komen->id)}}" class="btn btn-warning"> <i class=" fas fa-comments"></i></a> </a>
                    </td>
                    <td>{{$komen->nama_komentar}}</td>
                    <td>{{$komen->komentar}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
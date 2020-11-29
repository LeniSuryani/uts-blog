@extends('template.admin')

@section('content')


<div class="card">
    <div class="card-body table_datatable">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Judul Artikel</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_artikel as $artikel)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="d-flex nowrap ">
                        <a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-dark"> <i class="fa fa-info"></i></a> </a>
                        <a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning"> <i class="fas fa-pencil-alt"></i></a> </a>
                        @include('template.utils.delete', ['url' => url('admin/artikel', $artikel->id)])
                    </td>
                    <td>{{$artikel->judul}}</td>
                    <td>{{$artikel->kategori}}</td>
                    <td>{{$artikel->created_at}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
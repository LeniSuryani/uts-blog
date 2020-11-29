@extends('template.admin')

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data User</h3>
        <a href="{{url('admin/user/create')}}" class="btn btn-dark btn-sm float-right"> <i class="fa fa-plus mr-2"></i> Tambah Data</a>

    </div>
    <div class="card-body table_datatable">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_user as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="d-flex nowrap ">
                        <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"> <i class="fas fa-pencil-alt"></i></a> </a>
                        @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                    </td>
                    <td>{{$user->nama_user}}</td>
                    <td>{{$user->username}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
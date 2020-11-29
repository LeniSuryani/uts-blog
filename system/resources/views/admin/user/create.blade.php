@extends('template.admin')

@section('content')
<!-- general form elements -->
<div class="card card-white">
    <div class="card-header">
        <h3 class="card-title text-capitalize">Tambah User Baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form action="{{url('admin/user')}}" method="post">
            <!-- syntac keamanan dari laravel-->
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Lengkap</label>
                <input type="text" name="nama_user" id="" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                </div>
            </div>


            <div class="card-footer float-right mr-2" style="margin-top: -10px;">
                <button type="submit" class="btn btn-dark"> <i class="fa fa-save mr-2"></i> SIMPAN</button>
            </div>
        </form>
    </div>
</div>


@endsection
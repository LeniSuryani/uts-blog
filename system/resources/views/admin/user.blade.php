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
                    <th>Nama Bengkel</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>

                </tr>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
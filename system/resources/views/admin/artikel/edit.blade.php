@extends('template.admin')

@section('content')
<!-- general form elements -->
<div class="card card-white">
    <div class="card-header">
        <h3 class="card-title text-capitalize">edit artikel</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form action="{{url('admin/artikel', $artikel->id)}}" method="post">
            <!-- syntac keamanan dari laravel-->
            @csrf
            @method("PUT")

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul" id="" class="form-control" value="{{$artikel->judul}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kategori</label>
                        <input type="text" name="kategori" id="" class="form-control" value="{{$artikel->kategori}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tag</label>
                        <input type="text" name="tag" id="" class="form-control" value="{{$artikel->tag}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Artikel</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="10"> {{$artikel->content}}</textarea>
            </div>

            <div class="card-footer float-right mr-2" style="margin-top: -10px;">
                <button type="submit" class="btn btn-dark"> <i class="fa fa-save mr-2"></i> SIMPAN</button>
            </div>
        </form>
    </div>
</div>


@endsection
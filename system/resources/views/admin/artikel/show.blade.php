@extends('template.admin')

@section('content')

<div class="card">
    <div class="card-body">
        <h3>
            Judul Artikel : {{$artikel->judul}}
        </h3>
        <h4 class="bg-info p-2">
            Kategori : {{$artikel->kategori}} | Tag : {{$artikel->tag}}
        </h4>
        <hr>

        <h5>Isi Artikel :</h5>
        <p>
            {!! nl2br($artikel->content) !!}
        </p>
    </div>
</div>

@endsection
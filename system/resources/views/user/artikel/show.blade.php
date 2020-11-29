@extends('template.user')

@section('content')

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-4 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">

                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">{{$artikel->kategori}}</span>
                            <h3 class="title-big mb-4 text-capitalize">
                                {{$artikel->judul}}
                            </h3>

                            <h5 class="p-2" style="background: lightgray; margin-bottom: 20px;">
                                Dibuat pada : {{$artikel->created_at}} | Tag : {{$artikel->tag}}
                            </h5>
                            <p class="message"> {!! nl2br($artikel->content) !!}</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-5">
                            <img src="{{url('public')}}/assets/user/images/beauty7.jpg" class="img-fluid radius-image-full" alt="client image">
                            <div class="komentar mt-4">
                            </div>

                            <div class="komentar mt-4">
                                <div class="card" style="width: 23rem; border-radius: 10px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Komentar</h5>
                                        <form action="{{url('admin/artikel')}}" method="post">
                                            <!-- syntac keamanan dari laravel-->
                                            @csrf
                                            <div class="form-group">
                                                <textarea class="form-control" name="content" rows="5"></textarea>
                                            </div>
                                        </form>
                                        <div class="card-footer float-right mr-2" style="margin-top: -10px;">
                                            <button type="submit" class="btn btn-dark btn-sm">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-slider -->
</section>

@endsection
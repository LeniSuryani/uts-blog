@extends('template.user')

@section('content')

<!-- //homeblock1-->

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Beauty</span>
                            <h3 class="title-big mb-4 text-capitalize">Ciptakan Seni yang menunjukan keindahan dalam diri mu
                            </h3>
                            <p class="message">Keindahan itu terdapat di dalam dirimu, bukan pada peristiwa di luar dirimu. Ketika engkau memiliki mata hati yang indah maka engkau akan melihat segala sesuatu itu indah. Ketika engkau memiliki jiwa yang redha maka engkau akan redha walaupun dalam kekurangan.
                                Kebahagiaan itu datang dari dalam hati..</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="{{url('public')}}/assets/user/images/beauty.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Fashion and Style</span>
                            <h3 class="title-big mb-4 text-capitalize">Fashion hal penting yang memenuhi pikiran wanita setiap harinya
                            </h3>
                            <p class="message">Keindahan itu terdapat di dalam dirimu, bukan pada peristiwa di luar dirimu. Ketika engkau memiliki mata hati yang indah maka engkau akan melihat segala sesuatu itu indah. Ketika engkau memiliki jiwa yang redha maka engkau akan redha walaupun dalam kekurangan.
                                Kebahagiaan itu datang dari dalam hati..</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="{{url('public')}}/assets/user/images/fashion.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Food and Wellness</span>
                            <h3 class="title-big mb-4">
                                Ciptakan kebiasaan sehat, bukan pantangan. Kesehatan adalah rasa
                            </h3>
                            <p class="message">Keindahan itu terdapat di dalam dirimu, bukan pada peristiwa di luar dirimu. Ketika engkau memiliki mata hati yang indah maka engkau akan melihat segala sesuatu itu indah. Ketika engkau memiliki jiwa yang redha maka engkau akan redha walaupun dalam kekurangan.
                                Kebahagiaan itu datang dari dalam hati..</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="{{url('public')}}/assets/user/images/food.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>

<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4">Artikel Terpopuler Bulan</h3>
        <div class="row top-pics">
            <div class="col-lg-4 col-md-6">
                <div class="top-pic1">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">Fashion membuat anda semakin mempesona
                        </a>
                        <div class="author align-items-center">
                            <img src="{{url('public')}}/assets/user/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Isabella ava</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic2">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc text-capitalize">Makanan sehat penangkal virus corona
                        </a>
                        <div class="author align-items-center">
                            <img src="{{url('public')}}/assets/user//images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Charlotte mia</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="top-pic3">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc text-capitalize">Dibalik kelezatan nya ada banyak bahaya
                        </a>
                        <div class="author align-items-center">
                            <img src="{{url('public')}}/assets/user//images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('template.user')

@section('content')

<!-- card -->
<section class="w3l-homeblock1 py-sm-5 py-4">
    <div class="container py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-3 col-6 grids-feature">
                <a href="#beauty">
                    <div class="area-box">
                        <span class="fa fa-bath"></span>
                        <h4 class="title-head">Beauty</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature">
                <a href="#fashion">
                    <div class="area-box">
                        <span class="fa fa-female"></span>
                        <h4 class="title-head">Fashion and style</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#food">
                    <div class="area-box">
                        <span class="fa fa-cutlery"></span>
                        <h4 class="title-head">Food and wellness</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#lifesetyle">
                    <div class="area-box">
                        <span class="fa fa-pie-chart"></span>
                        <h4 class="title-head">Lifestyle</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- beauty -->
<div id="beauty" class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <h3 class="category-title mb-3"> Beauty</h3>
        <p class="mb-sm-5 mb-4 max-width">Lorem ipsum dolor sit amet elit. Id quaerat amet ipsum sunt et quos dolorum.</p>
        <div class="row">
            @foreach($list_artikel_beauty as $artikel)
            <div class="col-lg-6">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="{{url('artikel',  $artikel->id)}}" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/user/images/beauty9.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="{{url('artikel',  $artikel->id)}}" class="blog-desc">
                                {{$artikel->judul}}
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/user/images/a1.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Isabella ava</a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value">{{$artikel->created_at}}</span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <ul class="site-pagination text-center mt-md-5 mt-4">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#page2">2</a></li>
            <li><a class="page-numbers" href="#page3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="#page7">7</a></li>
            <li><a class="next page-numbers" href="#next">Next »</a></li>
        </ul>
    </div>
</div>

<!-- fashion and style -->
<div id="fashion" class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Fashion and style</h3>
            <a href="fashiom.html" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
            @foreach($list_artikel_fashion as $artikel)
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#blog-single.html">
                            <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/user//images/fashion3.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">
                            {{$artikel->judul}}
                        </a>
                        <div class="author align-items-center">
                            <img src="{{url('public')}}/assets/user//images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value">{{$artikel->created_at}}</span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- food and wellness -->
<div id="food" class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <h3 class="category-title mb-3"> Food and Wellness</h3>
        <p class="mb-sm-5 mb-4 max-width">Lorem ipsum dolor sit amet elit. Id quaerat amet ipsum sunt et quos dolorum.</p>
        <div class="row">

            @foreach($list_artikel_food as $artikel)
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/user/images/food.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">
                                {{$artikel->judul}}
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/user/images/a1.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Isabella ava</a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> {{$artikel->created_at}}</span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <ul class="site-pagination text-center mt-md-5 mt-4">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#page2">2</a></li>
            <li><a class="page-numbers" href="#page3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="#page7">7</a></li>
            <li><a class="next page-numbers" href="#next">Next »</a></li>
        </ul>
    </div>
</div>

<!-- lifestyle -->
<div id="lifestyle" class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <h3 class="category-title mb-3"> Lifestyle</h3>
        <p class="mb-sm-5 mb-4 max-width">Lorem ipsum dolor sit amet elit. Id quaerat amet ipsum sunt et quos dolorum.</p>
        <div class="row">

            @foreach($list_artikel_lifestyle as $artikel)
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="#blog-single.html" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="{{url('public')}}/assets/user/images/trending2.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="#blog-single.html" class="blog-desc">
                                {{$artikel->judul}}
                            </a>
                            <div class="author align-items-center">
                                <img src="{{url('public')}}/assets/user/images/a1.jpg" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Isabella ava</a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value">{{$artikel->created_at}}</span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <ul class="site-pagination text-center mt-md-5 mt-4">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#page2">2</a></li>
            <li><a class="page-numbers" href="#page3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="#page7">7</a></li>
            <li><a class="next page-numbers" href="#next">Next »</a></li>
        </ul>
    </div>
</div>



@endsection
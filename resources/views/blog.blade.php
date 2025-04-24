@extends('layout')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <a href="{{route('blog-detail')}}">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/service-1.png')}}" alt="">
                        </a>  </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <div class="d-flex flex-column">
                            <a href="{{route('blog-detail')}}">

                                <h5 class="text-truncate me-3 mb-0">Facility Management</h5></a>
                            <br>
                        </div>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"  href="{{route('blog-detail')}}"><i class="fa fa-arrow-right"></i></a>
                    </div>


                </div>
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <a href="{{route('blog-detail')}}">

                        <img class="img-fluid w-100 h-100" src="{{asset('img/service-2.png')}}" alt="">
                        </a>    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <div class="d-flex flex-column">
                            <a href="{{route('blog-detail')}}">

                                <h5 class="text-truncate me-3 mb-0">BIM Management et <br> Synthèse</h5></a>
                            <br>
                        </div>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"  href="{{route('blog-detail')}}"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <a href="{{route('blog-detail')}}">

                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-3.png')}}" alt=""></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <div class="d-flex flex-column">
                            <a href="{{route('blog-detail')}}">

                                <h5 class="text-truncate me-3 mb-0">BIM GEM et Modélisation</h5></a>
                            <br>

                        </div>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"  href="{{route('blog-detail')}}"><i class="fa fa-arrow-right"></i></a>
                    </div>

                    
                </div>
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.7s">
                    <div class="overflow-hidden">
                        <a href="{{route('blog-detail')}}">
                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <div class="d-flex flex-column">
                            <a href="{{route('blog-detail')}}">
                                <h5 class="text-truncate me-3 mb-0">Gestion de Projet BIM</h5>
                            </a>
                            <br>
                        </div>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="{{route('blog-detail')}}"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection




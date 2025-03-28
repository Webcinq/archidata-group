@extends('layout')
@section('content')
    <style>
        .image{
            width: 1000px;height: 500px;
        }
        @media (max-width: 768px) {
            .image{
                width: 350px;height: 300px;
            }
        }
    </style>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Blog Detail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blog detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <div style="padding: 0 30px; text-align: center;">
        <img class="image"   src="{{asset('img/service-1.png')}}" alt="">
        <br><br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <p >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, tenetur, veritatis? Commodi cupiditate, deserunt eius odio placeat possimus rerum similique. Eius exercitationem hic labore molestias mollitia nemo pariatur repellat sunt!
                </p>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>

@endsection

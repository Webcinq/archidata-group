@extends('layout')
@section('content')

    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contactez-nous</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Entrer en contact</h6>
                    <h1 class="mb-4">Contactez ArchiData</h1>
                    <p class="mb-4">Nous sommes à votre disposition pour toute question concernant nos services BIM et la construction durable. Remplissez le formulaire ci-dessous ou contactez-nous directement.</p>
                    <iframe class="position-relative w-100" src="https://www.google.com/maps/embed?..." frameborder="0" style="height: 300px; border:0;" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required value="{{ old('name') }}">
                                        <label for="name">Votre Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required value="{{ old('email') }}">
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Votre Message" style="height: 150px" required>{{ old('message') }}</textarea>
                                        <label for="message">Votre Message</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-sm btn-danger" id="reload">
                                            ↻
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <input id="captcha" type="text" class="form-control" placeholder="Entrez le CAPTCHA" name="captcha" required>
                                </div>
                                <div class="col-12">
                                    <button style="background-color: #124698" class="btn text-white w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('reload').addEventListener('click', function() {
            fetch('/reload-captcha')
                .then(response => response.json())
                .then(data => {
                    document.querySelector('.captcha span').innerHTML = data.captcha;
                });
        });
    </script>
@endsection
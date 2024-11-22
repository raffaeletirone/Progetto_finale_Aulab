<x-layout>

    <div class="container d-flex align-items-center justify-content- min-vh-100 mt-2 mb-3">
        <div class="row w-100">
            <!-- Sezione Informazioni Articolo -->
            <div class="col-md-6 rounded shadow-lg bg-light p-5 larger-card position-relative">
                <div class="gradient-overlay"></div>
                <div class="mb-3 text-center position-relative">
                    <h1 id="card_title" class="t-card-art">{{ $article->title }}</h1>
                </div>
                <hr class="divider-vert my-4 position-relative">
                <div class="mb-3 position-relative">
                    <h3 class="d-card-art fw-bold text-secondary">{{ __('ui.Descrizione') }}:</h3>
                    <p class="d-card-art">{{ $article->description }}</p>
                </div>
                <hr class="divider-vert my-4 position-relative">
                <div class="mb-3 position-relative">
                    <h3 class="p-card-art fw-bold text-success">{{ __('ui.Prezzo') }}: {{ $article->price }} €</h3>
                </div>
                <div class="my-3">
                    <a href="{{ route('home.index') }}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg>
                    </a>
                </div>


            </div>
    
            <!-- Divisore Centrale per Desktop -->
            <div class="col-12 col-md-1 d-none d-md-flex align-items-center justify-content-center">
                <div class="divider bg-secondary" style="width: 2px; height: 100%;"></div>
            </div>
    
            <!-- Carosello Immagini -->
            <div class="col-12 col-md-5 mt-3 mt-md-0 larger-card position-relative">
                <div id="carouselExample" class="carousel slide rounded shadow-lg overflow-hidden taller-carousel" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl(1200,1200) }}" class="d-block w-100 rounded carousel-image-show" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                            </div>
                        @endforeach
                    </div>
            
                    <button class="carousel-control-prev rounded d-none d-md-block" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next rounded d-none d-md-block" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
    
    
    

    {{-- <div class="container mt-5 mb-3">
    
        <div class="row w-100 ">
            <!-- Sezione Informazioni Articolo -->
            <div class="col-md-5 rounded shadow bg-body-secondary p-4">
                <!-- TITOLO -->
                <div class="mb-3">
                    <h1 id="card_title" class="t-card-art text-center">{{ $article->title }}</h1>
                </div>
                
                <!-- DIVISORE -->
                <hr class="divider-vert my-4">
    
                <!-- DESCRIZIONE -->
                <div class="mb-3">
                    <h3 class="d-card-art">{{ __('ui.Descrizione') }}:</h3>
                    <p class="d-card-art">{{ $article->description }}</p>
                </div>
    
                <!-- DIVISORE -->
                <hr class="divider-vert my-4">
    
                <!-- PREZZO -->
                <div class="mb-3">
                    <h3 class="p-card-art">{{ __('ui.Prezzo') }}: {{ $article->price }} €</h3>
                </div>
            </div>
    
            <!-- Divisore Centrale per Desktop -->
            <div class="col-12 col-md-1 d-none d-md-flex align-items-center justify-content-center">
                <div class="divider">
                    <h1></h1>
                </div>
            </div>
    
            <!-- Carosello Immagini -->
            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl(800,800) }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                            </div>
                        @endforeach
                    </div>
    
                    <div style="background-color: black; opacity: 0.5;">
                        <button class="carousel-control-prev rounded" style=" background-color: gray;" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    </div>
                    
                    <button class="carousel-control-next rounded" style=" background-color: gray;"  type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    
    </x-layout>
    
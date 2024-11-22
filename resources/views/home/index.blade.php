<x-layout>

    <div class="container col-12 col-md-12">
        <div id="heroCarousel" class="carousel slide carousel-fade d-none d-lg-flex" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Prima immagine -->
                <div class="carousel-item active ">
                    <img src="images/download.jpg" class="d-block w-100" alt="Immagine 1" style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block " style="background-color: rgba(0, 0, 0, 0.747);">
                        <h5>{{ __('ui.Benvenuti nel nostro sito') }}</h5>
                        <p> {{ __('ui.Scopri di più sui nostri prodotti e servizi') }}</p>
                        <x-add_article />
                    </div>
                </div>

                <!-- Seconda immagine -->
                <div class="carousel-item ">
                    <img src="images\flat-lay-clothing-photos_3414.webp" class="d-block w-100" alt="Immagine 2"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.747);">
                        <h5>{{ __('ui.Innovazione e Qualità') }}</h5>
                        <p> {{ __('ui.Offriamo soluzioni moderne per le tue esigenze') }}</p>
                        <x-add_article />
                    </div>

                </div>

                <!-- Terza immagine -->
                <div class="carousel-item ">
                    <img src="images\digital-marketing-for-luxury-brands-scaled.jpg" class="d-block w-100"
                        alt="Immagine 3" style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.747);">
                        <h5>{{ __('ui.Contattataci Oggi') }}</h5>
                        <p>{{ __('ui.Unisciti alla nostra community!') }}</p>
                        <x-add_article />
                    </div>
                </div>
            </div>

            <!-- Controlli del carosello -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="row align-items-start justify-content-center w-100">
        <div class="col-12 col-md-8">
            <div class="row height-custom justify-content-center align-items-center py-3 mx-4">
                @forelse ($articles as $article)
                <div class="col-md-4 d-lg-flex d-none">
                    <x-card :article="$article" />
                </div >
                <div class="col-6 col-md-4 d-md-none d-flex">
                    <x-small-card :article="$article" />
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center">{{ __('ui.Non sono ancora stati creati articoli.') }}</h3>
                </div>
                @endforelse
            </div>
        </div>

    </div>









</x-layout>
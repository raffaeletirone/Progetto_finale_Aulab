<x-layout>



    <div class=" row pt-3 mb-auto mx-auto w-100 col-12">
        <x-aside_rev></x->

            <div class="col-md-9 ">
                <h1 style="text-align: center">{{__('ui.Dashboard')}}:</h1>
                <div class="bg-body-secondary rounded p-4 mb-5" style="box-shadow: rgba(41, 184, 181, 0.816) 0px 3px 6px, rgba(41, 184, 181, 0.816) 0px 3px 6px;">

                    @if (!$article_to_check)
                    <div class="row justify-content-center align-items-center text-center height-custom">
                        <div class="col-12">
                            <h1 class="fst-italic fs-2">{{ __('ui.Nessun articolo da revisionare') }}</h1>
                            <a href="{{ route('home.index') }}" class="mt-5 btn btn-success">{{ __("ui.Torna all'homepage") }}</a>
                        </div>
                    </div>
                    @else
                    @if (session()->has('message'))
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="alert alert-{{ session('status') }} fade show position-fixed top-3 start-50 translate-middle-x" role="alert" style="z-index: 1050;">
                                {{ session('message') }}
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Blocco informazioni articolo -->
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <h2 class="text-truncate">{{ $article_to_check->title }}</h2>
                            <h3>{{ __('ui.Autore') }}: {{ $article_to_check->user->name }}</h3>
                            <h4>{{ $article_to_check->price }} €</h4>
                            <h5 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h5>
                            <p class="h6 text-truncate">{{ $article_to_check->description }}</p>
                        </div>

                        <div class="col-md-4 d-flex flex-column justify-content-end align-items-center gap-3">
                            <div class="d-flex gap-3">
                                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-danger fw-bold" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">{{ __('ui.Rifiuta') }}</button>
                                </form>
                                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-success fw-bold" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">{{ __('ui.Accetta') }}</button>
                                </form>
                            </div>

                            <a href="{{ route('article.show', ['article' => $article_to_check->id]) }}" class="btn btn-info w-100" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">Dettaglio</a>
                        </div>
                    </div>
                    <!-- Fine blocco informazioni articolo -->

                    <div class="row pt-5">
                        @foreach ($article_to_check->images as $key => $image)
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card shadow-sm">
                                <img src="{{ $image->getUrl(800,800) }}" class="card-img-top rounded" alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                <div class="card-body" style="text-align: center">
                                    <h5 class="card-title">Labels</h5>
                                    @if ($image->labels)
                                        <p>
                                        @foreach ($image->labels as $label)
                                            #{{ $label }},
                                        @endforeach
                                        </p>
                                    @else
                                        <p class="fst-italic text-muted">No labels</p>
                                    @endif
                                    <h5 class="mt-3">Ratings</h5>
                                    @foreach (['adult', 'violence', 'spoof', 'racy', 'medical'] as $rating)
                                        <div class="d-flex align-items-center my-2">
                                            <i class="{{ $image->$rating }} mx-2"></i>
                                            <span>{{ ucfirst($rating) }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>



    </div>


</x-layout>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            setTimeout(() => {
                alert.classList.remove('show');
            }, 2000);
        }
    });
</script>
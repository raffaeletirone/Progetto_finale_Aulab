<x-layout>
    <div class="container-fluid">
        <div class="row mx-auto">
            <x-aside_hp />

            <div class="col-md-10 col-12 mt-2">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12 w-75">
                        <h3 class="display-5 deco-title bg-body-secondary"> {{ __('ui.Risultati per la Ricerca') }}
                            "<span class="fst-italic">{{ $query }}</span>"
                        </h3>
                    </div>
                </div>
                <div class="row height-custom justify-content-center align-items-center py-1">
                    @forelse ($articles as $article)
                    <div class="col-12 col-md-3 d-lg-flex d-none">
                        <x-card :article="$article" />
                    </div>
                    <div class="col-6 col-md-4 d-md-none d-flex">
                        <x-small-card :article="$article" />
                    </div>
                    @empty
                    <div class="col-12">
                        <h1 class="text-center"> {{ __('ui.Nessun articolo corrisponde alla tua ricerca.') }}
                        </h1>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center pagination">
            {{ $articles->links() }}
        </div>
    </div>


</x-layout>

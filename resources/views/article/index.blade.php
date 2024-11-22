<x-layout>

    <div class="container-fluid">
        <div class="row mx-auto">
            <x-aside_hp />

            <div class="col-12 col-md-10">
                <div class="row height-custom justify-content-center align-item-center text-center">
                    <div class="col-12 w-50">
                        <h1 class="display-5 deco-title bg-body-secondary"> {{ __('ui.Tutti gli articoli') }}</h1>
                    </div>
                </div>
                <div class="row height-custom justify-content-center align item-center py-3">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-3 d-lg-flex d-none">
                            <x-card :article="$article" />
                        </div>
                        <div class="col-6 col-md-4 d-md-none d-flex">
                            <x-small-card :article="$article" />
                        </div>
                    @empty
                        <div class="col-12">
                            <h3 class="text-center" {{ __('ui.Non sono ancora stati creati articoli.') }}></h3>
                        </div>
                    @endforelse
                </div>

                <div class="d-flex justify-content-center pagination">
                    <div>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                {{ $articles->links() }}
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>



</x-layout>

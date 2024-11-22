<div>
    @auth
    <div class=" text-center">

        <!-- <div class="container">
            <a href="{{ route('article.create') }}"
                class="btn btn-lg btn-primary shadow">{{ __('ui.Crea Nuovo Articolo') }}</a>
        </div> -->

        <div class="container-btn-new justify-content-center">
            <a href="{{ route('article.create') }}" class="btn-new btn-2" style="font-size: small; font-weight: bold">{{ __('ui.Crea Nuovo Articolo') }}</a>
        </div>
    </div>
    @endauth
</div>
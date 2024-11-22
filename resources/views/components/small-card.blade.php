<a href="{{ route('article.show', compact('article')) }}" style="text-decoration: none; color: inherit;" >
    <div class="article-card-sm small-card">
        <div class="image-container" style="position: relative;">
            <img src="{{ $article->images->count() > 0 ? $article->images->first()->getUrl(800,800) : '/images/logo-color-edited.png' }}"
                alt="Immagine dell'articolo {{ $article->title }}" class="card-img-top">

            <div class="icon-container" style="position: absolute; top: 10px; right: 10px;">
                <div style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16" style="color: white;">
                        <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="article-details-sm">
            <h2 class="article-name-sm text-truncate">{{ $article->title }}</h2>
            <p class="article-description-sm text-truncate">{{ $article->description }}</p>
            <p class="article-price-sm">€ {{ $article->price }}</p>
            <div class="border-top">
            </div>
            <div class=" text-center" >
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" style="text-decoration: none; color: gray;"
                    class="text-capitalize">{{ $article->category->name }}</a>
            </div>
        </div>
    </div>

</a>
<div class="card-new text-truncate">
    <img src="{{ $article->images->count() > 0 ? $article->images->first()->getUrl(800,800) : '/images/logo-color-edited.png' }}"
        alt="Immagine dell'articolo {{ $article->title }}" class="card-img-top" style="height: 150px; width: 100%; object-fit: contain;">
    <div class="article-details" style="height: 250px; overflow-y: auto; padding: 10px;">
        <h2 class="article-name text-truncate">{{ $article->title }}</h2>
        <p class="article-description text-truncate">{{ $article->description }}</p>
        <p class="article-price">€ {{ $article->price }}</p>
        <div class="article-buttons">
            <a href="{{ route('article.show', compact('article')) }}" class="detail-button btn-2 btn-new-sm">{{ __('ui.Dettaglio')}}</a>

            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="detail-button btn-2 btn-new-sm  text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div>


<style>
    .card-new {
  box-sizing: border-box;
  width: 100%;
  max-width: 300px;
  height: 370px;
  background: rgba(217, 217, 217, 0.58);
  border: 1px solid white;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  user-select: none;
  font-weight: bolder;
  color: black;
  padding: 10px;
  overflow: hidden;
  margin: 20px auto;
}

.card-new:hover {
  border: 2px solid #28b8b6d0;
  transform: scale(1.03);   
}   
</style>
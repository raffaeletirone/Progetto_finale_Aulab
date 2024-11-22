<div class="row mw-100">
    <div class="col-md-6 p-4">
        <form class=" col-10 col-md-6 form_art p-3" wire:submit="store">


            <h3 class="text-center my-2">{{ __('ui.Aggiungi un nuovo articolo') }}</h3>

            @if (session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}!
                </div>
            @endif

            <div class="mb-3 form">
                <label for="title" class="article-add">
                    <p style="display: inline; color: red;">* </p>{{ __('ui.Titolo') }}:
                </label>
                <input type="text" class="form-input-add @error('title') is-invalid @enderror" id="title"
                    wire:model.blur="title" placeholder="Inserisci il titolo (min 5 caratteri)">
                @error('title')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="article-add">
                    <p style="display: inline; color: red;">* </p>{{ __('ui.Descrizione') }}:
                </label>
                <textarea id="description" cols="20" rows="6"
                    class="form-input-add @error('description') is-invalid @enderror"
                    wire:model.blur="description"
                    placeholder="Inserisci la descrizione (min 20 caratteri)"></textarea>
                @error('description')
                    <p class="error-message " style="margin-top:-1% " >{{ $message }}</p>
                @enderror
            </div>
            

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="" class="article-add">
                        <p style="display: inline; color: red;">* </p>{{ __('ui.Prezzo') }}:
                    </label>
                    <input type="number" step="0.1" class="form-input-add @error('price') is-invalid @enderror"
                        id="price" wire:model.blur='price' placeholder="Inserisci il prezzo">
                    @error('price')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label for="category" class="article-add">
                        <p style="display: inline; color: red;">* </p>{{ __('ui.Categoria') }}:
                    </label>
                    <select id="category" wire:model.blur="category"
                        class=" form-input-add @error('category') is-invalid @enderror">
                        <option value="" label>{{ __('ui.Seleziona una categoria') }}:</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ __("ui.$category->name") }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-1 col-md-6">
                    <input type="file" class="add_image" wire:model.live="temporary_images" multiple
                        @error('temporary_images') is-invalid @enderror placeholder="Inserisci un'immagine">
                    @error('temporary_images.*')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                    @error('temporary_images')
                        <p class="error-message">{{ $message }}</p>
                    @enderror

                </div>

                <div class="d-flex justify-content-center col-md-6">
                    <button type="submit" class="btn add_article_btn_fr w-100 mb-3">Crea</button>
                </div>

            </div>





            <p style="display: inline; color: black; font-weight: bold">- I campi contrassegnati dal simbolo (*) sono
                obbligatori.</p>
            <br>
            <p style="display: inline; color: black; font-weight: bold">- Il revisore sarà notificato, solo quando verrà
                accettato sarà
                possibile
                visualizzarlo in Home.</p>

        </form>
    </div>

    <div class="col-md-1 mt-5 d-flex align-items-center justify-content-center p-0">
        <!-- Divisore -->
        <div class="divider">
            <h1></h1>
        </div>

    </div>

    <div class="col-md-5 p-3">
        <div class="row justify-content-center align-items-center text-center my-2 p-0">
            <h3 class="text-center my-2">{{ __('ui.Gestisci le immagini') }}</h3>
        </div>
        <div class="image-container-create border rounded p-3 w-100"
            style="box-shadow: #28b8b6d0 0px 5px 10px; background-color: #c9c9c993;">
            @if (count($images) > 0)
                <div class="col-12 my-3 mx-auto">
                    <div class="row justify-content-center flex-wrap">
                        @foreach ($images as $key => $image)
                            <div class="col-md-4 col-sm-6 col-12 wrap my-2 shadow py-4 rounded">
                                <div class="img-preview shadow rounded"
                                    style="background-image: url('{{ $image->temporaryUrl() }}'); background-size: cover; background-position: center; height: 200px;">
                                </div>
                                <button type="button" class="btn btn-danger mt-2"
                                    wire:click="removeImage({{ $key }})">X</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-center text-muted my-4" style="color: white">Le immagini saranno visualizzate qui</p>
            @endif
        </div>


    </div>





</div>

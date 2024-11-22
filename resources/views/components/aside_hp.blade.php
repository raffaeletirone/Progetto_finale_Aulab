<div class="col-md-2 d-none d-md-block aside mt-2 bg-body-secondary" style="max-width: 10% !important;">
    <div>
        <h4>{{ __('ui.Categorie') }}:</h4>
        <ul class="p-0">
            @foreach ($categories as $category)
                <li class="nav-item ">
                    <a class="nav-link-aside text-capitalize shadow-sm"
                        href="{{ route('byCategory', ['category' => $category]) }}">
                        {{-- <svg
                            xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753" />
                        </svg> --}}
                        {{ __("ui.$category->name") }} </a>
                </li>
                @if (!$loop->last)
                    <hr class="dropdown-divider">
                @endif
            @endforeach
        </ul>
    </div>

</div>

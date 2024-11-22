{{-- DOMANDA FORM REVISOR --}}
<x-layout>
    <div class="container d-flex mx-auto my-4 justify-content-center align-items-center">
        <h1>{{__('ui.Lavora con Noi!')}}</h1>
    </div>

    <div class="container d-flex mx-auto justify-content-center align-items-center">

        @if (session()->has('message'))
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="row justify-content-center">
                <div class="w-75 col-md-12 alert text-center shadow rounded" style="background-color: #28b8b6d0;">
                    <div class="fs-4 fs-md-2">
                        <p class="mb-3">{{ session('message') }}</p>
                    </div>
                    <div class="my-3">
                        <a href="{{ route('home.index') }}" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @else


        <form class="col-md-6 shadow p-3 " method="POST" action="{{ route('become.revisor') }}">
            @csrf
            <div class="mb-3">
                <label for="question" class="p-2 fs-5">
                    <p style="display: inline; color: red;">* </p style="color: black">{{__('ui.Perchè vuoi diventare Revisor?')}}
                </label>
                <textarea name="question" id="question" cols="15" rows="6"
                    class="form-input-add @error('question') is-invalid @enderror" placeholder="Domanda.."> </textarea>
                @error('question')
                <p class="error-message">{{ $message }}</p>
                @enderror
               
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn add_article_btn_fr w-100 mb-3">{{__('ui.Invia!')}}</button>
            </div>
            <p style="display: inline; color: white;">-{{__('ui.I campi contrassegnati dal simbolo (*) sono obbligatori')}}</p>
        </form>
        @endif


    </div>
</x-layout>
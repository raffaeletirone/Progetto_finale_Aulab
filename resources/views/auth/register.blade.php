<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/buttons.css'])
</head>


<div class="home-background">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-2">
                <img src="{{ asset('images/DR.png') }}" alt="Logo" onclick="location.href='/'" class="img-fluid custom-image-rg" style="cursor: pointer;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ __('ui.Registrati') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">{{ __('ui.Nome') }}</label>
                                <input type="text" name="name" id="name" class="form-input-lg" value="{{ old('name') }}" placeholder="Es. Mario Rossi">
                                @error('name')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-input-lg" value="{{ old('email') }}" placeholder="Es. Mariorossi@gmail.com">
                                @error('email')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">{{ __('ui.Password') }}</label>
                                <input type="password" name="password" id="password" class="form-input-lg" placeholder="Inserisci una password">
                                @error('password')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">{{ __('ui.Conferma Password') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-input-lg" placeholder="Conferma la tua password">
                                @error('password_confirmation')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center mt-4">
                                <input type="submit" value="{{ __('ui.Registrati') }}" class="btn-new btn-2  shadow">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

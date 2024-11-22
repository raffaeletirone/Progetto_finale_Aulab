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
            <div class="col-12 text-center mb-4" style="cursor: pointer;">
                <img src="{{ asset('images/DR.png') }}" alt="Logo" onclick="location.href='/'" class="img-fluid custom-image-rg">
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ __('ui.Accedi') }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post" class="px-4">
                            @csrf
                            <div class="form-group mb-1">
                                <label for="email" class="form-label text-dark">Email</label>
                                <input type="email" name="email" class="form-input-lg" placeholder="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-">
                                <label for="password" class="form-label text-dark">Password</label>
                                <input type="password" name="password" class="form-input-lg" placeholder="password">
                                @error('password')
                                    <p class="error-message  small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <input type="submit" value="{{ __('ui.Accedi') }}" class="btn-2 btn-new mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






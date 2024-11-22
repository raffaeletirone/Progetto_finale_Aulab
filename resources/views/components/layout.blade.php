<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/buttons.css'])
</head>

<body>

    <x-header />

   

    <div class=" wrapper d-flex flex-column min-vh-100">
       {{ $slot }}
    </div>



    <x-footer />
</body>

</html>

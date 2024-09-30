<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D&D Blog</title>
    {{-- <!-- icona --> --}}
    <link rel="icon" href="/img/icone_D&D/icona.png">
    {{-- css --}}
    @vite('resources/css/app.css')
    {{-- <!-- font --> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">

</head>

<body>

    <x-navbar />


    {{ $slot }}
    {{--  slot è importasnte altrimenti il contenuto delle nostre pagine non verrà correttamente visualizzato --}}

    
    <!-- Bottone "Up" -->
<a href="#" id="scrollToTop">
    Up
</a>


    <x-footer />

    @vite('resources/js/app.js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

</body>

</html>

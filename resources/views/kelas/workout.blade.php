<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles
</head>

<body>
    @livewire('nav')
    @livewire('breadcrumb', ['homeUrl' => url('/'), 'projectsUrl' => url("workout"), 'projectsText' => 'Workout'])
    @livewire('workout')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewire('footer')
    @livewireScripts
</body>

</html>

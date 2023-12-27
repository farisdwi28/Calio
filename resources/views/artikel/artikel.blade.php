<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Makanan Sehat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans">
    @livewire('nav')
    @livewire('breadcrumb', ['homeUrl' => url('/'), 'projectsUrl' => url("artikel/{$artikelId}"), 'projectsText' => 'Artikel'])
    @livewire('artikel-detail', ['id' => $artikelId])
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewire('footer')
    @livewireScripts
</body>

</html>

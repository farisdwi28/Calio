<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Healthy Food Information</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @livewireStyles
</head>


<body>
    @livewire('breadcrumb', ['homeUrl' => url('/'), 'projectsUrl' => url('detail'), 'projectsText' => 'Detail Menu'])
    @livewire('detail-menu', ['id' => $makananId])
    <div class="pt-64">
        @livewire('footer')
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewireScripts
</body>

</html>

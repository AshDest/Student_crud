<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    {{$slot}}
    @livewireScripts
    <script>
        window.livewire.on('StudentAdded',()=>{
            $('#addStudentModal').modal('hide');
        });
        window.livewire.on('StudentUpdated',()=>{
            $('#updateStudentModal').modal('hide');
        });
        window.livewire.on('fileUploaded',()=>{
            $('#form-upload')[0].reset();
        });
        window.livewire.on('imagesUploaded',()=>{
            $('#upload-images')[0].reset();
        });
    </script>
</body>
</html>

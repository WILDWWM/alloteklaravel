@props([
    'titre' => 'Allotek, trop bien',
    'description' => 'Allotek, trop bien',
    'keywords' => 'Allotek, abbeville, dépannage, etc...',
])
<head>
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/liquid.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="./css/index.scss">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}"    
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/allotek@.png')}}">    
</head>
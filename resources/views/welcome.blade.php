<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resee — Магазин</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body class="bg-fill">
<div class="flex justify-center p-6">
    <h3>Магазин</h3>
</div>
<div class="container mx-auto">
    <h4>Кейсы</h4>
    <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">
        @foreach($data_cases as $product)
            @include("components.card-product")
        @endforeach
    </div>

    <h4>Привилегии</h4>
    <div class="grid grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">
        @foreach($data_privilages as $product)
            @include("components.card-product")
        @endforeach
    </div>

    <h4>Предметы</h4>
    <div class="grid grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">
        @foreach($data_items as $product)
            @include("components.card-product")
        @endforeach
    </div>
</div>
</body>
</html>
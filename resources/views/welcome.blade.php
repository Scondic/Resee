<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resee — Магазин</title>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body class="bg-fill">
<div id="app">
    <div class="flex justify-center p-6">
        <h3>Магазин</h3>
    </div>
    <div class="container mx-auto">
        <h4>Кейсы</h4>
        <card-products></card-products>

        <h4>Привилегии</h4>
        <card-products></card-products>

        <h4>Предметы</h4>
        <card-products></card-products>
    </div>
</div>
<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
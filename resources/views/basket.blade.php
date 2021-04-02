@php
    $curl = curl_init("https://easydonate.ru/api/v1/shop/4223c208eeec0d60b28e04f579967328");
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'User-Agent: Scondic'
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($curl);

    dd($data);
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resee — Корзина</title>

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <h1>Корзина покупок</h1>
    </body>
</html>

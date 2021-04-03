<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resee — Корзина</title>

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
            <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
                <div class="flex justify-center items-center bg-fill rounded-md p-8">
                    <img class="w-12" src="{{ $product->image }}" alt="Изображение - {{ $product->name }}">
                </div>
                <div class="flex flex-col justify-between w-full pl-4">
                    <div class="">
                        <h5 class="">{{ $product->name }}</h5>
                        <div class="font-medium text-light">{{ $product->price }} ₽ за {{ $product->number }} шт.</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <button class="btn btn-fill">+</button>
                            <div class="mx-4">10</div>
                            <button class="btn btn-fill">-</button>
                        </div>
                        <div class="flex">
                            <button class="btn btn-danger">T</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <h4>Привилегии</h4>
    <div class="grid grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">

        @foreach($data_privilages as $product)
            <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
                <div class="flex justify-center items-center bg-fill rounded-md p-8">
                    <img class="w-12" src="{{ $product->image }}" alt="Изображение - {{ $product->name }}">
                </div>
                <div class="flex flex-col justify-between w-full pl-4">
                    <div class="">
                        <h5 class="">{{ $product->name }}</h5>
                        <div class="font-medium text-light">{{ $product->price }} ₽ за {{ $product->number }} шт.</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <button class="btn btn-fill">+</button>
                            <div class="mx-4">10</div>
                            <button class="btn btn-fill">-</button>
                        </div>
                        <div class="flex">
                            <button class="btn btn-danger">T</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <h4>Предметы</h4>
    <div class="grid grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">

        @foreach($data_items as $product)
            <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
                <div class="flex justify-center items-center bg-fill rounded-md p-8">
                    <img class="w-12" src="{{ $product->image }}" alt="Изображение - {{ $product->name }}">
                </div>
                <div class="flex flex-col justify-between w-full pl-4">
                    <div class="">
                        <h5 class="">{{ $product->name }}</h5>
                        <div class="font-medium text-light">{{ $product->price }} ₽ за {{ $product->number }} шт.</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <button class="btn btn-fill">+</button>
                            <div class="mx-4">10</div>
                            <button class="btn btn-fill">-</button>
                        </div>
                        <div class="flex">
                            <button class="btn btn-danger">T</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<div class="flex flex-col rounded-t-xl xl:hidden" style="background-color: #ffffff">
    <div class="grid gap-2 flex-col p-4">
        <h4 class="mb-0">Итог заказа</h4>
        <div class="flex justify-between text-light">
            Сумма покупки <span class="font-medium">547,00 ₽</span>
        </div>
        <div class="flex justify-between text-light">
            Сумма скидки <span class="font-medium">0,00 ₽</span>
        </div>
        <div class="flex justify-between text-light">
            Сумма к оплате <span class="font-medium">547,00 ₽</span>
        </div>
    </div>
    <div class="rounded-t-xl" style="background-color: #000000">
        <div class="grid gap-2 flex-col p-4" style="color: #ffffff">
            <h4 class="mb-0">Способ оплаты</h4>
            <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">Mastercard</div>
            <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">Maestro</div>
            <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">Сбербанк</div>
        </div>
    </div>
</div>
</body>
</html>
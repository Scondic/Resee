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
    <h3>Корзина покупок</h3>
</div>
<div class="container mx-auto">
    <h4>Список заказов</h4>
    <div class="grid xl:grid-rows-3 md:grid-rows-2 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">
        <!--
        <div class="xl:flex xl:row-span-5 flex-col rounded-t-xl hidden 2xl:hidden">
            <div class="grid gap-2 flex-col p-4 mb-3 rounded-md" style="background-color: #ffffff">
                <h4 class="mb-0">Промокод</h4>
                <div class="grid gap-3">
                    <div class="flex justify-end items-center relative">
                        <button class="text-main absolute pr-4">Применить</button>
                        <input id="promocode" class="form-control form-control-fill focus:outline-none focus:ring focus:border-blue-300 w-full"
                               type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                    </div>
                </div>
            </div>
            <div class="grid gap-2 flex-col p-4 rounded-t-md" style="background-color: #ffffff">
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
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Mastercard
                    </div>
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Maestro
                    </div>
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Сбербанк
                    </div>
                </div>
            </div>
        </div>
        <div class="2xl:flex xl:row-span-5 flex-col rounded-t-xl hidden">
            <div class="grid gap-2 flex-col p-4 mb-3 rounded-md" style="background-color: #ffffff">
                <h4 class="mb-0">Промокод</h4>
                <div class="grid gap-3">
                    <div class="flex justify-end items-center relative">
                        <button class="text-main absolute pr-4">Применить</button>
                        <input id="promocode" class="form-control form-control-fill focus:outline-none focus:ring focus:border-blue-300 w-full"
                               type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                    </div>
                </div>
            </div>
            <div class="grid gap-2 flex-col p-4 rounded-t-md" style="background-color: #ffffff">
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
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Mastercard
                    </div>
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Maestro
                    </div>
                    <div class="flex bg-white rounded-md p-4 h-16 text-light" style="background-color: #ffffff">
                        Сбербанк
                    </div>
                </div>
            </div>
        </div>
        -->
        @foreach($data->response as $product)
            @include("components.card-product-basket")
        @endforeach
    </div>
    <h4 class="xl:hidden">Промокод</h4>
    <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6 xl:hidden">
        <div class="flex justify-end items-center relative">
            <button class="text-main absolute pr-4">Применить</button>
            <input id="promocode" class="form-control focus:outline-none focus:ring focus:border-blue-300 w-full"
                   type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
        </div>
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

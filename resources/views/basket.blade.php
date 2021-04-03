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
@endphp

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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽ <span class="text-main">99,00 ₽</span></div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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
        <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
            <div class="flex justify-center items-center bg-fill rounded-md p-8">
                <img class="w-12" src="https://soulcraft-pe.ru/assets/img/donates/case1.png" alt="Кейс">
            </div>
            <div class="flex flex-col justify-between w-full pl-4">
                <div class="">
                    <h5 class="">Кейс с 100 000 монетами</h5>
                    <div class="font-medium text-light">249,00 ₽</div>
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

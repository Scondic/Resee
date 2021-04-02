@php

$data_products = json_decode('{ "success":1, "response":[{ "id":965, "name":"Выживание", "ip":"alcor.mcstudio.pro", "port":"25641", "rcon_port":"25573", "rcon_password":"qwerty", "version":"", "is_port_hidden":0, "hide_ip":0, "is_hidden":0, "shop_id":531, "created_at":"2021-02-22 17:44:47", "updated_at":"2021-03-26 13:51:42", "products":[
{ "id":6074, "name":"Алмазный меч", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазный топор", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазный шлем", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазный нагрудник", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазные штаны", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазные поножи", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":6074, "name":"Алмазная мотыга", "price":49, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 276 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":null, "image":"http://cp.easydonate.ru/storage/app/media/Diamond%20Sword-min.png", "first_delete":0, "shop_id":531, "created_at":"2021-02-24 18:02:40", "updated_at":"2021-03-26 13:52:39", "sort_index":0 },
{ "id":11237, "name":"Алмазная кирка", "price":59, "old_price":null, "type":"item", "number":1, "commands":[ "give {user} 278 {amount}" ], "withdraw_commands":null, "withdraw_commands_days":null, "additional_fields":null, "description":"", "image":"https://cp.easydonate.ru/storage/app/uploads/public/605/dbc/33d/605dbc33d4ef6691959726.png", "first_delete":0, "shop_id":531, "created_at":"2021-03-26 13:49:24", "updated_at":"2021-03-26 13:49:24",
"sort_index":1 } ] } ] }');

$data_servers = json_decode('{ "success":1, "response":[{     "id":965,     "name":"Выживание",     "ip":"alcor.mcstudio.pro",     "port":"25641",     "rcon_port":"25573",     "rcon_password":"qwerty",     "version":"",     "is_port_hidden":0,     "hide_ip":0,     "is_hidden":0,     "shop_id":531,     "created_at":"2021-02-22 17:44:47",     "updated_at":"2021-03-26 13:51:42",     "withdraw_commands":null,     "withdraw_commands_days":null,     "additional_fields":null,     "description":"",     "image":"https://cp.easydonate.ru/storage/app/uploads/public/605/dbc/33d/605dbc33d4ef6691959726.png",     "first_delete":0,     "shop_id":531,     "created_at":"2021-03-26 13:49:24",     "updated_at":"2021-03-26 13:49:24",      "sort_index":1     }] }');

@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .bg-gray-100 {
                --tw-bg-opacity: 1;
                background-color: rgba(249,249,249,var(--tw-bg-opacity));
            }

            .text-gray-600 {
                --tw-text-opacity: 1;
                color: rgba(116,127,148,var(--tw-bg-opacity));
            }
        </style>


        <style>
            body {
                font-family: 'Nunito', sans-serif !important;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-white sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1 class="flex justify-start text-3xl font-bold items-center pt-8">
                    <img src="https://vk.com/sticker/1-13035-128" alt="Resee & EasyDonate" class="md:w-24 sm:w-20 w-16 mr-4">Resee & EasyDonate
                </h1>

                <div class="mt-8 bg-gray-100 overflow-hidden sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://easydonate.ru/api/v1/shop/{{ config('easydonate.key') }}" class="text-gray-900" target="_blank">Получение информации о магазине</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus eos est nihil quidem repellat tenetur.
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://easydonate.ru/api/v1/shop/{{ config('easydonate.key') }}" class="text-gray-900" target="_blank">Получение информации о магазине</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ducimus eos est nihil quidem repellat tenetur.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="flex justify-start text-xl font-bold items-center pt-8 pl-4 md:pl-0">
                    Список товаров
                </h2>

                <div class="mt-2 bg-gray-100 overflow-hidden sm:rounded-lg">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        @foreach($data_products->response[0]->products as $product)
                            <div class="p-6">
                                <div class="flex items-center">
                                    <img class="w-16" src="{{ $product->image }}" alt="Изображение - {{ $product->name }}">
                                    <div class="ml-4 text-lg leading-7 font-semibold">
                                        <a href="#/{{ $product->name }}" class="text-gray-900">{{ $product->name }}</a>
                                        <div class="text-gray-600 text-sm">Стоимость - {{ $product->price }}.00₽</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <h2 class="flex justify-start text-xl font-bold items-center pt-8 pl-4 md:pl-0">
                    Список серверов
                </h2>

                <div class="mt-2 bg-gray-100 overflow-hidden sm:rounded-lg">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        @foreach($data_servers->response as $server)
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold w-full">
                                        <a href="#/{{ $server->name }}" class="flex justify-between text-gray-900">{{ $server->name }} <span>{{ $server->ip }}</span></a>
                                        <div class="text-gray-600 text-sm">Minecraft {{ $server->version }}</div>
                                        <div class="progress-bar mt-4 h-2 bg-gray-100 rounded-md">
                                            <div class="progress-bar__status rounded-md h-2 w-3/5 bg-green-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold w-full">
                                        <a href="#/{{ $server->name }}" class="flex justify-between text-gray-900">{{ $server->name }} <span>{{ $server->ip }}</span></a>
                                        <div class="text-gray-600 text-sm">Minecraft {{ $server->version }}</div>
                                        <div class="progress-bar mt-4 h-2 bg-gray-100 rounded-md">
                                            <div class="progress-bar__status rounded-md h-2 w-3/5 bg-green-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold w-full">
                                        <a href="#/{{ $server->name }}" class="flex justify-between text-gray-900">{{ $server->name }} <span>{{ $server->ip }}</span></a>
                                        <div class="text-gray-600 text-sm">Minecraft {{ $server->version }}</div>
                                        <div class="progress-bar mt-4 h-2 bg-gray-100 rounded-md">
                                            <div class="progress-bar__status rounded-md h-2 w-3/5 bg-green-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold w-full">
                                        <a href="#/{{ $server->name }}" class="flex justify-between text-gray-900">{{ $server->name }} <span>{{ $server->ip }}</span></a>
                                        <div class="text-gray-600 text-sm">Minecraft {{ $server->version }}</div>
                                        <div class="progress-bar mt-4 h-2 bg-gray-100 rounded-md">
                                            <div class="progress-bar__status rounded-md h-2 w-3/5 bg-green-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        {{ env('EASYDONATE_KEY') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

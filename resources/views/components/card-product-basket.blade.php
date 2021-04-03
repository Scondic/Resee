<div class="flex bg-white rounded-md p-4" style="background-color: #ffffff">
    <div class="flex justify-center items-center bg-fill rounded-md p-8">
        <img class="w-12" src="{{ $product->image }}" alt="Изображение - {{ $product->name }}">
    </div>
    <div class="flex flex-col justify-between w-full pl-4">
        <div class="">
            <h5 class="">{{ $product->name }}</h5>
            <div class="font-medium text-light">{{ $product->price }} ₽ за {{ $product->count }} шт.</div>
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
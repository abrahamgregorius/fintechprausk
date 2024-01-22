@extends('layout.app')
@section('content')

<div class="products-header flex flex-row justify-between items-center mb-4">
    <h1 class="text-2xl">Products</h1>
    <p>Balance: <span class="px-4 py-2 bg-green-500 rounded">${{ $balance }}</span></p>
</div>
<div class="products-body">
    <div class="grid grid-cols-4 gap-8">
        @foreach ($products as $product)
        <div class="product rounded shadow-slate-500 shadow-lg">
            <div class="product-head">
                <img class="rounded-tr rounded-tl w-full h-[200px] object-cover object-center" src="{{ $product->thumbnail }}" alt="">
            </div>
            <div class="product-body p-4 rounded-br rounded-bl  border-black">
                <div class="product-body-desc mb-4">
                    <h1 class="text-2xl font-semibold">{{ $product->name }}</h1>
                    <p class="">Stock: {{ $product->stock }}</p>
                    <p class="text-red-500 font-black text-xl">${{ $product->price }}</p>
                </div>
                <div class="product-body-button">
                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="px-2 py-1 bg-red-300 hover:bg-red-400 hover:shadow-lg hover:shadow-slate-400 transition rounded w-full">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection

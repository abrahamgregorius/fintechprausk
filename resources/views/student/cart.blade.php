@extends('layout.app')
@section('content')

<div class="cart-head mb-4 flex flex-row justify-between items-center">
    <h1 class="text-2xl">Cart</h1>
    <p>Balance: <span class="px-4 py-2 bg-green-500 rounded">${{ $balance }}</span></p>
</div>
<div class="cart-body">
    <table class="border w-full">
        <thead>
            <tr class="border">
                <th class="border border-black px-4 py-2">Product</th>
                <th class="border border-black px-4 py-2">Category</th>
                <th class="border border-black px-4 py-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
                <tr class="border border-black">
                    <td class="border border-black p-2 text-center">{{ $item->product->name }}</td>
                    <td class="border border-black p-2 text-center">{{ $item->product->category->name }}</td>
                    <td class="border border-black p-2 text-center">{{ $item->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-foot w-full flex items-end flex-col justify-end my-4">
    <p class="text-xl">Total Price: <span class="font-black">${{ $total_price }}</span></p>
</div>

<form action="/student/cart" method="POST">
    @csrf
    <button class="w-full bg-red-500 hover:bg-red-400 transition py-2 px-4">Pay now</button>
</form>

@endsection

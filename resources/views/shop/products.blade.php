@extends('layout.app')
@section('content')
    <div class="products-header mb-8 flex justify-between items-center">
        <h1 class="text-4xl">Products</h1>
        <a href="/products/add">
            <button class="px-4 py-2 bg-slate-300 hover:bg-slate-400 transition rounded">Add new</button>
        </a>
    </div>

    <div class="products-body">
        <table class="border w-full">
            <thead>
                <tr class="border">
                    <th class="border border-black px-4 py-2">ID</th>
                    <th class="border border-black px-4 py-2">Thumbnail</th>
                    <th class="border border-black px-4 py-2">Product Name</th>
                    <th class="border border-black px-4 py-2">Category</th>
                    <th class="border border-black px-4 py-2">Price</th>
                    <th class="border border-black px-4 py-2">Available Stock</th>
                    <th class="border border-black px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border border-black">
                        <td class="border p-2 text-center border-black">{{ $product->id }}</td>
                        <td class="border p-2 text-center  flex justify-center items-center">
                            <img src="{{ $product->thumbnail }}" class="h-[100px] object-cover object-center" alt="">
                        </td>
                        <td class="border p-2 text-center border-black">{{ $product->name }}</td>
                        <td class="border p-2 text-center border-black">{{ $product->category->name }}</td>
                        <td class="border p-2 text-center border-black">{{ $product->price }}</td>
                        <td class="border p-2 text-center border-black">{{ $product->stock }}</td>
                        <td class="border p-2 text-center border-black">
                            <div class="buttons flex gap-2 justify-center w-full">
                                <a href="/products/{{ $product->id }}"><button class="bg-yellow-300 hover:bg-yellow-400 py-2 px-4 rounded transition">Edit</button></a>
                                <form action="/products/{{ $product->id }}/delete" method="POST">
                                    @csrf
                                    <button class="bg-red-300 hover:bg-red-400 py-2 px-4 rounded transition">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection

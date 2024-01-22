@extends('layout.app')
@section('content')

<h1 class="text-4xl mb-4">Create new Product</h1>

<form action="/products/add" method="POST" class="form-create flex flex-col gap-4">
    @csrf
    <div class="form-input flex flex-col">
        <label for="name">Name</label>
        <input class="border border-black rounded py-2 px-4 w-full" type="text" name="name" id="name">
    </div>
    <div class="form-input flex flex-col">
        <label for="category">Category</label>
        <select class="border border-black rounded py-2 px-4 w-full" name="category_id" id="category">
            <option value="">--SELECT AN OPTION--</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-input flex flex-col">
        <label for="stock">Stock</label>
        <input class="border border-black rounded py-2 px-4 w-full" type="text" name="stock" id="stock">
    </div>
    <div class="form-input flex flex-col">
        <label for="price">Price</label>
        <input class="border border-black rounded py-2 px-4 w-full" type="text" name="price" id="price">
    </div>
    <div class="form-input flex flex-col">
        <label for="thumbnail">humbnail</label>
        <input class="border border-black rounded py-2 px-4 w-full" type="text" name="thumbnail" id="thumbnail">
    </div>
    <div class="form-input flex flex-col">
        <button class="w-full bg-slate-300 hover:bg-slate-400 transition rounded py-2">Create</button>
    </div>
</form>


@endsection

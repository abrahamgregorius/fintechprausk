@extends('layout.app')
@section('content')
    <div class="topup-header flex items-center justify-between">
        <h1 class="text-2xl">Topup</h1>
        <p>Balance: <span class="px-4 py-2 bg-green-500 rounded">${{ $balance }}</span></p>
    </div>
    <div class="topup-body mt-4">
        <form action="/student/topup" class="form-create flex flex-col gap-4" method="POST">
            @csrf
            <div class="form-input flex flex-col">
                <label for="credit">Amount</label>
                <input type="number" class="border border-black rounded py-2 px-4 w-full" name="credit" id="credit">
            </div>
            <div class="form-input">
                <button class="w-full bg-slate-300 hover:bg-slate-400 transition rounded py-2">Top up</button>
            </div>
        </form>
    </div>


@endsection

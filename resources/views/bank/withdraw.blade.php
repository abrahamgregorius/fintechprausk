@extends('layout.app')
@section('content')
    <div class="topup-header flex items-center justify-between">
        <h1 class="text-2xl">Withdraw</h1>
    </div>
    <div class="topup-body mt-4">
        <form action="/withdraw" class="form-create flex flex-col gap-4" method="POST">
            @csrf
            <div class="form-input flex flex-col">
                <label for="user">User</label>
                <select name="user_id" class="border border-black rounded py-2 px-4 w-full" id="user">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-input flex flex-col">
                <label for="debit">Amount</label>
                <input type="number" class="border border-black rounded py-2 px-4 w-full" name="debit" id="debit">
            </div>
            <div class="form-input">
                <button class="w-full bg-slate-300 hover:bg-slate-400 transition rounded py-2">Withdraw</button>
            </div>
        </form>
    </div>


@endsection
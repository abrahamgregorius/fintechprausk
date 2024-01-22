@extends('layout.app')
@section('content')
<div class="pastcart-head mb-4">
    <h1 class="text-2xl">Past Orders</h1>
</div>

<div class="pastcart-body">
    @foreach($transactions as $code => $transactionGroup)
            <div class="border rounded p-4 mb-4">
                @php
                    $transac = $transactionGroup[0];
                @endphp
                <h3 class="text-lg font-bold mb-2">TR_{{ $code }}</h3>
                <p class="">{{ $transac->created_at }}</p>
                <ul class="list-none p-0 m-0">
                    @php
                        $totalPrice = 0;
                    @endphp

                    @foreach($transactionGroup as $transaction)
                        <li class="border-b py-2">
                            <strong class="font-semibold">Product:</strong> {{ $transaction->product->name }}<br>
                            <strong class="font-semibold">Price:</strong> ${{ $transaction->product->price }}<br>
                        </li>

                        @php
                            $totalPrice += $transaction->product->price;
                        @endphp
                    @endforeach
                </ul>

                <div class="mt-2">
                    <strong class="font-semibold">Total Price: ${{ $totalPrice }}</strong>
                </div>
            </div>
        @endforeach
</div>


@endsection
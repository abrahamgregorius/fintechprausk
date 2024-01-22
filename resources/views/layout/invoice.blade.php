<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <script>window.print()</script>
</head>
<body>
    <div class="border rounded p-4 mb-4">
        <h3 class="text-lg font-bold mb-2">TR_{{ $code }}</h3>
        <p class="">{{ $transaction[0]->created_at }}</p>
        <ul class="list-none p-0 m-0">
            @php
                $totalPrice = 0;
            @endphp

            @foreach($transaction as $trans)
                <li class="border-b py-2">
                    <strong class="font-semibold">Product:</strong> {{ $trans->product->name }}<br>
                    <strong class="font-semibold">Price:</strong> ${{ $trans->product->price }}<br>
                </li>

                @php
                    $totalPrice += $trans->product->price;
                @endphp
            @endforeach
        </ul>

        <div class="mt-2">
            <strong class="font-semibold">Total Price: ${{ $totalPrice }}</strong>
        </div>
    </div>
</body>
</html>
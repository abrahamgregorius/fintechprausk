@extends('layout.app')
@section('content')

<div class="transaction-head">
    <h1 class="text-2xl">Transaction</h1>
</div>
<div class="transaction-body">
    <table class="border w-full">
        <thead>
            <tr class="border">
                <th class="border border-black px-4 py-2">ID</th>
                <th class="border border-black px-4 py-2">User</th>
                <th class="border border-black px-4 py-2">Credit</th>
                <th class="border border-black px-4 py-2">Debit</th>
                <th class="border border-black px-4 py-2">Status</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($wallets as $wallet)
                <tr class="border border-black">
                    <td class="border p-2 text-center border-black">{{ $wallet->id }}</td>
                    <td class="border p-2 text-center border-black">{{ $wallet->user->username }}</td>
                    <td class="border p-2 text-center border-black">
                        @if ($wallet->credit)
                            {{ $wallet->credit }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="border p-2 text-center border-black">
                        @if ($wallet->debit)
                            {{ $wallet->debit }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="border p-2 text-center border-black">
                        {{ $wallet->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

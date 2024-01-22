<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PraUSK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="sidebar h-full w-[200px] fixed bg-slate-300">
        <div class="sidebar-item flex flex-col p-4 gap-2">
            @if(auth()->user()->role == 'bank')
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/">Home</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/topup">Top-up</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/withdraw">Withdraw</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/topup/pending">Pending Transactions</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/transactions">Transactions</a>
            @elseif(auth()->user()->role == 'shop')
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/">Home</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/products">Products</a>
            @elseif(auth()->user()->role == 'student')
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/">Home</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/student/products">Products</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/student/cart">Cart</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/student/topup">Topup</a>
            <a class="hover:bg-slate-100 transition p-1 rounded" href="/student/transaction">Transactions</a>
            @endif
        </div>
        <div class="sidebar-logout fixed bottom-0 mb-4 ml-4">
            <div class="profile flex flex-col justify-center gap-2 items-center">
                <div class="profile-desc flex items-center flex-row text-xl select-none">
                    &#10033; {{ auth()->user()->username }}
                </div>
                <div class="btn-logout">
                    <form action="/logout" method="GET">
                        @csrf
                        <button class="bg-slate-400 hover:bg-slate-500 p-2 rounded">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="content ml-[200px] p-8">
        @yield('content')
    </div>
</body>
</html>

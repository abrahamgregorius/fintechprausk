<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="app h-screen w-full flex flex-col justify-center items-center">
        <h1 class="text-3xl mb-4 font-semibold">Login</h1>
        @session('status')
            <p class="px-4 py-2 bg-red-300 rounded">{{ session('status') }}</p>
        @endsession
        <form action="/" method="POST" class="login-form flex gap-4 flex-col">
            @csrf
            <div class="form-input flex flex-col">
                <label for="username">Username</label>
                <input type="text" class="border px-4 py-2 rounded border-black" name="username" id="username">
            </div>
            <div class="form-input flex flex-col">
                <label for="password">Password</label>
                <input type="password" class="border px-4 py-2 rounded border-black" name="password" id="password">
            </div>
            <div class="form-input flex flex-col">
                <button class="px-4 py-2 bg-slate-300 hover:bg-slate-400 transition rounded">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

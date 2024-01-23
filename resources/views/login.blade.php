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
    <div class="app flex flex-row justify-between">
        <div class="login-left h-screen w-[50%] bg-slate-300">
            <img class="w-full h-screen w-[50%] object-cover object-center" src="https://images.unsplash.com/photo-1601597110547-78516f198ce4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8YmFua3x8fHx8fDE3MDU5Nzk4NDA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080" alt="">
        </div>
        <div class="login-right h-screen w-[50%] flex flex-col justify-center items-center">
            {{-- <div class="login-right-head text-center mb-4">
                <h1 class="text-4xl font-semibold">Welcome to SakuSehat!</h1>
                <p>Your best financial buddy</p>
            </div> --}}

            <div class="form flex justify-start flex-col">
                <h2 class="text-3xl mb-4 font-semibold">Log in</h2>
                @session('status')
                    <p class="px-4 py-2 bg-red-300 rounded">{{ session('status') }}</p>
                @endsession
                <form action="/" method="POST" class="login-form flex gap-4 flex-col">
                    @csrf
                    <div class="form-input flex flex-col">
                        <label for="username">Username</label>
                        <input type="text" class="border px-4 py-2 rounded min-w-[20rem] border-black" name="username" id="username">
                    </div>
                    <div class="form-input flex flex-col">
                        <label for="password">Password</label>
                        <input type="password" class="border px-4 py-2 rounded min-w-[20rem] border-black" name="password" id="password">
                    </div>
                    <div class="form-input flex flex-col">
                        <button class="px-4 py-2 bg-slate-700 text-white hover:bg-slate-400 transition rounded min-w-[20rem]">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | REGEN ARDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <a href="/" class="text-2xl font-black">
            REGEN<span class="text-emerald-500">.</span>
        </a>

        <div class="mt-8 rounded-2xl border border-gray-200 p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-widest text-emerald-600">
                Create an account
            </p>

            <h1 class="mt-3 text-3xl font-black">Join REGEN ARDA.</h1>
            <p class="mt-2 mb-7 text-gray-500">
                Register to access your account.
            </p>

            <form action="/register" method="POST">
                @csrf

                <label class="block mb-2 font-medium">Full Name</label>
                <input type="text" name="name" required
                    placeholder="Enter your full name"
                    class="w-full rounded-lg border p-3 mb-5">

                <label class="block mb-2 font-medium">Email Address</label>
                <input type="email" name="email" required
                    placeholder="you@example.com"
                    class="w-full rounded-lg border p-3 mb-5">

                <label class="block mb-2 font-medium">Password</label>
                <input type="password" name="password" required minlength="8"
                    placeholder="At least 8 characters"
                    class="w-full rounded-lg border p-3 mb-5">

                <label class="block mb-2 font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" required minlength="8"
                    placeholder="Enter password again"
                    class="w-full rounded-lg border p-3 mb-6">

                <button type="submit"
                    class="w-full rounded-lg bg-emerald-500 p-3 font-bold hover:bg-emerald-400">
                    Create Account
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="/login" class="font-bold text-emerald-600">Login</a>
            </p>
        </div>
    </div>

</body>
</html>

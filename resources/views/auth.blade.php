
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register | REGEN ARDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white text-gray-900">

<div class="min-h-screen grid lg:grid-cols-2">

    <!-- LEFT SIDE -->
    <section class="hidden lg:flex bg-black text-white p-12 flex-col justify-between">
        <a href="/" class="text-3xl font-black">
            REGEN<span class="text-emerald-400">.</span>
        </a>

        <div>
            <p class="text-emerald-400 tracking-widest text-sm font-bold">
                REGEN ARDA'S PORTFOLIO
            </p>
            <h1 class="text-6xl font-black leading-tight mt-5">
                Ideas into
                <span class="text-emerald-400">Digital.</span>
            </h1>
            <p class="text-gray-400 mt-6 max-w-md leading-7">
                Access your portfolio dashboard and manage your digital projects.
            </p>
        </div>

        <p class="text-gray-500 text-sm">
            © {{ date('Y') }} REGEN ARDA
        </p>
    </section>

    <!-- RIGHT SIDE -->
    <section class="flex items-center justify-center p-6 sm:p-12">
        <div class="w-full max-w-md">

            <a href="/" class="text-2xl font-black lg:hidden">
                REGEN<span class="text-emerald-500">.</span>
            </a>

            <p class="text-sm font-bold tracking-widest text-emerald-600 mt-8">
                YOUR PORTFOLIO ACCOUNT
            </p>

            <h2 id="pageTitle" class="text-4xl font-black mt-3">
                Welcome back.
            </h2>

            <p id="pageDescription" class="text-gray-500 mt-3 mb-8">
                Log in to access your dashboard.
            </p>

            <!-- LOGIN / REGISTER BUTTONS -->
            <div class="grid grid-cols-2 gap-2 p-1 bg-gray-100 rounded-xl mb-8">
                <button type="button" id="loginTab"
                    onclick="showForm('login')"
                    class="rounded-lg py-3 font-bold bg-black text-white">
                    Login
                </button>

                <button type="button" id="registerTab"
                    onclick="showForm('register')"
                    class="rounded-lg py-3 font-bold text-gray-600">
                    Register
                </button>
            </div>

            <!-- ERROR MESSAGES -->
            @if ($errors->any())
                <div class="mb-5 rounded-lg bg-red-50 border border-red-200 p-4 text-sm text-red-700">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="mb-5 rounded-lg bg-emerald-50 border border-emerald-200 p-4 text-sm text-emerald-700">
                    {{ session('success') }}
                </div>
            @endif

            <!-- LOGIN FORM -->
            <form id="loginForm" action="{{ route('login.store') }}"
                method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="login-email" class="block text-sm font-semibold mb-2">
                        Email Address
                    </label>
                    <input id="login-email" name="email" type="email"
                        value="{{ old('email') }}" required autocomplete="email"
                        placeholder="you@example.com"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="login-password" class="block text-sm font-semibold mb-2">
                        Password
                    </label>
                    <input id="login-password" name="password" type="password"
                        required autocomplete="current-password"
                        placeholder="Enter your password"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="accent-emerald-500">
                    Remember me
                </label>

                <button type="submit"
                    class="w-full bg-black text-white rounded-lg p-4 font-bold hover:bg-emerald-600">
                    Log In →
                </button>

                <p class="text-center text-sm text-gray-500">
                    No account yet?
                    <button type="button" onclick="showForm('register')"
                        class="font-bold text-emerald-700 underline">
                        Register here
                    </button>
                </p>
            </form>

            <!-- REGISTER FORM -->
            <form id="registerForm" action="{{ route('register.store') }}"
                method="POST" class="hidden space-y-5">
                @csrf

                <div>
                    <label for="register-name" class="block text-sm font-semibold mb-2">
                        Full Name
                    </label>
                    <input id="register-name" name="name" type="text"
                        value="{{ old('name') }}" required maxlength="255"
                        autocomplete="name" placeholder="Enter your full name"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="register-email" class="block text-sm font-semibold mb-2">
                        Email Address
                    </label>
                    <input id="register-email" name="email" type="email"
                        value="{{ old('email') }}" required autocomplete="email"
                        placeholder="you@example.com"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="register-password" class="block text-sm font-semibold mb-2">
                        Password
                    </label>
                    <input id="register-password" name="password" type="password"
                        required minlength="8" autocomplete="new-password"
                        placeholder="At least 8 characters"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="register-confirm" class="block text-sm font-semibold mb-2">
                        Confirm Password
                    </label>
                    <input id="register-confirm" name="password_confirmation"
                        type="password" required minlength="8"
                        autocomplete="new-password" placeholder="Repeat your password"
                        class="w-full rounded-lg border border-gray-300 p-3 outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <button type="submit"
                    class="w-full bg-emerald-500 text-black rounded-lg p-4 font-bold hover:bg-emerald-400">
                    Create My Account →
                </button>

                <p class="text-center text-sm text-gray-500">
                    Already have an account?
                    <button type="button" onclick="showForm('login')"
                        class="font-bold text-emerald-700 underline">
                        Log in
                    </button>
                </p>
            </form>

            <a href="/" class="block text-center text-sm text-gray-500 mt-8 hover:text-emerald-600">
                ← Back to homepage
            </a>

        </div>
    </section>
</div>

<script>
    function showForm(type) {
        const isRegister = type === 'register';

        document.getElementById('loginForm').classList.toggle('hidden', isRegister);
        document.getElementById('registerForm').classList.toggle('hidden', !isRegister);

        document.getElementById('loginTab').className = isRegister
            ? 'rounded-lg py-3 font-bold text-gray-600'
            : 'rounded-lg py-3 font-bold bg-black text-white';

        document.getElementById('registerTab').className = isRegister
            ? 'rounded-lg py-3 font-bold bg-black text-white'
            : 'rounded-lg py-3 font-bold text-gray-600';

        document.getElementById('pageTitle').textContent =
            isRegister ? 'Create account.' : 'Welcome back.';

        document.getElementById('pageDescription').textContent =
            isRegister
                ? 'Register to access your portfolio dashboard.'
                : 'Log in to access your dashboard.';
    }

    @if ($errors->any() && old('name'))
        showForm('register');
    @endif
</script>

</body>
</html>

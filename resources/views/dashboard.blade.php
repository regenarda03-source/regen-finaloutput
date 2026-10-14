
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | REGEN ARDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-black text-white p-6 hidden md:flex flex-col">
        <a href="/" class="text-2xl font-black">
            REGEN<span class="text-emerald-400">.</span>
        </a>

        <p class="text-xs text-gray-400 mt-2 mb-10 tracking-widest">
            PORTFOLIO ADMIN
        </p>

        <nav class="space-y-3">
            <a href="/dashboard"
               class="block rounded-lg bg-emerald-500 text-black font-bold p-3">
                Dashboard
            </a>
            <a href="/products"
               class="block rounded-lg p-3 text-gray-300 hover:bg-gray-800">
                Products
            </a>
            <a href="/#home"
               class="block rounded-lg p-3 text-gray-300 hover:bg-gray-800">
                View Portfolio
            </a>
            <a href="/login"
               class="block rounded-lg p-3 text-gray-300 hover:bg-gray-800">
                Logout
            </a>
        </nav>

        <div class="mt-auto border-t border-gray-700 pt-5">
            <p class="text-sm font-semibold">Regen Arda</p>
            <p class="text-xs text-gray-400">IT / Developer</p>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-6 md:p-10">

        <header class="flex flex-wrap items-center justify-between gap-4 mb-10">
            <div>
                <p class="text-sm text-emerald-600 font-bold tracking-widest">
                    OVERVIEW
                </p>
                <h1 class="text-3xl md:text-4xl font-black mt-2">
                    Dashboard
                </h1>
                <p class="text-gray-500 mt-2">
                    Welcome back, Regen. Here's your portfolio overview.
                </p>
            </div>

            <a href="/"
               class="bg-black text-white px-5 py-3 font-semibold hover:bg-emerald-600">
                View Website ↗
            </a>
        </header>

        <!-- STATISTICS -->
        <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-10">

            <div class="bg-white p-6 rounded-xl border">
                <p class="text-sm text-gray-500">Total Projects</p>
                <h2 class="text-4xl font-black mt-3">08</h2>
                <p class="text-sm text-emerald-600 mt-3">Portfolio projects</p>
            </div>

            <div class="bg-white p-6 rounded-xl border">
                <p class="text-sm text-gray-500">Skills Listed</p>
                <h2 class="text-4xl font-black mt-3">06</h2>
                <p class="text-sm text-emerald-600 mt-3">Technical skills</p>
            </div>

            <div class="bg-white p-6 rounded-xl border">
                <p class="text-sm text-gray-500">Products</p>
                <h2 class="text-4xl font-black mt-3">12</h2>
                <p class="text-sm text-gray-500 mt-3">Sample data</p>
            </div>

            <div class="bg-white p-6 rounded-xl border">
                <p class="text-sm text-gray-500">Account Status</p>
                <h2 class="text-2xl font-black mt-3">Active</h2>
                <p class="text-sm text-emerald-600 mt-3">Dashboard preview</p>
            </div>

        </section>

        <!-- RECENT PROJECTS -->
        <section class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            <div class="xl:col-span-2 bg-white rounded-xl border p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-black">Recent Projects</h2>
                    <span class="text-sm text-gray-500">Portfolio</span>
                </div>

                <div class="space-y-4">

                    <div class="flex items-center gap-4 border-b pb-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center font-black text-emerald-700">
                            01
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold">Personal Portfolio</h3>
                            <p class="text-sm text-gray-500">Laravel · Tailwind CSS</p>
                        </div>
                        <span class="text-xs bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full">
                            Active
                        </span>
                    </div>

                    <div class="flex items-center gap-4 border-b pb-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center font-black">
                            02
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold">TAPTAP Speed Game</h3>
                            <p class="text-sm text-gray-500">HTML · CSS · JavaScript</p>
                        </div>
                        <span class="text-xs bg-gray-100 px-3 py-1 rounded-full">
                            Development
                        </span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center font-black">
                            03
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold">Product Management System</h3>
                            <p class="text-sm text-gray-500">Laravel · MySQL</p>
                        </div>
                        <span class="text-xs bg-gray-100 px-3 py-1 rounded-full">
                            Planned
                        </span>
                    </div>

                </div>
            </div>

            <!-- PROFILE CARD -->
            <div class="bg-black text-white rounded-xl p-6">
                <p class="text-xs text-emerald-400 tracking-widest font-bold">
                    YOUR PROFILE
                </p>

                <div class="mt-6 w-20 h-20 bg-emerald-500 text-black flex items-center justify-center text-3xl font-black">
                    RA
                </div>

                <h2 class="text-2xl font-black mt-5">Regen Arda</h2>
                <p class="text-emerald-400 font-medium mt-1">
                    Aspiring IT Professional
                </p>

                <p class="text-sm text-gray-300 mt-5 leading-6">
                    Learning programming, web development, database
                    management, and modern digital technologies.
                </p>

                <a href="/#about"
                   class="inline-block mt-6 border border-emerald-400 px-4 py-2 text-sm hover:bg-emerald-500 hover:text-black">
                    About Me ↗
                </a>
            </div>

        </section>

        <!-- QUICK ACTIONS -->
        <section class="mt-8 bg-white rounded-xl border p-6">
            <h2 class="text-xl font-black mb-4">Quick Actions</h2>

            <div class="flex flex-wrap gap-3">
                <a href="/products"
                   class="bg-emerald-500 px-5 py-3 font-bold hover:bg-emerald-400">
                    Manage Products +
                </a>

                <a href="/"
                   class="border border-gray-300 px-5 py-3 font-semibold hover:bg-gray-100">
                    Edit Portfolio
                </a>
            </div>
        </section>

        <footer class="mt-10 text-sm text-gray-500">
            © {{ date('Y') }} REGEN ARDA'S PORTFOLIO · Dashboard Preview
        </footer>

    </main>
</div>

</body>
</html>

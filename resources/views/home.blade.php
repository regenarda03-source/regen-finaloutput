
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>REGEN ARDA | Developer Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .green-text {
            color: #16a34a;
        }

        .project-card {
            transition: transform 0.25s ease, border-color 0.25s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            border-color: #16a34a;
        }
    </style>
</head>

<body class="bg-white text-neutral-900">

    <!-- NAVIGATION -->
    <header class="border-b border-neutral-200">
        <nav class="max-w-7xl mx-auto px-6 lg:px-12 py-6
                    flex justify-between items-center">

            <a href="#home" class="text-xl font-black tracking-tight">
                REGEN<span class="text-green-600">.</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#home" class="hover:text-green-600">Home</a>
                <a href="#about" class="hover:text-green-600">About</a>
                <a href="#skills" class="hover:text-green-600">Skills</a>
                <a href="#projects" class="hover:text-green-600">Projects</a>
                <a href="#contact" class="hover:text-green-600">Contact</a>
            </div>

            <a href="{{ route('login') }}"
               class="bg-neutral-900 text-white px-5 py-3 text-sm
                      font-semibold hover:bg-green-600 transition">
                Admin Login ↗
            </a>
        </nav>
    </header>


    <!-- HOMEPAGE -->
    <main>

        <section id="home" class="max-w-7xl mx-auto px-6 lg:px-12
                                  py-20 md:py-32">

            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div>
                    <div class="flex items-center gap-3 mb-8">
                        <span class="w-10 h-px bg-green-600"></span>
                        <p class="text-sm font-semibold uppercase
                                  tracking-[0.2em] text-neutral-500">
                            Developer Portfolio
                        </p>
                    </div>

                    <h1 class="text-5xl md:text-7xl lg:text-8xl
                               font-black tracking-tight leading-none">
                        Ideas into
                        <span class="block green-text mt-3">
                            Digital.
                        </span>
                    </h1>

                    <p class="mt-8 text-lg leading-8 text-neutral-500
                              max-w-lg">
                        Hello, I'm Regen Arda. I am building my journey
                        in information technology through programming,
                        web development, and creative digital projects.
                    </p>

                    <div class="flex flex-wrap gap-4 mt-9">
                        <a href="#projects"
                           class="bg-green-600 text-white px-7 py-4
                                  text-sm font-bold hover:bg-green-700">
                            Explore Projects →
                        </a>

                        <a href="#about"
                           class="border border-neutral-300 px-7 py-4
                                  text-sm font-bold hover:border-green-600">
                            About Me
                        </a>
                    </div>

                    <div class="mt-14 pt-8 border-t border-neutral-200
                                grid grid-cols-3 gap-4">

                        <div>
                            <p class="text-2xl font-black">01</p>
                            <p class="text-xs text-neutral-500 mt-2">
                                Creativity
                            </p>
                        </div>

                        <div>
                            <p class="text-2xl font-black">02</p>
                            <p class="text-xs text-neutral-500 mt-2">
                                Development
                            </p>
                        </div>

                        <div>
                            <p class="text-2xl font-black">03</p>
                            <p class="text-xs text-neutral-500 mt-2">
                                Innovation
                            </p>
                        </div>

                    </div>
                </div>


                <!-- DISTINCTIVE PROFILE PANEL -->
                <div class="relative">

                    <div class="absolute -top-5 -right-5
                                w-24 h-24 border-t-4 border-r-4
                                border-green-600"></div>

                    <div class="bg-neutral-100 p-8 md:p-12
                                min-h-[420px] flex flex-col justify-between">

                        <div class="flex justify-between items-start">
                            <span class="text-xs uppercase tracking-widest
                                         text-neutral-500">
                                Personal Profile
                            </span>

                            <span class="bg-green-600 text-white
                                         px-3 py-2 text-xs font-bold">
                                IT / DEV
                            </span>
                        </div>

                        <div class="py-10">
                            <div class="w-32 h-32 bg-neutral-900
                                        text-white flex items-center
                                        justify-center text-5xl
                                        font-black mb-8">
                                RA
                            </div>

                            <h2 class="text-3xl md:text-4xl font-black">
                                Regen Arda
                            </h2>

                            <p class="text-green-700 font-semibold mt-3">
                                Aspiring IT Professional
                            </p>

                            <p class="text-neutral-500 leading-7 mt-5">
                                Learning to build practical, accessible,
                                and meaningful digital experiences.
                            </p>
                        </div>

                        <div class="flex justify-between items-center
                                    border-t border-neutral-300 pt-5">
                            <span class="text-sm text-neutral-500">
                                Based in the Philippines
                            </span>
                            <span class="text-green-600 font-bold">↗</span>
                        </div>

                    </div>

                    <div class="absolute -bottom-3 -left-3
                                w-16 h-16 bg-green-600 -z-10"></div>

                </div>

            </div>
        </section>


        <!-- ABOUT -->
        <section id="about" class="bg-neutral-950 text-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-24">

                <p class="text-green-400 text-sm font-bold uppercase
                          tracking-[0.2em]">
                    01 / Introduction
                </p>

                <div class="grid md:grid-cols-2 gap-12 mt-6">

                    <h2 class="text-4xl md:text-6xl font-black
                               leading-tight">
                        Curious mind.
                        <span class="block text-neutral-500">
                            Growing skills.
                        </span>
                    </h2>

                    <div>
                        <p class="text-neutral-400 leading-8">
                            I am Regen Arda, an aspiring IT professional
                            interested in programming, website creation,
                            and technology. I use every project as an
                            opportunity to improve my technical knowledge
                            and problem-solving abilities.
                        </p>

                        <p class="text-neutral-400 leading-8 mt-5">
                            My goal is to continue learning modern
                            development tools and create applications
                            that are useful, reliable, and easy to use.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- SKILLS -->
        <section id="skills">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-24">

                <p class="text-green-700 text-sm font-bold uppercase
                          tracking-[0.2em]">
                    02 / Capabilities
                </p>

                <h2 class="text-4xl md:text-5xl font-black mt-4">
                    Technical Toolkit
                </h2>

                <p class="text-neutral-500 mt-4">
                    Technologies I am learning and practicing.
                </p>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4
                            gap-5 mt-12">

                    <div class="border border-neutral-200 p-7
                                project-card">
                        <span class="text-green-600 text-sm font-bold">
                            01
                        </span>
                        <h3 class="text-xl font-black mt-7">
                            HTML & CSS
                        </h3>
                        <p class="text-neutral-500 text-sm leading-6 mt-3">
                            Structuring websites and creating clean layouts.
                        </p>
                    </div>

                    <div class="border border-neutral-200 p-7
                                project-card">
                        <span class="text-green-600 text-sm font-bold">
                            02
                        </span>
                        <h3 class="text-xl font-black mt-7">
                            Tailwind CSS
                        </h3>
                        <p class="text-neutral-500 text-sm leading-6 mt-3">
                            Building responsive user interfaces.
                        </p>
                    </div>

                    <div class="border border-neutral-200 p-7
                                project-card">
                        <span class="text-green-600 text-sm font-bold">
                            03
                        </span>
                        <h3 class="text-xl font-black mt-7">
                            Laravel
                        </h3>
                        <p class="text-neutral-500 text-sm leading-6 mt-3">
                            Learning routing, Blade, and web application logic.
                        </p>
                    </div>

                    <div class="border border-neutral-200 p-7
                                project-card">
                        <span class="text-green-600 text-sm font-bold">
                            04
                        </span>
                        <h3 class="text-xl font-black mt-7">
                            MySQL
                        </h3>
                        <p class="text-neutral-500 text-sm leading-6 mt-3">
                            Learning databases and data management.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <!-- PROJECTS -->
        <section id="projects" class="bg-neutral-100">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-24">

                <p class="text-green-700 text-sm font-bold uppercase
                          tracking-[0.2em]">
                    03 / Selected Work
                </p>

                <div class="flex flex-col md:flex-row
                            md:justify-between md:items-end gap-5 mt-4">

                    <h2 class="text-4xl md:text-5xl font-black">
                        Project Archive
                    </h2>

                    <p class="text-neutral-500 max-w-md leading-7">
                        A collection of learning projects and ideas
                        for future development.
                    </p>

                </div>

                <div class="grid md:grid-cols-3 gap-6 mt-12">

                    <article class="bg-white border border-neutral-200
                                    p-7 project-card">
                        <div class="h-44 bg-neutral-900 text-white
                                    flex items-center justify-center">
                            <span class="text-5xl font-black">01</span>
                        </div>

                        <p class="text-xs text-green-700 font-bold mt-7">
                            WEB DEVELOPMENT
                        </p>

                        <h3 class="text-xl font-black mt-2">
                            Portfolio Website
                        </h3>

                        <p class="text-sm text-neutral-500 leading-6 mt-3">
                            A personal website presenting background,
                            technical skills, and projects.
                        </p>
                    </article>

                    <article class="bg-white border border-neutral-200
                                    p-7 project-card">
                        <div class="h-44 bg-green-600 text-white
                                    flex items-center justify-center">
                            <span class="text-5xl font-black">02</span>
                        </div>

                        <p class="text-xs text-green-700 font-bold mt-7">
                            WEB APPLICATION
                        </p>

                        <h3 class="text-xl font-black mt-2">
                            Admin Dashboard
                        </h3>

                        <p class="text-sm text-neutral-500 leading-6 mt-3">
                            A dashboard concept for organizing
                            statistics and application information.
                        </p>
                    </article>

                    <article class="bg-white border border-neutral-200
                                    p-7 project-card">
                        <div class="h-44 bg-neutral-200 text-neutral-900
                                    flex items-center justify-center">
                            <span class="text-5xl font-black">03</span>
                        </div>

                        <p class="text-xs text-green-700 font-bold mt-7">
                            MANAGEMENT SYSTEM
                        </p>

                        <h3 class="text-xl font-black mt-2">
                            Product Manager
                        </h3>

                        <p class="text-sm text-neutral-500 leading-6 mt-3">
                            A product management concept for maintaining
                            prices, product details, and stock.
                        </p>
                    </article>

                </div>

                <p class="text-xs text-neutral-500 mt-6">
                    Note: These are portfolio project concepts until you
                    connect and complete the actual applications.
                </p>

            </div>
        </section>


        <!-- CONTACT -->
        <section id="contact">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-24">

                <p class="text-green-700 text-sm font-bold uppercase
                          tracking-[0.2em]">
                    04 / Contact
                </p>

                <div class="grid md:grid-cols-2 gap-10 mt-5
                            items-center">

                    <h2 class="text-4xl md:text-6xl font-black
                               leading-tight">
                        Have an idea?
                        <span class="block text-green-600">
                            Let's connect.
                        </span>
                    </h2>

                    <div>
                        <p class="text-neutral-500 leading-7">
                            Interested in technology, collaboration,
                            or development projects? Get in touch.
                        </p>

                        <a href="mailto:your-email@example.com"
                           class="inline-block mt-7 bg-neutral-900
                                  text-white px-7 py-4 font-bold
                                  hover:bg-green-600 transition">
                            Send an Email ↗
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <!-- FOOTER -->
    <footer class="bg-neutral-950 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-7
                    flex flex-col sm:flex-row justify-between gap-4">

            <p class="font-bold">
                REGEN<span class="text-green-500">.</span>
            </p>

            <p class="text-sm text-neutral-500">
                © {{ date('Y') }} Regen Arda. All rights reserved.
            </p>

            <a href="#home" class="text-sm text-green-400">
                Back to top ↑
            </a>

        </div>
    </footer>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Contentify — Content Management Reimagined</title>
    <meta name="description" content="Beautiful, fast and intuitive content management system homepage template." />
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Extra polish beyond Tailwind utilities */
        .glass {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.35));
            backdrop-filter: blur(8px) saturate(120%);
        }
    </style>
</head>

<body class="antialiased text-slate-800 bg-gradient-to-b from-sky-50 via-white to-indigo-50 min-h-screen">
    <!-- NAV -->
    <x-header>
        <x-slot name="nav">
            <nav class="hidden md:flex items-center gap-6 text-sm">
                <a href="#features" class="hover:text-indigo-600">Features</a>
                <a href="#editor" class="hover:text-indigo-600">Editor</a>
                <a href="#pricing" class="hover:text-indigo-600">Pricing</a>
                <a href="#docs" class="hover:text-indigo-600">Docs</a>
            </nav>
        </x-slot>
    </x-header>

    <!-- HERO -->
    <main class="max-w-7xl mx-auto px-6">
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12">
            <div>
                <h2 class="text-4xl sm:text-5xl font-extrabold leading-tight text-slate-900">Manage content faster.
                    Publish smarter.</h2>
                <p class="mt-4 text-lg text-slate-600">Drag-and-drop editor, collaborative workflows, media library and
                    versioning — all in one elegant interface built for speed and scale.</p>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="#signup"
                        class="inline-flex items-center gap-2 px-5 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">Start
                        free trial</a>
                    <a href="#demo"
                        class="inline-flex items-center gap-2 px-5 py-3 border border-slate-200 rounded-lg">Request
                        demo</a>
                </div>

                <div class="mt-8 grid grid-cols-3 gap-4 text-sm">
                    <div class="p-4 bg-white rounded-lg shadow-sm glass">
                        <div class="font-semibold">2,500+</div>
                        <div class="text-slate-500">Sites powered</div>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-sm glass">
                        <div class="font-semibold">99.99%</div>
                        <div class="text-slate-500">Uptime SLA</div>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-sm glass">
                        <div class="font-semibold">S: 10ms</div>
                        <div class="text-slate-500">Avg API latency</div>
                    </div>
                </div>
            </div>

            <!-- Mock editor preview -->
            <div class="relative">
                <div
                    class="rounded-2xl shadow-2xl overflow-hidden bg-gradient-to-b from-white/80 to-white/60 border border-white/60">
                    <div class="p-4 border-b border-slate-100 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-md bg-indigo-100 flex items-center justify-center">✍️</div>
                            <div>
                                <div class="text-sm font-medium">Landing Page — Home</div>
                                <div class="text-xs text-slate-400">Updated 2 hours ago</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="text-xs px-3 py-1 border rounded">Preview</button>
                            <button class="text-xs px-3 py-1 bg-indigo-600 text-white rounded">Publish</button>
                        </div>
                    </div>

                    <div class="p-6 md:p-8 bg-slate-50">
                        <div class="prose max-w-none">
                            <h3 class="text-xl font-semibold">Welcome to NovaCMS</h3>
                            <p>Create beautiful pages with an intuitive block editor. Drag, drop, and style text, images
                                and embeds in seconds.</p>
                            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="p-4 bg-white rounded-lg border">Text Block</div>
                                <div class="p-4 bg-white rounded-lg border">Hero Image</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating actions -->
                <div class="absolute -bottom-4 left-6 flex gap-3">
                    <button class="px-4 py-2 bg-white rounded-lg shadow">+ New Page</button>
                    <button class="px-4 py-2 bg-white rounded-lg shadow">Media Library</button>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section id="features" class="py-12">
            <h3 class="text-2xl font-bold">What you'll love</h3>
            <p class="mt-2 text-slate-600">Everything a modern team needs to make content — fast.</p>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="p-6 bg-white rounded-xl shadow hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-md bg-indigo-50">📁</div>
                        <div>
                            <h4 class="font-semibold">Powerful Media Library</h4>
                            <p class="text-sm text-slate-500">Organize images, videos and documents with tags, bulk
                                actions and CDN delivery.</p>
                        </div>
                    </div>
                </article>

                <article class="p-6 bg-white rounded-xl shadow hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-md bg-indigo-50">🧩</div>
                        <div>
                            <h4 class="font-semibold">Flexible Content Blocks</h4>
                            <p class="text-sm text-slate-500">Reusable components that let you build pages without code.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="p-6 bg-white rounded-xl shadow hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-md bg-indigo-50">👥</div>
                        <div>
                            <h4 class="font-semibold">Roles & Workflows</h4>
                            <p class="text-sm text-slate-500">Role-based permissions and editorial approvals for teams.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="p-6 bg-white rounded-xl shadow hover:shadow-lg">
                    <div class="flex items-center gap-3">
                        <div class="p-3 rounded-md bg-indigo-50">⚡</div>
                        <div>
                            <h4 class="font-semibold">Headless API</h4>
                            <p class="text-sm text-slate-500">Deliver content to web, mobile and IoT via fast GraphQL &
                                REST endpoints.</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- TWO COLUMN: Editor + Analytics -->
        <section id="editor" class="py-12 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            <div class="lg:col-span-2">
                <div class="p-6 bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow">
                    <h4 class="text-lg font-semibold">Editor highlights</h4>
                    <p class="text-sm mt-2 text-slate-600">Live collaboration, autosave, and a block-based editor make
                        content creation delightful.</p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="p-4 bg-white rounded-lg border">Collaboration (Live cursors)</div>
                        <div class="p-4 bg-white rounded-lg border">Autosave & Undo</div>
                        <div class="p-4 bg-white rounded-lg border">Custom fields & Schemas</div>
                        <div class="p-4 bg-white rounded-lg border">WYSIWYG + Markdown</div>
                    </div>
                </div>
            </div>

            <aside class="p-6 bg-white rounded-2xl shadow">
                <h5 class="font-semibold">Site analytics</h5>
                <div class="mt-4 text-sm text-slate-500">Quick snapshot of performance and traffic.</div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <div class="p-3 bg-slate-50 rounded">Visits<br /><span class="font-bold">12.4k</span></div>
                    <div class="p-3 bg-slate-50 rounded">Engagement<br /><span class="font-bold">4m</span></div>
                    <div class="p-3 bg-slate-50 rounded">Conversion<br /><span class="font-bold">3.2%</span></div>
                    <div class="p-3 bg-slate-50 rounded">Errors<br /><span class="font-bold">0</span></div>
                </div>
            </aside>
        </section>

        <!-- PRICING CTA -->
        <section id="pricing" class="py-12 bg-white rounded-2xl p-6 shadow my-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h4 class="text-xl font-semibold">Transparent pricing. One predictable bill.</h4>
                    <p class="mt-2 text-slate-600">From solo creators to growth teams — simple plans with enterprise
                        add-ons.</p>
                </div>
                <div class="flex gap-3">
                    <a href="#pricing" class="px-4 py-2 bg-indigo-600 text-white rounded-md">See plans</a>
                    <a href="#contact" class="px-4 py-2 border rounded-md">Contact sales</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <x-footer />
    </main>

    <!-- Small accessibility helper -->
    <script>
        // Simple keyboard focus ring for non-mouse users
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') document.documentElement.classList.add('user-tabbing');
        });
    </script>
</body>

</html>

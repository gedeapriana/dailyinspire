<!doctype html>
<html lang="id" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('storage/css/root.css') }}">
    <title></title>
    @stack('styles')
    @vite('resources/css/app.css')
</head>

<body class="h-screen w-full bg-zinc-50 dark:bg-slate-900 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-6 grid-rows-12">

    <aside id="sidebar-left" class="border-r border-slate-100 row-span-2 hidden md:flex md:row-span-12">
        @include('user.layouts.partials.sidebar-left')
    </aside>
    <nav id="navbar" class="border-b border-slate-100 col-span-2 md:col-span-7 xl:col-span-5">
        @include('user.layouts.partials.navbar')
    </nav>
    <main id="mainbar" class="row-span-11 md:col-span-7 xl:col-span-4 overflow-auto">

        @yield('mainbar')

    </main>
    <aside id="sidebar-right" class="border-l border-slate-100 hidden xl:flex xl:row-span-11 xl:col-span-1">
        @include('user.layouts.partials.sidebar-right')
    </aside>

    @stack('script')
</body>

</html>

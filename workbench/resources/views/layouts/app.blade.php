<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>

    <!-- Scripts -->
    <link rel="preconnect" href="{{ route('wordsphereui.assets.styles') }}">
    <link href="{{ route('wordsphereui.assets.styles') . '?' }}{{ now()->timestamp }}" rel="stylesheet">
</head>
<body class="font-sans text-gray-900 antialiased">
    <div>
        <header class="border-b border-gray-200">
            <div class="mx-auto px-4 sm:px-6 max-w-7xl flex items-center justify-between gap-3 h-[--header-height]">
                <span class="text-xl font-semibold lg:flex-1 gap:1.5">
                    WordSphere UI
                </span>
                <ul class="hidden lg:flex items-center gap-x-8">
                    <li>Docs</li>
                    <li>Releases</li>
                </ul>
                <div class="flex items-center justify-end lg:flex-1 gap:1.5">
                    Github
                </div>
            </div>
        </header>
        <div class="dark:bg-gray-900 dark:text-gray-100">
            <div class="mx-auto px-4 sm:px-6 max-w-7xl flex overflow-hidden sm:rounded-lg">
                <div class="w-60 py-10 pr-8">
                    <div class="space-y-4 flex flex-col">
                        <div>
                            <div class="font-semibold py-2.5 text-sm/6">Getting Started</div>
                            <ul class="pl-3">
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Introduction</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Installation</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="font-semibold py-2.5 text-sm">Components</div>
                            <ul class="pl-3">
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Accordion</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Alert</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Avatar</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Badge</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Breadcrumb</a>
                                </li>
                                <li class="text-sm/6">
                                    <a href="/getting-started" class="inline-block pl-4 py-1.5 border-l border-gray-200 text-gray-500">Button</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>

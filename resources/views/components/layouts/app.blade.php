<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
     
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="max-w-4xl mx-auto px-6 grid grid-cols-8  gap-12  mt-12">
            <div class="col-span-2 border-r border-gray-200 space-y-6">
                @auth
            <ul class="">
                <li>
                    <span class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">
                        {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">Feed</a>
                </li>
            </ul>

            <ul class="">
               
                <li>
                    <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">My books</a>
                </li>
                <li>
                    <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">Add a book</a>
                </li>
                <li>
                    <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">Friends</a>
                </li>
            </ul>
      @endauth

        @guest
        <ul class="">
            <li>
                <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="/register">Sign up</a>
            </li>
            <li>
                <a class="font-bold text-lg text-slate-400 hover:text-slate-600 block py-1" href="">Log in</a>
            </li>
        </ul>
        @endguest
          
            </div>
<div class="col-span-6">
    @isset($header)
    <h1 class="font-bold text-2xl text-slate-800">
        {{ $header }}
    </h1>
        
    @endisset
    
    {{ $slot }}
</div>
        </div>
    </body>
</html>

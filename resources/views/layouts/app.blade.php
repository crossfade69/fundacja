<!DOCTYPE html>
<html lang="pl">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fundacja Głos Młodych')</title>
    <link rel="icon" type="image/x-icon" href="/images/cropped-logo-32x32.webp">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/d96bec4722.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
    <div class="px-2 lg:px-9">
        @if(Request::is('/'))
            @include('partials.homenavbar')
        @else
            @include('partials.navbar')
        @endif

        <main class="w-full">
            @yield('content')
        </main>

        <footer class="h-auto my-5 bottom-0">
            <div class="bg-cover bg-center h-full" style="background-image: url(https://fundacjaglosmlodych.org/images/tlo1234.png);">
                <div class="grid grid-cols-2 gap-4 text-white text-sm pb-4">
                    <div class="flex flex-wrap justify-center gap-4 italic mt-6">
                        <h2>Oświadczenie</h2>
                        <h4 class="text-center">Niniejszym, w imieniu własnym oraz Fundacji na Rzecz Promocji i Rozwoju „Głos Młodych” deklarujemy, że Fundacja przyjmuje i stosuje zasady równego traktowania. Prowadzi działalność wolną od dyskryminacji, w szczególności ze względu na takie cechy jak płeć, rasa (kolor skóry), pochodzenie etniczne, narodowość bądź wyznania religijne.</h4>
                        <h5 class="ml-auto mr-24">Zarząd</h5>
                    </div>

                    <div class="flex-1 flex-wrap justify-self-center gap-4 italic relative">
                        <div>
                            <img class="max-h-28 mx-auto" src="https://fundacjaglosmlodych.org/images/cropped-logo_fgm-2-1.png" alt="Logo Fundacji">
                        </div>
                        <div class="absolute w-full top-24">
                            <h2 class="text-center text-xs"><strong>Wsparcie</strong></h2>
                            <h4 class="text-center text-xs">
                                Fundacja na Rzecz Promocji i Rozwoju „Głos Młodych”<br>
                                Konto: Bank Pekao SA. Poznań ul. Masztalerska 8a<br>
                                Nr Konta: <strong>92 1240 1763 1111 0010 7475 8053</strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center text-gray-400 italic mt-12">
                <a href="/" class="hover:text-blue-400">Copyright © <time>2025</time> Fundacja na rzecz promocji i rozwoju – Głos Młodych, Adrian Reszczyński and Dominik Głowacki<br> Witryna stworzona za pomocą Laravel</a>
            </div>

            <div class="flex flex-nowrap justify-center space-x-2.5 mt-11">
                @foreach ([
                    'https://www.facebook.com/Fundacja.Glos.Mlodych' => 'Facebook.png',
                    'https://twitter.com/Portal_e_magnes' => 'Twitter.png',
                    'mailto:kontakt@fundacjaglosmlodych.org' => 'Mail.png',
                    '/o-fundacji' => 'AboutMe.png',
                ] as $link => $image)
                    <a class="relative" href="{{ $link }}">
                        <img class="pointer-events-none relative z-10" src="https://fundacjaglosmlodych.org/images/{{ $image }}" alt="Social Link">
                        <div class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400"></div>
                    </a>
                @endforeach
            </div>
        </footer>
        </div>
    </body>
</html>
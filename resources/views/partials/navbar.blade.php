<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<header class="max-w-full bg-white cursor-pointer">
    <div class="flex justify-center items-center">
        <a href="{{ url('/') }}">
            <img class="h-42" src="https://fundacjaglosmlodych.org/images/cropped-logo_fgm-2-1.png" alt="Logo Fundacji">
        </a>
    </div>
</header>

<nav class="sticky top-0 z-50 bg-black text-white md:hidden">
    <ul class=" items-center align-middle justify-center text-base text-nowrap py-auto min-h-12">
        <li x-data="{ open: false }"
            class="flex flex-col block z-50 relative box-border cursor-pointer transform duration-300 w-full h-full items-center">
            <span @click="open = !open" class=" items-center mx-auto h-12 w-full">
                <p class="text-center leading-[45px] h-full"><i class="fa-solid fa-xl mx-auto" :class="open ? 'fa-xmark' : 'fa-bars'"></i></p>
            </span>

            <!-- Dropdown menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 -translate-x-6"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-out duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6"
    class="w-full block left-0 z-50 divide-y divide-teal-100 min-w-48">
    <ul class="flex flex-col text-xs text-gray-700">
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/" class="block py-2 w-full h-full"><p class="py-2 px-2">STRONA GŁÓWNA</p></a>
</li>

        <li x-data="{ open: false }" @click="open = !open" @mouseover="open = true" @mouseout="open = false"
            class="z-50 relative block cursor-pointer transform duration-300 w-full grow h-full items-center">
                <span class="block w-full">
                    <a :href="open ? '/o-fundacji' : 'javascript:void(0)'" class="py-4 inline-block h-full w-11/12"><span class="text-sm px-2">O FUNDACJI</span></a>
                    <i class="fa-solid fa-chevron-down fa-sm float-right mr-2 leading-5 pt-4"></i>
                </span>

            <!-- Dropdown menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 -translate-x-6"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-out duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6"
    class="w-full block left-0 z-50 divide-y divide-teal-100 min-w-48">
    <ul class="flex flex-col text-xs text-gray-700">
        <li>
    <a href=/statut-fundacji class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">STATUT FUNDACJI</p></a>
</li>
                <li>
    <a href=/zarzad-fundacji class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">ZARZĄD FUNDACJI</p></a>
</li>
                <li>
    <a href=/cele-i-zasady-dzialania class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">CELE I ZASADY DZIAŁANIA</p></a>
</li>
                <li>
    <a href=/dzialalnosc-gospodarcza class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">DZIAŁALNOŚĆ GOSPODARCZA</p></a>
</li>
                <li>
    <a href=/sprawozdania class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">SPRAWOZDANIA</p></a>
</li>
    </ul>
</div>
        </li>

        


        
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/praktyki" class="block py-2 w-full h-full"><p class="py-2 px-2">PRAKTYKI</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/projekty" class="block py-2 w-full h-full"><p class="py-2 px-2">PROJEKTY</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/aktualnosci" class="block py-2 w-full h-full"><p class="py-2 px-2">AKTUALNOŚCI</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/galeria" class="block py-2 w-full h-full"><p class="py-2 px-2">GALERIA</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/kontakt" class="block py-2 w-full h-full"><p class="py-2 px-2">KONTAKT</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/opinie" class="block py-2 w-full h-full"><p class="py-2 px-2">OPINIE</p></a>
</li>
        <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/login" class="block py-2 w-full h-full"><p class="py-2 px-2">ZALOGUJ</p></a>
        
</li>
    </ul>
</div>
        </li>
    </ul>
</nav>
        <nav class="hidden sticky top-0 z-50 md:block bg-black text-white min-h-14 lg:h-14">
            <ul
                class="flex flex-row flex-wrap items-center align-middle justify-center text-sm text-nowrap py-auto h-full">
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/" class="block py-2 w-full h-full"><p class="py-2 px-2">STRONA GŁÓWNA</p></a>
</li>

                <li x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false"
                    class="z-50 box-border text-sm cursor-pointer transform duration-300 flex items-center h-full
                    ">
                    <a href="/o-fundacji" class="block py-2 w-full h-full">
                        <p class="py-2 px-2">O FUNDACJI <i class="fa-solid fa-chevron-down fa-sm"></i></p>
                    </a>

                    <!-- Dropdown menu -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 -translate-x-6"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6"
    class="absolute top-9 lg:top-14 left-0 z-50 bg-teal-400 divide-y divide-teal-100 min-w-48">
    <ul class="text-xs text-gray-700">
        <li>
    <a href=/statut-fundacji class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">STATUT FUNDACJI</p></a>
</li>
                        <li>
    <a href=/zarzad-fundacji class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">ZARZĄD FUNDACJI</p></a>
</li>
                        <li>
    <a href=/cele-i-zasady-dzialania class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">CELE I ZASADY
                            DZIAŁANIA</p></a>
</li>
                        <li>
    <a href=/dzialalnosc-gospodarcza class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">DZIAŁALNOŚĆ
                            GOSPODARCZA</p></a>
</li>
                        <li>
    <a href=/sprawozdania class="block px-4 py-2 bg-neutral-800 md:bg-teal-400 transform duration-200 md:hover:bg-teal-300"><p class="py-2">SPRAWOZDANIA</p></a>
</li>
    </ul>
</div>
                </li>

                

                
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/praktyki" class="block py-2 w-full h-full"><p class="py-2 px-2">PRAKTYKI</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/projekty" class="block py-2 w-full h-full"><p class="py-2 px-2">PROJEKTY</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/aktualnosci" class="block py-2 w-full h-full"><p class="py-2 px-2">AKTUALNOŚCI</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/galeria" class="block py-2 w-full h-full"><p class="py-2 px-2">GALERIA</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/kontakt" class="block py-2 w-full h-full"><p class="py-2 px-2">KONTAKT</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/opinie" class="block py-2 w-full h-full"><p class="py-2 px-2">OPINIE</p></a>
</li>
                <li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full md:hover:bg-teal-300">
    <a href="/login" class="block py-2 w-full h-full"><p class="py-2 px-2">ZALOGUJ</p></a>
</li>
            </ul>
        </nav>
        <div class="bg-gray-100 h-8 w-full space-x-2 pt-1">
    <a href="/" class="ml-4 lg:ml-20">
        <i class="fa-solid fa-house fa-xs text-blue-600 hover:text-red-600"></i>
    </a>
                    <i class="fa-solid fa-chevron-right fa-2xs"></i>
                    @php
                        $titles = [
                            '/' => 'Strona główna',
                            'o-fundacji' => 'O fundacji',
                            'statut-fundacji' => 'Statut fundacji',
                            'zarzad-fundacji' => 'Zarząd fundacji',
                            'cele-i-zasady-dzialania' => 'Cele i zasady działania',
                            'sprawozdania' => 'Sprawozdania',
                            'praktyki' => 'Praktyki',
                            'projekty' => 'Projekty',
                            'aktualnosci' => 'Aktualności',
                            'galeria' => 'Galeria',
                            'kontakt' => 'Kontakt',
                            'opinie' => 'Opinie',
                            'posts' => 'Posty',
                        ];

                        // Pobranie aktualnej ścieżki
                        $currentPath = Request::path();

                        // Usunięcie dynamicznych parametrów typu "praktyki-{slug}"
                        if (Str::startsWith($currentPath, 'praktyki-')) {
                            $currentPath = 'praktyki';
                        }

                        // Pobranie tytułu strony, jeśli istnieje
                        $pageTitle = $titles[$currentPath] ?? 'Strona';
                    @endphp

    <span class="text-sm">{{ $pageTitle}}</span>
                    
        </div>
    <main class="flex mx-auto max-w-[1470px]">
        <div class="inline-block">
            <div class="hidden lg:block">
    <aside class="min-w-[300px] mx-auto mt-2">
        <div class="mx-auto">
            <div class="mb-8">
                <h3><span class="border-b border-b-black px-4 pb-2">O fundacji</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                        <li class="transformation duration-200 hover:text-red-400"><a href="/o-fundacji">O fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/zarzad-fundacji">Zarząd fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/statut-fundacji">Statut fundacji</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/cele-i-zasady-dzialania">Cele i zasady działania</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/dzialalnosc-gospodarcza">Działalność gospodarcza</a></li>
                        <li class="transformation duration-200 hover:text-red-400"><a href="/sprawozdania">Sprawozdania</a></li>
                    </ul>
                </div>
            </div>

            <div class="mb-8">
                <h3><span class="border-b border-b-black px-4 pb-2">Polub nas na FB</span></h3>
                <br>
                <div>
                    <div class="fb-page" data-href="https://www.facebook.com/Fundacja.Glos.Mlodych" data-tabs="timeline" data-width="240" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fundacja.Glos.Mlodych" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fundacja.Glos.Mlodych">Fundacja na rzecz promocji i rozwoju Głos Młodych</a></blockquote></div>
                </div>
            </div>

            <div class="mb-8 max-w-[250px]">
                <h3><span class="border-b border-b-black px-4 pb-2">Aktualności</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/posts/pressglobal-pl-nowy-innowacyjny-serwis-informacyjny">PressGlobal.pl -Nowy innowacyjny serwis informacyjny.</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/posts/zawieszenie-dzialanosci-e-magnes">Zawieszenie działalności e-magnes</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/posts/portal-pressglobal-jest-gotowy">Portal PressGlobal jest gotowy!</a></li>
                                            </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v19.0" nonce="7HaqFgLa"></script>
            <div class="hidden lg:block">
    <aside class="min-w-[300px] mx-auto mt-2">
            <div class="mb-8 max-w-[250px]">
                <h3><span class="border-b border-b-black px-4 pb-2">Praktyki</span></h3>
                <br>
                <div>
                    <ul class="space-y-2 text-blue-700">
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-dziennikarz">Dziennikarz</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-wschodoznawstwo">Wschodoznawstwo</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-stosunki-miedzynarodowe">Stosunki Międzynarodowe</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-tlumacz">Tłumacz</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-europeistyka">Europeistyka</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-programista">Programista</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-informatyk">Informatyk</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-marketing-internetowy">Marketing Internetowy</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-grafik">Grafik</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-seo-copywriter">SEO Copywriter</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-copywriter">Copywriter</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-specjalista-ds-social-media">Specjalista ds. social media</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-marketing-polityczny">Marketing Polityczny</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-specjalista-ds-hr">Specjalista ds. HR</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-zarzadzanie">Zarządzanie</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-administracja">Administracja</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-redaktor">Redaktor</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-prawo">Prawo</a></li>
                                                    <li class="transformation duration-200 hover:text-red-400"><a href="/praktyki-ksiegowosc">Księgowość</a></li>
                                            </ul>
                </div>
            </div>
        </div>
    </aside>
</div>
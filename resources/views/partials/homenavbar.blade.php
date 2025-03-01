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

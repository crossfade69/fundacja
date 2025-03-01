@extends('layouts.app')

@section('content')

        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g2.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Pierścionek Klaudia Szczecińska</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g3.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Kartka świąteczna 1</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g4.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Kartka wielkanocna Klaudia Szczecińska</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g5.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">kolczyki_pudełko Marta Nowacka</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g6.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">pierścionek Natalia Szyszka</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g7.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Wojciech Sobkowiak pierścionek zamknięty</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g8.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Daniel Olszewski kolczyki pudełko2</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g9.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">Adam Bylok - pierścionek zaręczynowy - pudelko</p>
        </div>
    </div>
</div>
        <div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="https://fundacjaglosmlodych.org/images/galeria/g10.jpg" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">kartka wielkanocna Kłonica Mateusz</p>
        </div>
    </div>
</div>
    </div>
        </div>
@endsection
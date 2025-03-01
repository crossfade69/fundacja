@extends('layouts.app')
@section('content')
<main class="flex flex-col justify-center items-center w-full">
    <section class="w-full min-h-auto hidden md:block">
            <div x-data="{ currentSlide: 0, slides: {{ json_encode($slides) }} }" class="relative w-full">
            <!-- Slider wrapper -->
                <div class="relative h-56 max-w-full lg:w-[1470px] mx-auto overflow-hidden lg:h-[450px]">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index" class="absolute inset-0 transition-opacity duration-700 ease-in-out">
                        <img :src="slide.image" class="absolute inset-0 w-full h-full object-cover" alt="Slide Image">
                            <div class="absolute inset-0 flex flex-col justify-center text-white text-center bg-black bg-opacity-30">
                                <h2 class="text-xl font-semibold w-11/12 mx-auto text-shadow shadow-gray-400 lg:text-4xl"
                                    x-text="slide.title">
                                </h2>
                                <hr class="border-t-[1px] w-32 font-bold m-auto my-4">
                                <div class="lg:mt-12 lg:text-2xl">
                                    <ul class="space-y-3">
                                        <template x-for="item in slide.items" :key="item">
                                            <li class="inline-block bg-stone-900 bg-opacity-25 w-auto p-2 rounded-md" x-text="item"></li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Controls -->
                <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
                    &larr;
                </button>
                <button @click="currentSlide = (currentSlide + 1) % slides.length"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
                    &rarr;
                </button>
            </div>
    </section>

    <section class="bg-zinc-100 bg-opacity-25 min-h-72 px-4 w-full">
            <div
                class="flex flex-nowrap flex-col md:flex-row justify-center py-8 w-full md:space-x-12 space-y-12 md:space-y-0">
            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-sky-400 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Praktyki uczelniane i nie tylko</h5>
    <p class="text-lg font-medium text-gray-700">Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania. Zdobycie doświadczenia będącego przepustka do przyszłej kariery i osiągniecia zaplanowanych celów.</p>
            </div>

            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-green-400 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Fundacja na rzecz promocji i rozwoju Głos Młodych</h5>
    <p class="text-lg font-medium text-gray-700">to organizacja pozarządowa o charakterze non-profit. Fundacja utrzymywana jest ze środków własnych Fundatora i drobnych darowizn ludzi dobrej woli.</p>
            </div>

            <div class="flex-1 block md:max-w-md p-6 bg-white border-y-8 border-fuchsia-600 shadow">
                <h5 class="mb-4 text-2xl font-medium tracking-tight">Realizując praktyki uczelniane uwzględniamy</h5>
    <p class="text-lg font-medium text-gray-700">programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk. Wystawiamy stosowne dokumenty. Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnieć i umiejętności.</p>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="w-full relative">
        <div class="relative w-full max-w-full min-h-40 mx-auto h-full md:h-[450px] lg:w-[1470px] bg-[url('https://fundacjaglosmlodych.org/images/licznik22.png')] bg-cover">
            <div class="grid lg:grid-cols-8 gap-y-20 md:gap-4 text-white text-center h-full w-full py-8">
                        <h3 class="col-start-4 md:col-start-2 md:col-span-6 text-4xl">Nasze ostatnie dokonania <strong>w
                                liczbach!</strong></h3>
                        <div class="col-start-4 md:col-start-2 md:col-span-2 text-3xl">Zrealizowaliśmy <br><strong
                                class="text-5xl">4768</strong><br> praktyk</div>
                        <div class="col-start-4 md:col-span-2 text-3xl">w tym <br><strong
                                class="text-5xl">4242</strong><br> praktyk uczelnianych</div>
                        <div class="col-start-4 md:col-start-6 md:col-span-2 text-3xl">Współpracujemy z <br><strong
                                class="text-5xl">124</strong><br> osobami</div>
                        <div class="col-start-4 md:col-start-1 md:col-span-8 text-xl">Z zakresu dziennikarstwa, redakcji,
                            tłumaczeń, moderowania, programowania -różne technologie, reklamy, social mediów, administracji
                            systemów serwerowych, fotografii, ogólnie rozumianej grafiki , HR-u, administracji.</div>
            </div>
        </div>
    </section>

    <section>
    <div class="grid lg:grid-cols-2 items-start w-full max-w-full xl:max-w-[1470px] mx-auto my-4">
        <!-- Sekcja Aktualności -->
        <div class="space-x-2 flex flex-col mb-12">
            <h1 class="text-center text-3xl font-bold">Aktualności</h1>

            @if($aktualnosci->isEmpty())
                <p class="text-center text-gray-500">Brak wpisów w tej kategorii.</p>
            @else
                @foreach($aktualnosci as $post)
                    <div class="min-w-96 max-w-1/2 basis-1/3 flex-1 min-h-48">
                        <div class="items-center px-2 min-h-[150px] w-full bg-white md:flex-row">
                            <div class="flex flex-col justify-center flex-wrap p-4 leading-normal text-sm">
                                <h5 class="mb-2 font-semibold tracking-tight text-base text-blue-700 hover:text-red-500">
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                </h5>
                                <p class="mb-3 font-normal break-all">{{ Str::limit($post->content, 150) }}</p>
                                <p class="self-end">
                                    <a href="{{ route('posts.show', $post->id) }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="text-center font-semibold text-blue-600">
                    <a href="{{ route('aktualnosci') }}">Zobacz Wszystkie</a>
                </div>
            @endif
        </div>

        <!-- Sekcja Projekty -->
        <div class="space-x-2 flex flex-col mb-12">
            <h1 class="text-center text-3xl font-bold">Projekty</h1>

            @if($projekty->isEmpty())
                <p class="text-center text-gray-500">Brak wpisów w tej kategorii.</p>
            @else
                @foreach($projekty as $post)
                    <div class="min-w-96 max-w-1/2 basis-1/3 flex-1 min-h-48">
                        <div class="items-center px-2 min-h-[150px] w-full bg-white md:flex-row">
                            <div class="flex flex-col justify-center flex-wrap p-4 leading-normal text-sm">
                                <h5 class="mb-2 font-semibold tracking-tight text-base text-blue-700 hover:text-red-500">
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                </h5>
                                <p class="mb-3 font-normal break-all">{{ Str::limit($post->content, 150) }}</p>
                                <p class="self-end">
                                    <a href="{{ route('posts.show', $post->id) }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="text-center font-semibold text-blue-600">
                    <a href="{{ route('projekty') }}">Zobacz Wszystkie</a>
                </div>
            @endif
        </div>

    </div>
</section>

    <section>
        <div class="flex flex-col justify-center align-center items-center my-24">
                <h4 class="font-semibold text-lg">Pomóż nam promować talenty !</h4><br>
            <h2 class="font-semibold text-3xl">Skontaktuj się z nami!</h2><br>
                <p>Tel: <a href="tel:+48794250440" class="underline text-blue-600">794 250 440</a>, <a
                        href="tel:+48733636477" class="underline text-blue-600">733 636 477</a></p><br>
                <p>e-mail: <a href="mailto:kontakt@fundacjaglosmlodych.org"
                        class="underline text-blue-600">kontakt@fundacjaglosmlodych.org</a></p><br>
        </div>
    </section>
</main>
@endsection

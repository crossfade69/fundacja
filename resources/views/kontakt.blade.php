@extends('layouts.app')

@section('content')

    <main class="flex flex-col md:flex-row my-10 justify-center space-x-8">
        <div class="lg:w-4/12">
            <div class="flex flex-row items-center">
                <div class="grow-0 text-xs">Kontakt</div>
                <div class="grow h-[1px] bg-gray-200"></div>
            </div>

            <div class="my-10 space-y-8 text-lg">
                <h1 class="font-bold text-xl">Fundacja na Rzecz Promocji i Rozwoju</h1>
                <p>
                    Józef Protasewicz - Prezes Zarządu Fundacji <br>
                    62-090 Rokietnica <br>
                    Ul. Rolna 17d <br>
                    Tel: 794 250 440 <br>
                    Tel: 733 636 477 <br>
                    Numer GG: 35208545 <br>
                    KRS 0000359598
                </p>
                <h1 class="font-bold text-xl">Adresy e-mail do Fundacji:</h1>
                <p>
                    kontakt@fundacjaglosmlodych.org <br>
                    rekrutacja@fundacjaglosmlodych.org <br>
                </p>
                <h1 class="font-bold text-xl">Konto bankowe:</h1>
                <p>
                    Fundacja na Rzecz Promocji i Rozwoju "Głos Młodych" <br>
                    konto - Bank Pekao S.A. Poznań ul. Masztalerska 8a <br>
                    Nr Konta 92 1240 1763 1111 0010 7475 8053 <br>
                    NIP 778-147-28-25 <br>
                    Regon 301479604
                </p>
            </div>
        </div>

        <div class="lg:w-4/12">
            <div class="flex flex-row items-center">
                <div class="grow-0 text-xs">Formularz Kontaktowy</div>
                <div class="grow h-[1px] bg-gray-200"></div>
            </div>

            <div>
                <form action="/kontakt" method="POST">
                    <input type="hidden" name="_token" value="Yo8DFVkwO3Fc35UutaZwgUNtPi8abpHELckIkX1f" autocomplete="off">
                    <div class="mt-6">
    <input class="border border-gray-200 p-2 w-full rounded"
        name="nazwa"
        id="nazwa"
        placeholder="Imię i nazwisko *" required="required"
    >
</div>
                    <div class="mt-6">
    <input class="border border-gray-200 p-2 w-full rounded"
        name="firma"
        id="firma"
        placeholder="Nazwa firmy"
    >
</div>
                    <div class="mt-6">
    <input class="border border-gray-200 p-2 w-full rounded"
        name="tel"
        id="tel"
        placeholder="Telefon"
    >
</div>
                    <div class="mt-6">
    <input class="border border-gray-200 p-2 w-full rounded"
        name="email"
        id="email"
        type="email" placeholder="Adres email *" required="required"
    >
</div>
                    <div class="mt-6">
    <input class="border border-gray-200 p-2 w-full rounded"
        name="temat"
        id="temat"
        placeholder="Temat *" required="required"
    >
</div>
                    <div class="mt-6">
    <textarea class="border border-gray-200 p-2 w-full rounded editor"
        name="tresc"
        id="editor"
        placeholder="Treść wiadomości *" rows="8" required="required"
    ></textarea>
</div>
                    <input type="checkbox" id="zgoda" name="zgoda" class="ml-4" required>
                    <label for="zgoda">Wyrażam zgode na przetwarzania moich danych osobowych w celu kontaktu ze mną.</label>

                    <p class="my-10 text-lg">* Pola oznaczone gwiazdką są wymagane</p>

                    <div class="mt-6">
    <button type="submit"
        class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
    >
        Wyślij formularz
    </button>
</div>
                </form>
            </div>
@endsection
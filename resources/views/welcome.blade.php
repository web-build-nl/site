@extends('layouts/defaultLayout')

@section('content')
    <div class="container mx-auto py-24 grid md:grid-cols-2 gap-12">
        <div class="flex justify-center items-center flex-col">
            <h1 class="text-purple-600 text-5xl font-bold mb-3">Snel en eenvoudig een website laten maken.</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo fugit adipisci aliquid iste quod iure, recusandae quaerat nihil soluta accusantium quisquam quos quibusdam esse ut nam id ex exercitationem similique?</p>
        </div>

        <div class="">
            <img src="/images/feller.jpg" alt="">
        </div>
    </div>

    {{-- <div class="my-5 h-1 bg-purple-600 w-3/4 rounded mx-auto"></div> --}}

    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold text-purple-600 text-center mb-5">Onze services</h1>

        <div class="grid md:grid-cols-3 gap-6">
            <x-card>
                <h1 class="text-purple-700 text-xl font-bold">One page website.</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium saepe fuga dolorum iure et quasi quaerat, repellat perspiciatis ea.</p>
                <ul class="mb-8">
                    <x-feature-link>1 pagina</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                </ul>
                <div class="flex items-center justify-between">
                    <x-button :value="'Lees meer'" />
                    <h1 class="text-5xl text-purple-700 font-serif">€399</h1>
                </div>
            </x-card>

            <x-card>
                <h1 class="text-purple-700 text-xl font-bold">Multi page website.</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium saepe fuga dolorum iure et quasi quaerat, repellat perspiciatis ea.</p>
                <ul class="mb-8">
                    <x-feature-link>5 pagina's</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                    <x-feature-link>Feature 1</x-feature-link>
                </ul>
                <div class="flex items-center justify-between">
                    <x-button :value="'Lees meer'" />
                    <h1 class="text-5xl text-purple-700 font-serif">€599</h1>
                </div>
            </x-card>

            <x-card>
                <h1 class="text-purple-700 text-xl font-bold">CMS website.</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium saepe fuga dolorum iure et quasi quaerat, repellat perspiciatis ea.</p>
                <ul class="mb-8">
                    <x-feature-link>Onbeperkte hoeveelheid pagina's</x-feature-link>
                    <x-feature-link>Mogelijkheid om content toe te voegen</x-feature-link>
                    <x-feature-link>Log in systeem</x-feature-link>
                    <x-feature-link>3 maanden hosting inbegrepen</x-feature-link>
                    <x-feature-link>5 uur onderhoud inbegrepen</x-feature-link>
                </ul>
                <div class="flex items-center justify-between">
                    <x-button :value="'Lees meer'" />
                    <h1 class="text-5xl text-purple-700 font-serif">€1499</h1>
                </div>
            </x-card>

        </div>
    </div>
@endsection
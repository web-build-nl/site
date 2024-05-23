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
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                </ul>
                <x-button :value="'Lees meer'" />
            </x-card>

            <x-card>
                <h1 class="text-purple-700 text-xl font-bold">Multi page website.</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium saepe fuga dolorum iure et quasi quaerat, repellat perspiciatis ea.</p>
                <ul class="mb-8">
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                </ul>
                <x-button :value="'Lees meer'" />
            </x-card>

            <x-card>
                <h1 class="text-purple-700 text-xl font-bold">CMS website.</h1>
                <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium saepe fuga dolorum iure et quasi quaerat, repellat perspiciatis ea.</p>
                <ul class="mb-8">
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                    <li class="font-semibold my-3"><i class="fa-solid fa-check text-purple-500 font-bold px-1"></i> feature 1</li>
                </ul>
                <x-button :value="'Lees meer'" />
            </x-card>

        </div>
    </div>
@endsection
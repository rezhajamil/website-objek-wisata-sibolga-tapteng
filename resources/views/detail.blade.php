@extends('layouts.app')
@section('content')
<section class="flex justify-center my-1 carousel md:my-3">
    <div id="default-carousel" class="relative w-11/12 md:w-10/12" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 md:h-96 ">
            @foreach ($images as $image)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/'.$image->url) }}" class="absolute block object-cover object-center w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            @endforeach
            {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/profile.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/carousel1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div> --}}
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        @foreach ($images as $key=>$image)
        <button type="button" class="w-3 h-3 rounded-full bg-sky-400/60" aria-current="false" aria-label="Slide {{ $key+1 }}" data-carousel-slide-to="{{ $key+1 }}"></button>
        @endforeach
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-sky-600/40 group-hover:bg-sky-600/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-sky-600/40 group-hover:bg-sky-600/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden">Next</span>
        </span>
    </button>
    </div>
</section>

<section class="px-[16px] mx-auto my-3 lg:px-0 lg:w-4/5">
    <div class="flex justify-around gap-x-5">
        <div class="w-full lg:w-3/4">
            <div class="flex items-center justify-between w-full gap-x-2">
                <div class="flex flex-col gap-y-1">
                    <span class="inline-block text-3xl font-bold text-prussian text-capitalize fw-bold" id="name">{{ $destination->name }}</span>
                    <span class="text-slate-500">{{ $destination->address }}</span>
                </div>
                {{-- <div class="px-3 py-2 overflow-hidden bg-green-600 border border-gray-500 rounded-lg w-fit">
                    <i class="mb-1 text-xl font-semibold text-white fa-solid fa-restroom w-fit"></i>
                </div> --}}
                <span class="inline-block text-lg font-semibold text-right w-fit text-slate-500"><span class="type">{{ $destination->destType->name }}</span> | <span class="region">{{ $destination->region }}</span></span>
            </div>
            <hr class="my-3">
            <div class="flex flex-col mb-16 space-y-1 lg:mb-6 h-fit">
                <span class="text-lg font-bold text-decoration-underline col-span-full text-prussian ">Deskripsi</span>
                <p class="inline-block mb-10 text-base text-justify text-neutral-900 font-['Nunito_Sans'] flex-wrap max-w-full">{{ $destination->description }}</p>
            </div>
        </div>
        <div class="flex-col items-center justify-center hidden w-1/4 px-3 py-2 rounded-lg shadow gap-y-2 h-fit lg:flex ">
            <a href="{{ $destination->maps_url }}" class="flex items-center justify-center w-full p-2 transition rounded bg-sky-600 hover:bg-sky-800 btn-booking">
                <i class="mr-2 text-xl text-white transition fa-solid fa-map-location-dot"></i>
                <span class="text-lg font-semibold text-white transition">
                    Lihat Di Maps
                </span>
            </a>
        </div>
    </div>
</section>
<div class="fixed bottom-0 lg:hidden flex justify-evenly items-center w-full space-x-2 px-3 py-2 bg-white drop-shadow-[18px_-18px_28px_#d5d5d5]">
    <button class="w-1/2 p-2 transition rounded bg-sky-600 hover:bg-sky-800 btn-booking" onclick="location.href='{{ $destination->maps_url }}'">
        <i class="mr-2 text-white transition fa-solid fa-map-location-dot"></i>
        <span class="text-lg font-semibold text-white transition">
            Lihat Di Maps
        </span>
    </button>
</div>
@endsection

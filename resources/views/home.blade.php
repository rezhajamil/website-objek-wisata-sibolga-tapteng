@extends('layouts.app')
@section('content')

<section class="flex justify-center my-3 jumbotron">
    <div class="relative w-11/12 h-56 overflow-hidden rounded-2xl md:w-10/12 sm:h-64 xl:h-80 2xl:h-96">
        <div class="absolute z-50 flex items-end justify-start w-full h-full bg-slate-600/60">
            <div class="flex flex-col pb-5 pl-3 space-y-2 md:pl-5 md:pb-8">
                <span class="text-base font-semibold text-white md:text-2xl wow fadeInLeft">Dapatkan Informasi Seputar</span>
                <span class="text-lg font-bold text-white md:text-3xl wow fadeInLeft">Rekomendasi <span class="inline-block px-2 py-1 rounded bg-sky-500"> Objek Wisata</span></span>
                <span class="text-xl font-bold text-white md:text-5xl wow fadeInLeft">Sibolga dan Tapanuli Tengah</span>
            </div>
        </div>
        <img src="{{ asset('images/carousel1.jpg') }}" alt="jumbotron" class="object-cover object-center w-full max-h-full">
    </div>
</section>

<div class="flex justify-center my-3">
    <div class="grid w-11/12 grid-cols-2 px-4 py-2 bg-white border shadow-lg rounded-xl md:w-10/12 gap-x-2">
        <label for="category" class="block mb-2 text-lg font-medium text-slate-600 col-span-full sm:col-span-1">
            Kategori
            <select id="category" class="block w-full px-3 py-2 text-base text-white border rounded bg-sky-400 border-sky-300 focus:ring-blue-500 focus:border-blue-500" x-model="type">
                <option selected value="Semua">Semua Kategori</option>
                @foreach ($type as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </label>
        {{-- <label for="category" class="block mb-2 text-lg font-medium text-slate-600 col-span-full sm:col-span-1">
            Urutkan Berdasar
            <select id="category" class="block w-full px-3 py-2 text-base text-white border rounded bg-sky-400 border-sky-300 focus:ring-blue-500 focus:border-blue-500">
                <option selected value="Nama">Nama</option>
                <option value="Rating">Rating</option>
            </select>
        </label> --}}
        <label for="region" class="block mb-2 text-lg font-medium text-slate-600 col-span-full sm:col-span-1">
            Wilayah
            <select id="region" class="block w-full px-3 py-2 text-base text-white border rounded bg-sky-400 border-sky-300 focus:ring-blue-500 focus:border-blue-500" x-model="region">
                <option selected value="Semua">Semua Wilayah</option>
                <option value="Sibolga">Sibolga</option>
                <option value="Tapanuli Tengah">Tapanuli Tengah</option>
            </select>
        </label>
    </div>
</div>

<div class="flex justify-center my-3">
    <div class="grid w-11/12 grid-cols-3 md:w-10/12 gap-x-4 gap-y-3">
        @foreach ($destinations as $data)
            @foreach ($covers as $cover)
                @if ($data->id==$cover->dest_id)
                    <x-item-card id="{{ $data->id }}" image="{{ $cover->url }}" name="{{ $data->name }}" region="{{ $data->region }}" desc="{{ strlen($data->description)>80? substr($data->description,0,77).'...':$data->description }}" maps="{{ $data->maps_url }}" type="{{ $data->destType->name }}"></x-item-card>
                @endif
            @endforeach
        @endforeach
    </div>
</div>

@endsection
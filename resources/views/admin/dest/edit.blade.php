@extends('layouts.dashboard')
@section('content')
    <div class="flex justify-center">
        <div class="w-full pl-0 mt-6 lg:w-1/2 lg:pl-2">
            <p class="flex items-center pb-6 text-xl">
                <i class="mr-3 fas fa-list"></i> Form Tambah Destinasi
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('admin.destination.update',$destination->id) }}">
                    @csrf
                    @method('PUT')
                    <p class="pb-4 text-lg font-medium text-gray-800">Informasi Destinasi</p>
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Nama Destinasi</label>
                        <input class="w-full px-5 py-1 text-gray-700 capitalize bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Nama Destinasi" aria-label="Name" value="{{ old('name',$destination->name) }}">
                        @error('name')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="type">Jenis Destinasi</label>
                        <select name="type" id="type" class="w-full px-5 py-3 text-gray-700 bg-gray-200 border-2 rounded" required>
                            @foreach ($types as $data)
                                <option value="{{ $data->id }}" {{ old('type',$destination->type)==$data->id?"selected":"" }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="region">Wilayah Destinasi</label>
                        <select name="region" id="region" class="w-full px-5 py-3 text-gray-700 bg-gray-200 border-2 rounded" required>
                            <option value="Sibolga" {{ old('region',$destination->region)=="Sibolga"?"selected":"" }}>Sibolga</option>
                            <option value="Tapanuli Tengah" {{ old('region',$destination->region)=="Tapanuli Tengah"?"selected":"" }}>Tapanuli Tengah</option>
                        </select>
                        @error('region')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600 " for="address">Alamat</label>
                        <input class="w-full px-2 py-2 text-gray-700 capitalize bg-gray-200 rounded" id="address" name="address" type="text" required="" placeholder="Alamat" value="{{ old('address',$destination->address) }}">
                        @error('address')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600 " for="description">Deskripsi</label>
                        <textarea class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="description" name="description" required="" placeholder="Deskripsi" >{{ old('description',$destination->description) }}</textarea>
                        @error('description')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600 " for="maps_url">Link Google Maps</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="maps_url" name="maps_url" type="text" placeholder="URL" value="{{ old('maps_url',$destination->maps_url) }}">
                        @error('maps_url')
                            <span class="text-sm italic text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
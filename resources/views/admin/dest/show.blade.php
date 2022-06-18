@extends('layouts.dashboard')
@section('content')
    <div class="flex items-center justify-center px-3 mt-5">
        <div class="w-full px-5 py-3 bg-white rounded-lg shadow-lg">
            <div class="grid grid-cols-2">
                <div class="">
                    <span class="text-4xl font-bold">{{ $destination->name }}</span>
                    <span class="block mt-1 font-semibold text-gray-500">{{ $destination->destType->name }} | {{ $destination->region }}</span>
                    <a href="{{ $destination->maps_url }}" class="block mt-4 text-blue-600 transition hover:text-blue-800"><span class="text-2xl"><i class="mr-3 fa-solid fa-map-location-dot"></i>{{ $destination->address }}</span></a>
                    <div class="w-full px-3 mt-6 border-2 border-blue-600 rounded-lg">
                        <div class="w-full px-3 py-3 border-b-2">
                            <span class="text-2xl font-bold">Deskripsi</span>
                        </div>
                        <div class="px-3 pb-3 mt-3">
                            <p>{{ $destination->description }}</p>
                        </div>
                    </div>
                    <a href="{{ route('destination.edit',$destination->id) }}" class="inline-block px-4 py-2 mt-4 font-semibold text-white transition bg-blue-600 rounded-md hover:bg-blue-800">Edit</a>
                </div>
                <div class="flex flex-col px-3 gap-y-5">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($images as $key=>$image)
                            <div class="overflow-hidden rounded-md h-60 object-cover object-center {{ $key==0?'border-8 border-blue-600':"" }}">
                                <img src="{{ asset('storage/'.$image->url) }}" alt="" class="w-full h-full">
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('admin.destination_image.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="dest_id" value="{{ $destination->id }}">
                        <div class="flex gap-x-4">
                            <div class="">
                                <label class="block text-sm text-gray-600 " for="image">Gambar Destinasi</label>
                                <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="image" name="image[]" type="file" required="" accept="image/*"  multiple >
                                @error('image')
                                    <span class="text-sm italic text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="px-4 py-1 mt-3 font-light tracking-wider text-white bg-gray-900 rounded">Tambah Gambar</button>
                    </form>
                    <div class="flex gap-x-3">
                        <button class="inline-block px-4 py-2 mt-4 font-semibold text-white transition bg-blue-600 rounded-md hover:bg-blue-800" x-on:click="changeCover=true">Ganti Cover</button>
                        <button class="inline-block px-4 py-2 mt-4 font-semibold text-white transition bg-red-600 rounded-md hover:bg-red-800" x-on:click="deleteImage=true">Hapus Gambar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="changeCoverModal" class="fixed inset-0 flex items-center justify-center w-full h-full p-5 overflow-y-auto bg-black/60" x-transition x-show="changeCover">
        <div class="relative w-4/5 p-3 my-4 bg-white rounded-lg">
            <form action="{{ route('admin.destination_image.changeCover',$destination->id) }}" method="post">
                @csrf
                @method('put')
                <div class="grid grid-cols-3 gap-x-2 gap-y-4">
                    @foreach ($images as $image)
                        @if (!$image->is_cover)
                            <label for="change{{ $image->id }}" class="relative col-span-1 p-1 overflow-hidden h-60">
                                <img src="{{ asset('storage/'.$image->url) }}" class="object-cover object-center max-w-full basis-full grow-0 shrink-0">
                                <input type="radio" name="image_id" id="change{{ $image->id }}" class="absolute invisible" value="{{ $image->id }}" style="appearance: none" >
                            </label>
                        @endif
                    @endforeach
                </div>
                <hr class="my-3">
                <button class="inline-block mr-4 font-semibold underline" x-on:click.prevent x-on:click="changeCover=false">Batal</button>
                <button type="submit" class="inline-block px-3 py-2 font-semibold text-white bg-blue-600 rounded-md">Ganti Cover</button>
            </form>
        </div>
    </div>
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center w-full h-full p-5 overflow-y-auto bg-black/60" x-transition x-show="deleteImage">
        <div class="relative w-4/5 p-3 my-4 bg-white rounded-lg">
            <form action="{{ route('admin.destination_image.deleteImage') }}" method="post">
                @csrf
                @method('post')
                <div class="grid grid-cols-3 gap-x-2 gap-y-4">
                    @foreach ($images as $image)
                        @if (!$image->is_cover)
                            <label for="delete{{ $image->id }}" class="relative col-span-1 p-1 overflow-hidden h-60">
                                <img src="{{ asset('storage/'.$image->url) }}" class="object-cover object-center max-w-full basis-full grow-0 shrink-0">
                                <input type="checkbox" name="image_id[]" id="delete{{ $image->id }}" class="absolute invisible" value="{{ $image->id }}" style="appearance: none" >
                            </label>
                        @endif
                    @endforeach
                </div>
                <hr class="my-3">
                <button class="inline-block mr-4 font-semibold underline" x-on:click.prevent x-on:click="deleteImage=false">Batal</button>
                <button type="submit" class="inline-block px-3 py-2 font-semibold text-white bg-red-600 rounded-md">Hapus Gambar</button>
            </form>
        </div>
    </div>

    @if (session('success'))
        <div class="flash-data d-none" data-flashdata="{{ session('success') }}"></div>
        <script>
            var data=document.querySelector(".flash-data").getAttribute("data-flashdata");
            Swal.fire({
                title: 'Success',
                text: data,
                icon: 'success',
                showCancelButton: false,
            })
        </script>
    @endif
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#changeCoverModal input[type=radio]').change(function(){
                $('#changeCoverModal input[type=radio]').parent('label').removeClass('border-4 border-blue-600').css('border-4 border-blue-600','none');
                $('#changeCoverModal input[type=radio]:checked').parent('label').addClass('border-4 border-blue-600').css('border-4 border-blue-600');
            })
            $('#deleteModal input[type=checkbox]').change(function(){
                $('#deleteModal input[type=checkbox]').parent('label').removeClass('border-4 border-red-600').css('border-4 border-red-600','none');
                $('#deleteModal input[type=checkbox]:checked').parent('label').addClass('border-4 border-red-600').css('border-4 border-red-600');
            })
        })
    </script>
@endsection
@extends('layouts.dashboard')
@section('content')
    <div class="flex flex-col w-full overflow-x-hidden border-t">
        <main class="flex-grow w-full p-6">
            <h1 class="pb-3 text-3xl text-black">Dashboard</h1>

            <div class="w-full mt-6">
                <p class="flex items-center pb-3 text-xl">
                    <i class="mr-3 fas fa-list"></i> List Destinasi Wisata
                </p>
                <div class="overflow-auto bg-white">
                    <table class="min-w-full bg-white">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase ">No</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase ">Nama Destinasi</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase ">Jenis Destinasi</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase">Wilayah Destinasi</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase">Alamat</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase">Link GMaps</th>
                                <th class="px-4 py-3 text-sm font-semibold text-center uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            {{-- <tr>
                                <td class="px-4 py-3 text-left">Lian</td>
                                <td class="px-4 py-3 text-left">Smith</td>
                                <td class="px-4 py-3 text-left">Smith</td>
                                <td class="px-4 py-3 text-left">Smith</td>
                                <td class="px-4 py-3 text-left">Smith</td>
                                <td class="px-4 py-3 text-left"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr> --}}
                            @foreach ($destinations as $key=>$data)
                                <tr class="{{ $key%2==1?'bg-gray-200':'' }}">
                                    <td class="px-4 py-3 text-center">{{ $key+1 }}</td>
                                    <td class="px-4 py-3 text-center">{{ $data->name }}</td>
                                    <td class="px-4 py-3 text-center">{{ $data->destType->name }}</td>
                                    <td class="px-4 py-3 text-center">{{ $data->region }}</td>
                                    <td class="px-4 py-3 text-center">{{ $data->address }}</td>
                                    <td class="px-4 py-3 text-center"><a class="hover:text-blue-500" href="{{ $data->maps_url }}">{{ $data->maps_url?"Klik Disini":"Tidak Ada Link" }}</a></td>
                                    <td class="px-4 py-3 text-center gap-x-3">
                                        <a class="mx-3 font-semibold text-green-500" href="{{ route('admin.destination.show', $data->id) }}">
                                            Lihat
                                        </a>
                                        <a class="mx-3 font-semibold text-blue-500" href="{{ route('admin.destination.edit', $data->id) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.destination.destroy',$data->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="mx-3 font-semibold text-red-500" type="submit">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('tempat.store')}}" method="POST" class="space-y-8">
                        @csrf
                        <div class="space-y-8">
                            <div class="space-y-6 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Tempat</h3>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="nama" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nama Tempat</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <input type="text" name="nama" id="nama" autocomplete="nama" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="foto" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Foto Tempat</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <input type="file" name="foto" id="foto" autocomplete="foto" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="kategori" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Kategori Tempat</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <select id="kategori" name="kategori" autocomplete="kategori" class="block w-full max-w-lg text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                            <option selected disabled>-- Pilih Kategori ---</option>
                                            @forelse($kategoris as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @empty
                                            <option>Data Role Tidak Ditemukan</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="status" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Status Tempat</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <select id="status" name="status" autocomplete="status" class="block w-full max-w-lg text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                            <option selected disabled>-- Pilih Status ---</option>
                                            <option value="1">Sudah di Pinjam</option>
                                            <option value="0">Belum di Pinjam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="detail" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Detail Tempat</label>
                                </div>
                                <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                                    <div class="sm:grid sm:grid-cols-6 sm:items-start sm:gap-4 sm:pt-5">
                                        <div class="sm:col-span-2">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Key<label>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <label for="last-name" class="block text-sm font-medium text-gray-700">Value</label>
                                        </div>
                                    </div>
                                    @for ($i=0; $i <= 4; $i++) <div class="sm:grid sm:grid-cols-6 sm:items-start sm:gap-4">
                                        <div class="sm:col-span-2">
                                            <div class="mt-1">
                                                <input type="text" name="detail[{{ $i }}][key]" value="{{ old('detail['.$i.'][key]') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <div class="mt-1">
                                                <input type="text" name="detail[{{ $i }}][value]" value="{{ old('detail['.$i.'][value]') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </div>
                                </div>
                                @endfor
                            </div>

                        </div>
                </div>

                <div class="py-5">
                    <div class="flex justify-end">
                        <a href="{{route('tempat.index') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
                        <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
</x-app-layout>
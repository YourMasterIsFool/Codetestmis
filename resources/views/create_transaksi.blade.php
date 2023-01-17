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
                    <form class="space-y-8 divide-y divide-gray-200">
                        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                            <div class="space-y-6 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Transaksi</h3>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="doc" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Dokumen Pendukung</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <input type="file" name="doc" id="doc" autocomplete="doc" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="tempat" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pilih Tempat</label>
                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                        <select id="tempat" name="tempat" autocomplete="tempat" class="block w-full max-w-lg text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                            <option selected disabled>-- Pilih tempat ---</option>
                                            @forelse($tempats as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @empty
                                            <option>Data Tempat Tidak Ditemukan</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="pinjam_awal" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pinjam Awal Tempat</label>
                                    <div class="mt-1 sm:col-span-1 sm:mt-0">
                                        <input type="date" name="pinjam_awal_date" id="pinjam_awal" autocomplete="pinjam_awal" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="mt-1 sm:col-span-1 sm:mt-0">
                                        <input type="time" name="pinjam_awal_time" id="pinjam_awal" autocomplete="pinjam_awal" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="pinjam_akhir" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pinjam Akhir Tempat</label>
                                    <div class="mt-1 sm:col-span-1 sm:mt-0">
                                        <input type="date" name="pinjam_akhir_date" id="pinjam_akhir" autocomplete="pinjam_akhir" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    <div class="mt-1 sm:col-span-1 sm:mt-0">
                                        <input type="time" name="pinjam_akhir_time" id="pinjam_akhir" autocomplete="pinjam_akhir" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="flex justify-end">
                                <a href="{{route('transaksi.index') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
                                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
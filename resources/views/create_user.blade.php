<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('user.store')}}" method="POST" class="space-y-8">
                        @csrf
                        <div class="space-y-8 sm:space-y-5">
                            <div class="space-y-6 sm:space-y-5">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">User</h3>
                                </div>

                                <div class="space-y-6 sm:space-y-5">
                                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Full Name</label>
                                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                                            <input type="text" name="name" id="name" autocomplete="name" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Email</label>
                                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                                            <input type="email" name="email" id="email" autocomplete="given-name" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="role_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Jenis Klamin</label>
                                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                                            <select id="role_id" name="role_id" autocomplete="role_id" class="block w-full max-w-lg text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                                <option selected disabled>-- Pilih Role ---</option>
                                                @forelse($roles as $item)
                                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                                @empty
                                                <option>Data Role Tidak Ditemukan</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Password</label>
                                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                                            <input id="password" name="password" type="password" autocomplete="password" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="flex justify-end">
                                <a href="{{route('user.index') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
                                <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Welcome to your dashboard!
                    </div>

                    <div class="mt-6 text-gray-500">
                        <a href="{{ route('users.index') }}" class="text-indigo-600 hover:text-indigo-900">Manage Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

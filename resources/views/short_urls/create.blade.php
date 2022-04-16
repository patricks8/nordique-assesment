<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="w-full md:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                    {{ __('Urls') }}
                </h2>
            </div>
            <div class="w-full">
                <div class="float-right space-x-2">
                    <button type="submit" form="create-short-url-form" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Add') }}
                    </button>
                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{ route('short-url.index') }}">
                        {{ __('Cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form id="create-short-url-form" method="POST" action="{{ route('short-url.store') }}">
                        @csrf
                        @include('short_urls.partials.form_inputs')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

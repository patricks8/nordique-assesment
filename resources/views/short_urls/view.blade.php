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
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('short-url.index') }}">
                        {{ __('Go back') }}
                    </a>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('short-url.edit', $shortUrl) }}">
                        {{ __('Edit') }}
                    </a>
                    <button type="submit" form="delete-short-url" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Delete') }}
                    </button>
                    <form id="delete-short-url" method="POST" action="{{ route('short-url.destroy', $shortUrl) }}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-4">
                    <div>
                        <x-label :value="__('Key')" />
                        <div class="block mt-1 w-full">
                            {{ $shortUrl->key }}
                        </div>
                    </div>
                    <div>
                        <x-label :value="__('Destination')" />
                        <div class="block mt-1 w-full">
                            <x-link :href="$shortUrl->destination" target="_blank">
                                {{ $shortUrl->destination }}
                            </x-link>
                        </div>
                    </div>
                    <div>
                        <x-label :value="__('Short url')" />
                        <div class="block mt-1 w-full">
                            <x-link :href="$shortUrl->destination" target="_blank">
                                {{ $shortUrl->destination }}
                            </x-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

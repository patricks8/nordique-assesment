<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="w-full md:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                    {{ __('Urls') }}
                </h2>
            </div>
            <div class="w-full md:w-1/2">
                <a class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('short-url.create') }}">
                    {{ __('Add') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full mb-4">
                        <thead>
                            <tr>
                                <th>{{ __('Id') }}</th>
                                <th>{{ __('Key') }}</th>
                                <th>{{ __('Destination') }}</th>
                                <th>{{ __('Visits') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shortUrls as $shortUrl)
                                <tr>
                                    <td>{{ $shortUrl->id }}</td>
                                    <td>{{ $shortUrl->key }}</td>
                                    <td>{{ $shortUrl->destination }}</td>
                                    <td>TODO</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $shortUrls->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

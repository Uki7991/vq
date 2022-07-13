<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Broadcasts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <p><span class="font-bold">Ключ стрима:</span> {{ \App\Services\Antmedia\AntmediaService::getKey($broadcast->rtmpURL) }}</p>
                        <p><span class="font-bold">URL стрима:</span> {{ \App\Services\Antmedia\AntmediaService::getUrlWithoutKey($broadcast->rtmpURL) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

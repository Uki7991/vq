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
                    <div class="flex space-x-8">
                        <iframe width="560" height="315" src="http://89.22.229.228:5080/WebRTCApp/play.html?name={{ $broadcast->streamId }}" frameborder="0" allowfullscreen></iframe>
                        <div>
                            <p>Name: {{ $broadcast->name }}</p>
                            <p>Author: {{ $broadcast->author?->name }}</p>
                            <p>Stream id: {{ $broadcast->streamId }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

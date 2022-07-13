<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Broadcasts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 gap-4">
                    @foreach($broadcasts as $broadcast)
                        <a href="{{ route('broadcasts.show', $broadcast->streamId) }}">
                            <div class="rounded bg-gray-100 shadow p-4 ">
                                <p>Name: {{ $broadcast->name }}</p>
                                <p>Author: {{ $broadcast->author?->name }}</p>
                                <div class="relative">
                                    @if($broadcast->status === 'broadcasting')
                                        <div class="absolute left-2 top-2 animate-ping w-4 h-4 bg-green-500 rounded-full"></div>
                                        <div class="absolute left-2 top-2 w-4 h-4 bg-green-500 rounded-full"></div>
                                    @else
                                        <div class="absolute left-2 top-2 w-4 h-4 bg-gray-500 rounded-full"></div>
                                    @endif
                                    @if($broadcast->preview)
                                        <img src="{{ asset($broadcast->preview) }}" alt="">
                                    @else
                                        <img src="{{ asset('img/not_exists.jpg') }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

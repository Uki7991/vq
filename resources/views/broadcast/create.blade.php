<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create broadcast') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('broadcasts.store') }}" enctype="multipart/form-data" class="flex flex-col space-y-4" method="post">
                        @csrf

                        <div class="flex flex-col">
                            <label for="name">Name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="flex flex-col">
                            <label for="description">Description</label>
                            <textarea cols="4" name="description"></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label for="preview">Preview</label>
                            <input type="file" value="[]" name="preview">
                        </div>
                        <div class="flex flex-col">
                            <label for="autoStart">Auto start</label>
                            <input type="checkbox" name="autoStart">
                        </div>

                        <div>
                            <button type="submit" class="bg-green-600 px-4 py-2 rounded text-white">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

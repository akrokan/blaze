<x-app-layout>

<div class="flex flex-col w-full md:mx-auto md:max-w-screen-sm border-1 bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg md:w-2/3 md:p-4">
    <div class="flex mt-1">
        @if (session('title'))
            <div x-data="{ show: true }" x-show="show" class="flex justify-between items-center bg-red-300 border-l-2 border-red-500 text-red-700 px-4 py-3 w-full" role="alert">
                <div>
                    <p class="font-bold">{{ session('title') }}</p>
                    <p>{{ session('content') }}</p>
                </div>
                <div>
                    <x-button type="button" @click="show = false" class="px-2 bg-red-300 hover:bg-red-300">
                        <span class="text-2xl text-black">&times;</span>
                    </x-button>
                </div>
            </div>
        @endif
        @error('title')
            <div class="alert alert-danger bg-red-300 border-l-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex mt-1">
        <form method="POST" action="{{ url('/dashboard/post/store') }}" enctype="multipart/form-data" class="w-full">
            @csrf
            <span class="block mb-5">
                <x-label for="file" id="file">Choose article to import</x-label>
                <x-input type="file" name="file" class="py-1 w-full" />
            </span>
            <span class="block mb-5">
                <x-label for="tags" id="tags">Add some tags to the post</x-label>
                <x-input type="text" name="tags" class="py-1 w-full" />
            </span>
            <span class="flex mb-2 space-x-5">
                <x-button class="flex bg-blue-300 hover:bg-green-500">Import</x-button>
                <x-button class="flex bg-blue-300 hover:bg-green-500">
                    <x-nav-link href="{{ route('dashboard') }}">Cancel</x-nav-link>           
                </x-button>
    {{--             <a href="{{ url()->previous() }}" class="bg-blue-300hover:bg-green-500 flex px-3 py-1 rounded uppercase text-white">Cancel</a> --}}
            </span>
        </form>
    </div>
</div>

</x-app-layout>
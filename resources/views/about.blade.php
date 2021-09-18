<x-app-layout>

<div class="flex flex-col-reverse w-full items-start md:flex-row md:justify-center">
    <div class="max-w-screen-md border-1 bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg">
        <article class="p-2 tracking-wide md:p-4">
            <h1 class="text-blue-300 text-2xl mb-2 font-medium">{{ $post->title }}</h1>
            {{ Illuminate\Mail\Markdown::parse($post->content) }}
        </article>
    </div>
    <div class="flex flex-col">
        <div class="md:max-w-xs md:ml-4 p-2 border-1 bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg md:mb-4">
            @include('partials.tags-field')
        </div>
        <div class="md:max-w-xs md:ml-4 p-2 border-1 bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg">
            <x-label>Social links</x-label>
            <x-nav-link href="https://github.com/akrokan/blaze" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59c.4.07.55-.17.55-.38c0-.19-.01-.82-.01-1.49c-2.01.37-2.53-.49-2.69-.94c-.09-.23-.48-.94-.82-1.13c-.28-.15-.68-.52-.01-.53c.63-.01 1.08.58 1.23.82c.72 1.21 1.87.87 2.33.66c.07-.52.28-.87.51-1.07c-1.78-.2-3.64-.89-3.64-3.95c0-.87.31-1.59.82-2.15c-.08-.2-.36-1.02.08-2.12c0 0 .67-.21 2.2.82c.64-.18 1.32-.27 2-.27c.68 0 1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82c.44 1.1.16 1.92.08 2.12c.51.56.82 1.27.82 2.15c0 3.07-1.87 3.75-3.65 3.95c.29.25.54.73.54 1.48c0 1.07-.01 1.93-.01 2.2c0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" fill="#999"/>
                </svg>
            </x-nav-link>
        </div>
    </div>
</div>

</x-app-layout>
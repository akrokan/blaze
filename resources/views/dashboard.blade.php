<x-app-layout>

<div class="flex flex-row mx-auto h-full w-screen items-start">
    @include('partials.dashboard-sidebar')
    <div class="flex flex-row flex-wrap w-full">
        <div class="bg-gray-800 border-gray-700 border-t-4 mx-2 mb-2 w-full md:max-w-xl"
             style="">
            <div class="bg-gray-700 w-full px-4 py-1">
                <h1>At a glance</h1>
            </div>
            <div class="p-4">
                <p>{{ $posts->count() }} Articles</p>
                <p>{{ $comments }} Comments</p>
                <p>{{ $users }} Users</p>
            </div>
        </div>
        <div x-data="{ activity: true }" class="bg-gray-800 border-gray-700 border-t-4 mx-2 mb-2 w-full md:max-w-xl">
            <div class=" flex flex-row justify-between bg-gray-700 w-full px-4 py-1">
                <span class="font-bold">Activity</span>
                <span x-on:click="activity = !activity" :class="{'transform rotate-180': activity }">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-100" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
            <div x-show="activity" class="p-4">
                <p>{{ $posts[0]->created_at->diffForHumans() }} | 
                    <a href="{{ url(''.$posts[0]->slug) }}">{{ $posts[0]->title }}</a>
                </p>
                <p>{{ $posts[1]->created_at->diffForHumans() }} |
                    <a href="{{ url(''.$posts[1]->slug) }}">{{ $posts[1]->title }}</a>
                </p>
        </div>
    </div>
</div>

</x-app-layout>
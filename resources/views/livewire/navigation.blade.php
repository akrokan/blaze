<div x-data class ="border-b-2 border-gray-800 md:mb-8">
    <nav class="container mx-auto md:max-w-screen-lg flex flex-row md:justify-between items-center h-12 md:h-16 font-semibold">
        <ul class="flex flex-col md:flex-row items-center w-full md:ml-6">
            <li><a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-200 hover:text-green-500" viewBox="0 0 24 24" fill="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </a></li>
        </ul>
        <ul class="hidden md:flex md:flex-row items-center w-full">
            @auth
                @can('admin')
                    <li><a href="{{ route('comments') }}" class="h-full hover:text-red-300 px-2">COMMENTS</a><li>
                    <li><a href="{{ route('posts') }}"    class="h-full hover:text-red-300 px-2">POSTS</a><li>
                    <li><a href="{{ route('tags') }}"     class="h-full hover:text-red-300 px-2">TAGS</a><li>
                    <li><a href="{{ url('/dashboard/post/create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 text-green-500 hover:text-gray-200 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a></li>
                @endcan
            @endauth
            <livewire:search>
        </ul>
        <ul class="flex flex-row items-center content-end justify-end w-full">
            @auth
                @can('admin')
                    <li><a href="{{ route('dashboard') }}" class=" h-full hover:text-green-500 px-2">DASHBOARD</a></li>
                @endcan
            @endauth
            @guest
                <li><a href="{{ route('about') }}" class="h-full hover:text-green-500 px-2">ABOUT</a></li>
                <li><a href="{{ route('login') }}" class="h-full hover:text-green-500 px-2">LOGIN</a></li>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="{{ route('logout') }}" class="h-full hover:text-green-500 px-2"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">{{ __('LOGOUT') }}</a></li>
                </form>
            @endguest
        </ul>
    </nav>
</div>
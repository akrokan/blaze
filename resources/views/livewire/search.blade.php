<div x-data="{ open: true }">
    <input type="text"
            x-on:keydown.escape.window="open = false; @this.res()"
            x-on:mouseenter="open = true"
            @click.away="open = false; @this.res()"
            wire:model.debounce.500ms="query"
            wire:keydown.arrow-down="inc"
            wire:keydown.arrow-up="dec"
            wire:keydown.backspace="res"
            wire:keydown.enter="show"
            class="border border-transparent bg-gray-800 w-64 px-4 text-sm pl-6 py-1 md:ml-8 rounded-full focus:border-transparent focus:outline-none focus:ring-green-500" placeholder="Search">
    @if (strlen($this->query) > 2)
        <div x-show="open"
            class="border-t border-gray-700 bg-gray-800 w-64 mt-8 text-sm md:ml-8 absolute">
            <ul>
                @if (count($posts) > 0)
                    @foreach ($posts as $i => $post)
                        <li class="border-b border-gray-700">
                            <a  href="{{ route('show', $post->slug) }}" 
                                class="block hover:bg-gray-600 {{ $i === $index ? 'bg-gray-600 text-green-500' : ''}} p-2">{{ $post->title }}</a>
                        </li>
                    @endforeach
                @else
                    <li class="border-b border-gray-700 text-red-500">
                        <span class="block hover:bg-gray-600 p-2">No result found</span>
                    </li>
                @endif
            </ul>
        </div>
    @endif
</div>
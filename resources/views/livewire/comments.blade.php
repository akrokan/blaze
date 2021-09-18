<div class="mt-8">
    <ul class="flex flex-col w-full">
        <li class="py-2">
            @auth
                <form class="flex flex-row" 
                            wire:submit.prevent="addComment()">
                    <x-input  type="text" 
                            class="flex flex-row my-2 p-1 w-2/3 mr-2" placeholder="Add your comment here" 
                            wire:model.lazy="comment" />
                    <x-button type="submit" 
                            class="h-8 place-self-center bg-blue-300 hover:bg-green-500">Add</x-button>
                </form>
            @else
                <span class="font-extralight">Login to leave a comment</span>
            @endauth
        </li>
        <li class="py-2">
            @error('input')
                <span class="text-red-600 text-sm p-2">{{ $message }}</span>
            @enderror
            @if (session()->has('message'))
                <span class="text-green-500 text-sm p-2">{{ session('message') }}</span>
            @endif
        </li>
        <li class="py-2">
            <ul>
                @if (isset($comments))
                    @foreach ($comments ?? '' as $comment)
                        <li class="px-2 pt-1 mb-0 text-right">
                            <span class="font-bold text-gray-400">{{ $comment->user->username }}</span>
                        </li>
                        <li class="px-2 pb-1 ml-6 mb-2 text-right bg-gray-700 rounded-sm">
                            <span>{{ $comment->content }}</span>
                        </li>
                    @endforeach
                @endif
            </ul>
        <li>
    </ul>
</div>
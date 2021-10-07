<div class="flex flex-col w-full md:mx-auto md:max-w-screen-sm table-fixed border-1 bg-gray-800 border-t-4 border-gray-700 rounded-sm shadow-lg md:w-2/3 md:p-4">
    <div class="flex mt-1">
        <form class="flex flex-row" wire:submit.prevent="addTag()">
            <x-input  type="text" 
                    class="flex flex-row my-2 p-1 w-5/6 mr-2" placeholder="Add your tag here" 
                    wire:model.lazy="tag" />
            <x-button type="submit" class="h-8 place-self-center bg-blue-300 hover:bg-green-500">Add</x-button>
        </form>
    </div>
    <div class="flex flex-col mt-1">
        <span class="font-semibold">Tags list</span>
        <div class="flex flex-row flex-wrap text-sm">
            @foreach ($tags as $tag)
                <a  x-data="{ delete: false }" href="{{ $tag->name }}"
                    class="mr-2 my-1 px-2 py-1 text-gray-100 rounded bg-gray-600 {{ $hover }}" 
{{--                    :class="{delete ? 'hover:bg-gray-900' : 'hover:bg-gray-500'}" --}}
                    >{{ $tag->name }}
                    <span class="font-extrabold text-black hover:text-red-500 ml-2"
                        wire:mouseover="hover"
                        wire:mouseout="refresh"
                        wire:click.prevent="deleteTag({{ $tag->id }})">X</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
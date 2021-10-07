<div class="fixed top-0 left-0 w-full min-h-screen flex flex-row items-center shadow-md"
     style="background-color: rgba(0, 0, 0, .5);">
    <div class="w-full md:max-w-screen-md mx-auto overflow-y-auto">
        <div class="flex flex-row-reverse justify-between bg-gray-800 rounded-sm shadow-lg">
            <div class="w-full content-center mx-auto text-gray-300 p-2">
                <form wire:keydown.escape="toggle()">
                    <div class="md:p-2">
                        <div class="mb-4">
                            <x-label for="title" :value="__('Title')" />
                            <x-input type="text" id="title" 
                                     placeholder="Enter Title" wire:model.defer="title" />
                            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-label for="slug" :value="__('Slug')" />
                            <x-input type="text" id="slug" disabled
                                     placeholder="" wire:model.defer="slug" />
                            @error('slug') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4 min-h-full">
                            <x-label for="content" :value="__('Content')" />
                            <textarea type="text" id="content" class="w-full h-52 border-0 bg-gray-800" style="resize: none"
                                     placeholder="Enter Content" wire:model.defer="content"></textarea>
                            @error('username') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-end md:p-2">
                        <div class="w-full rounded-md shadow-sm sm:w-auto">
                            <x-button type="button"
                                    class="bg-gray-300 hover:bg-gray-500"
                                    wire:click="toggle()">Close
                            </x-button>
                        </div>
                        <div class="w-full rounded-md shadow-sm sm:w-auto justify-end">
                            <x-button type="button"
                                    class="bg-blue-300 hover:bg-green-500 ml-3"
                                    wire:click.prevent="store()">Store
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
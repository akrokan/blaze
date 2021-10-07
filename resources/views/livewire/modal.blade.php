<div class="fixed top-0 left-0 w-full h-full flex flex-row items-center shadow-md"
        x-cloak x-show="modal"
        style="background-color: rgba(0, 0, 0, .5);">
    <div class="min-w-min max-w-screen-lg mx-auto overflow-y-auto"
        x-on:click.away="modal = false"
        x-on:keydown.escape.window="modal = false">
        <div class="flex flex-row-reverse justify-between bg-gray-800 rounded-sm shadow-lg">
            <div>
                <x-button type="button"
                        class="h-full px-1 bg-gray-800"
                        x-on:click="modal = false" >
                    <span class="text-2xl text-black align-top">&times;</span>
                </x-button>
            </div>
            <div class="w-full content-center mx-auto text-gray-300 p-2">
                {!! $modal !!}
            </div>
        </div>
    </div>
</div>
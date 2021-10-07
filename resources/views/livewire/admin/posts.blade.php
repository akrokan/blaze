<div class="container mx-auto w-full md:max-w-screen-lg">
    <div class="flex flex-row w-full justify-end md:mb-2">
       <x-button type="button"
            class="bg-blue-300 hover:bg-green-500 ml-3"
            wire:click.prevent="create()">New
        </x-button>
        <x-button type="button"
            class="bg-blue-300 hover:bg-green-500 ml-3"
            wire:click.prevent="import()">Import
        </x-button>
    </div>
    <x-table class="w-full min-w-max md:max-w-screen-lg">
        <thead class="bg-gray-700">
            <tr class="uppercase text-left tracking-wider">
                <x-th>Title</x-th>
                <x-th>Author</x-th>
                <x-th>Created</x-th>
                <x-th>Updated</x-th>
                <x-th class="max-w-min">Action</x-th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tbody>
                <tr>
                    <x-td>{{ $post->title }}</x-td>
                    <x-td>{{ $post->user->username }}</x-td>
                    <x-td>{{ $post->created_at->format('Y/m/d') }}</x-td>
                    <x-td>{{ $post->updated_at->format('Y/m/d') }}</x-td>
                    <x-td>
                        <div class="flex flex-row">
                            @if($post->online)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-300 hover:text-green-500" viewBox="0 0 20 20" fill="currentColor"
                                        wire:click="switchState({{ $post->id }})">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-900 hover:text-green-500" viewBox="0 0 20 20" fill="currentColor"
                                        wire:click="switchState({{ $post->id }})">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            @endif
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 hover:text-green-500" viewBox="0 0 20 20" fill="currentColor"
                                    wire:click="edit({{ $post->id }})">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor"
                                    wire:click="delete({{ $post->id }})">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </x-td>
                </tr>
            </tbody>
        @endforeach
    </x-table>
    @if($isOpen)
        @include('livewire.admin.post-create')
    @endif
</div>
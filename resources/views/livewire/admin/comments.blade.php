<div class="container mx-auto w-full md:max-w-screen-lg">
    <x-table class="w-full min-w-max md:max-w-screen-lg">
        <thead class="bg-gray-700">
            <tr class="uppercase text-left">
                <x-th>ID</x-th>
                <x-th>User</x-th>
                <x-th>Content</x-th>
                <x-th>Post</x-th>
                <x-th>Action</x-th>
            </tr>
        </thead>
        @foreach ($comments as $comment)
            <tbody>
                <tr>
                    <x-td>{{ $comment->id }}</x-td>
                    <x-td>{{ $comment->user->username }}</x-td>
                    <x-td>{{ $comment->content }}</x-td>
                    <x-td>{{ $comment->post->id }}</x-td>
                    <x-td>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor"
                             wire:click="delete({{ $comment->id }})">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </x-td>
                </tr>
            </tbody>
        @endforeach
    </x-table>
</div>
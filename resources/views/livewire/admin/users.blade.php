<div class="container mx-auto w-full md:max-w-screen-lg">
    <x-table class="w-full min-w-max md:max-w-screen-lg">
        <thead class="bg-gray-700">
            <tr class="uppercase text-left">
                <x-th class="max-w-min">id</x-th>
                <x-th>username</x-th>
                <x-th>firstname</x-th>
                <x-th>lastname</x-th>
                <x-th>email</x-th>
                <x-th class="max-w-min">role</x-th>
                <x-th>action</x-th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <x-td>{{ $user->id }}</x-td>
                    <x-td>{{ $user->username }}</x-td>
                    <x-td>{{ $user->firstname }}</x-td>
                    <x-td>{{ $user->lastname }}</x-td>
                    <x-td>{{ $user->email }}</x-td>
                    <x-td>{{ $user->role }}</x-td>
                    <x-td>
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700 hover:text-yellow-500" viewBox="0 0 20 20" fill="currentColor"
                                wire:click="edit({{ $user->id }})">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor"
                                wire:click="delete({{ $user->id }})">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700 hover:text-red-500" viewBox="0 0 20 20" fill="currentColor"
                                wire:click="toggleLock({{ $user->id }})">
                                <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
                            </svg>
                        </div>
                    </x-td>
                </tr>
            @endforeach
        </tbody>
    </x-table>
    @if($isOpen)
        @include('livewire.admin.user-create')
    @endif
</div>
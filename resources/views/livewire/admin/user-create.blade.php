<div class="fixed top-0 left-0 w-full h-full flex flex-row items-center shadow-md"
     style="background-color: rgba(0, 0, 0, .5);">
    <div class="w-full sm:max-w-screen-sm mx-auto overflow-y-auto">
        <div class="flex flex-row-reverse justify-between bg-gray-800 rounded-sm shadow-lg">
            <div class="w-full content-center mx-auto text-gray-300 p-2">
                <form wire:keydown.escape="toggle()">
                    <div class="md:p-2">
                        <div class="mb-4">
                            <x-label for="firstname" :value="__('Firstname')" />
                            <x-input type="text" id="firstname" 
                                     placeholder="Enter Firstname" wire:model.defer="firstname" />
                            @error('firstname') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-label for="lastname" :value="__('Lastname')" />
                            <x-input type="text" id="Lastname" 
                                     placeholder="Enter Lastname" wire:model.defer="lastname" />
                            @error('lastname') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-label for="username" :value="__('Username')" />
                            <x-input type="text" id="username" 
                                     placeholder="Enter Username" wire:model.defer="username" />
                            @error('username') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-label for="email" :value="__('Email')" />
                            <x-input type="text" id="email" 
                                     placeholder="Enter Email" wire:model.defer="email" />
                            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-label for="password" :value="__('Password')" />
                            <x-input type="text" id="password" 
                                     placeholder="Enter a new Password" wire:model.defer="password" />
                            @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
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
<div class="container mx-auto md:max-w-screen-md">
                <form>
                    <div class="md:p-2">
                        <div class="border-b border-gray-700 mb-2">
                            <h1 class="text-lg font-bold uppercase">Basic information</h1>
                        </div>
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
                        <div class="border-b border-gray-700 mb-2">
                            <h1 class="text-lg font-bold uppercase">Login information</h1>
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
                            <x-input type="password" id="password" disabled
                                     placeholder="Enter a new Password" wire:model.defer="password" />
                            @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="border-b border-gray-700 mb-2">
                            <h1 class="text-lg font-bold uppercase">Settings</h1>
                        </div>
                    </div>
                    <div class="flex flex-row w-full justify-end md:p-2">
                        <div class="w-full rounded-md shadow-sm sm:w-auto justify-end">
                            <x-button type="button"
                                    class="bg-blue-300 hover:bg-green-500 ml-3"
                                    wire:click.prevent="store(); $refresh">Update
                            </x-button>
                        </div>
                    </div>
                </form>
</div>
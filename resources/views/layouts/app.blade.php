<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-page-header />
    <body x-data="{ modal: false }" class="font-sans antialiased">
        <div class="min-h-screen bg-gray-900 text-gray-200 md:pb-8">
            <!--    Navigation (Frontend)   -->
            <livewire:navigation>

            <!--    Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <livewire:modal>
        <div class="h-12 md:h-16 bg-gray-900 text-gray-200 border-t-2 border-gray-800">
            <div class="flex container mx-auto md:max-w-screen-lg md:justify-between font-semibold items-center h-full">
                <div class="hidden md:flex items-center w-1/3">
                    <button x-on:click="modal = true; window.livewire.emit('showLogin')" class="text-gray-900">?</button>
                </div>
                <div class="flex flex-row items-center justify-center w-full md:w-1/3">
                    <span>&copy 2021 Hugues DATIN</span>
                </div>
                <div class="hidden md:flex items-center justify-center w-1/3">

                </div>
            </div>
        </div>
    <livewire:scripts />
    </body>
</html>
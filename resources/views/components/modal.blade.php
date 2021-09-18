<div x-data="{ login: false }">
    <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-md"
        x-show="login"
        style="background-color: rgba(0, 0, 0, .5);">
        <div class="container mx-auto overflow-y-auto">
            <div class="bg-gray-800 rounded">

                <div class="modal-body p-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Counter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <input class="w-20 rounded-md h-7" type="number" value="{{ $count }}" disabled />
                    <button class="w-20 text-white bg-blue-400 border-2 border-blue-500 rounded-md" wire:click="increment">+</button>
                </div>
            </div>
        </div>
    </div>
</div>

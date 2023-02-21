<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="pt-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input.textbox type="number" value="{{ $count }}" disabled></x-input.textbox>
                    <x-input.primary-button :class="'py-2 px-4'" :text="'+'" wire:click="increment"></x-input.primary-button>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input.textbox type="text" wire:model.debounce.3000ms="message"></x-input.textbox>
                    <b>{{ __('Message') }}:</b> <label>{{ $message }}</label>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input.textbox type="text" wire:model.defer="message2"></x-input.textbox>
                    <x-input.primary-button :class="'py-2 px-4'" :text="__('Submit')" wire:click="showMessage"></x-input.primary-button>
                    <b>{{ __('Message2') }}:</b> <label>{{ $message2 }}</label>
                </div>
            </div>
        </div>
    </div>
</div>

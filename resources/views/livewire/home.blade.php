<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <x-primary-card first="pt-12 pb-2">
        <div>
            <x-input-label for="counter" :value="__('Counter')" />
            <x-text-input id="counter" name="counter" type="number" class="block w-full mt-1" value="{{ $count }}" disabled />
        </div>
        <div class="flex items-center gap-4 mt-2">
            <x-primary-button wire:click="increment">+</x-input.primary-button>
        </div>
    </x-primary-card>

    <x-primary-card first="py-2">
        <div>
            <x-input-label for="message" :value="__('Message')" />
            <x-text-input id="message" name="message" type="text" class="block w-full mt-1" wire:model.debounce.500ms="message" />
            <div class="flex items-center gap-2 mt-2">
                <x-input-label for="message" :value="__('Result: ')" />
                <x-input-label :value="$message" />
            </div>
        </div>
    </x-primary-card>

    <x-primary-card first="py-2">
        <div>
            <x-input-label for="message2" :value="__('Message 2')" />
            <x-text-input id="message2" name="message2" type="text" class="block w-full mt-1" wire:model.defer="message2" />
        </div>
        <div class="flex items-center gap-2 mt-2">
            <x-input-label for="message2" :value="__('Result: ')" />
            <x-input-label :value="$message2" />
        </div>
        <div class="flex items-center gap-4 mt-2">
            <x-primary-button wire:click="showMessage">{{ __('Submit') }}</x-input.primary-button>
        </div>
    </x-primary-card>
</div>

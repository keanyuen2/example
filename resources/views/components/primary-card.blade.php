@props([
    'first' => 'py-12',
    'second' => 'mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8',
    'third' => 'p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg',
    'forth' => 'max-w-xl',
])

<div {{ $attributes->merge(['class' => $first]) }}>
    <div {{ $attributes->merge(['class' => $second]) }}>
        <div {{ $attributes->merge(['class' => $third]) }}>
            <div {{ $attributes->merge(['class' => $forth]) }}>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

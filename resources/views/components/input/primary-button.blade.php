<button {{ $attributes->merge([
    'class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold rounded',
]) }}>
    {{ __($text) }}
</button>

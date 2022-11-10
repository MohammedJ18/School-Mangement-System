<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center text-center w-full px-4 py-2 bg-primary-100 border border-transparent font-semibold text-base text-secondary-400 uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

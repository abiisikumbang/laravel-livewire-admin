<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'inline-flex items-center px-8 py-4 bg-[#404c65] border border-transparent rounded-md font-semibold text-sm text-white uppercase  tracking-widest shadow-sm hover:bg-[#d5d5d5] focus:bg-[#515151] active:bg-[#515151] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>

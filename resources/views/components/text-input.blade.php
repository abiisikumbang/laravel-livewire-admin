@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#5392ff] focus:ring-[#5392ff] rounded-md shadow-sm']) }}>


@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-sm shadow-sm bg-gray-700 border-gray-600 font-extralight focus:border-green-500 focus:ring-1 focus:ring-green-400 focus:ring-opacity-50']) !!}>

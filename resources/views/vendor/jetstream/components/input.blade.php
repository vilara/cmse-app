@props(['disabled' => false])
<div class="mt-1 flex rounded-md shadow-sm text-gray-700">
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-sm']) !!}>
</div>
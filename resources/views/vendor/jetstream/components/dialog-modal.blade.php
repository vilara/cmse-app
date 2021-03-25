@props(['id' => 'user-modal', 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-gray-400">
        <div class="text-lg text-white uppercase">
            {{ $title }}
        </div>

        <div class="mt-4  ">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-1 bg-gray-300 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>

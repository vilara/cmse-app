<h1 {{  $attributes->merge(['class' => 'text-'.$type.' text-center text-2xl mb-8']) }}>
    {{ $nome }}

    {{ $slot }}

    {{ $novoSlot ?? null}}
</h1>
@php
 //  dd($data);
@endphp
<div class="overflow-x-auto">
    <div
        class="min-w-screen min-h-screen bg-gray-100 flex items-start justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded">
                <x-jet-input id="civil.primeiro_nome" type="text" class="mb-3"   wire:model="searchTerm" placeholder="Procurar..."/><span class=" mx-2 mb-2 text-sm text-gray-600">Somente usuários ativo?</span>
                <input type="checkbox" class="text-sm text-gray-500 outline-none" wire:model="isActive"> 
                <table class="min-w-max mt-2 w-full table-auto bg-gray-200">
                    <thead>
                        <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">

                            @foreach ($headers as $key => $value)

                                <th class="py-3 px-6 text-left cursor-pointer" wire:click="sort('{{ $key }}')">
                                    @if ($sortColumn == $key)
                                        <span>{!! $sortDirection == 'asc' ? '&#8659' : '&#8657;' !!}</span>
                                    @endif
                                    {{ $value  }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @if (count($data))
                            @foreach ($data as $item)
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    @foreach ($headers as $key => $value)
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            {{ $key == 'created_at' ? $item->$key->diffForHumans() : $item->$key }}
                                            {{ $key == 'action' ? '<a href="">del</a>': '' }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                            @else
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">Sem resultados
                                </td></tr>
                        @endif

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

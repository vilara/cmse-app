@php
//  dd($data);
@endphp
<div class="overflow-x-auto">
    <div
        class="min-w-screen min-h-screen bg-gray-100 flex items-start justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="fbg-white shadow-md rounded">
                <x-jet-input id="civil.primeiro_nome" type="text" class="mb-3" wire:model="searchTerm"
                    placeholder="Procurar..." />
                <div class="flex justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <div>
                        <span class=" mx-2 mb-2 text-sm text-gray-600">Somente usuários ativo?</span>
                        <input type="checkbox" class="text-sm text-gray-500 outline-none" wire:model="isActive">
                    </div>
                    <div>
                        <button  wire:click="createShowModal"
                            class="justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            type="submit">
                            Novo
                        </button>


                        <x-jet-dialog-modal wire:model="modalFormVisible">
                            <x-slot name="title">
                                {{ __('Delete Account') }}
                            </x-slot>
                        
                            <x-slot name="content">
                                <div class="mt-4">
                                    <x-jet-label for="titulo" value="{{ __('Título') }}" />
                                    <x-jet-input id="titulo" class="block mt-1 w-full" type="titulo" wire:model.debounce.800ms="titulo" />
                                </div>
                            </x-slot>
                        
                            <x-slot name="footer">
                                <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                                    {{ __('Cancel') }}
                                </x-jet-secondary-button>
                        
                                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                                    {{ __('Delete Account') }}
                                </x-jet-danger-button>
                            </x-slot>
                        </x-jet-dialog-modal>


                    </div>
                </div>
                <table class="min-w-max mt-2 w-full table-auto bg-gray-200">
                    <thead>
                        <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">

                            @foreach ($headers as $key => $value)

                                <th class="py-3 px-6 text-left cursor-pointer" wire:click="sort('{{ $key }}')">
                                    @if ($sortColumn == $key)
                                        <span>{!! $sortDirection == 'asc' ? '&#8659' : '&#8657;' !!}</span>
                                    @endif
                                    {{ $value }}
                                </th>
                            @endforeach
                            <th class="py-3 px-6 text-left cursor-pointer"><a href="">Editar</a></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @if (count($data))
                            @foreach ($data as $item)
                                <tr class="border-b border-gray-300 hover:bg-gray-100">
                                    @foreach ($headers as $key => $value)
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            {{ $key == 'created_at' ? $item->$key->diffForHumans() : $item->$key }}
                                        </td>
                                    @endforeach
                                    <td class="flex justify-center py-3 px-6 text-left whitespace-nowrap">
                                        <svg class="w-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">Sem resultados                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>






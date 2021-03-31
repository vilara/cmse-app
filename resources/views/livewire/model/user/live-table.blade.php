<div>

    <div class="justify-center">
        <h1 class="uppercase text-center mt-8 mb-5 text-gray-600 font-semibold">Tabela Geral de Usuários Cadastrados no
            CMSE - total : </h1>

        <div class="bg-gray-200 justify-center  items-center mx-8 shadow-md rounded">
            <div class="flex justify-between items-center px-5">
                <div>
                    <x-jet-input class="text-gray-500 py-2" type="text" wire:model.debounce.800ms="searchTerm"
                        placeholder="Procurar..." />
                </div>
                <div>
                    <span class="text-sm text-gray-500">Somente usuários ativo?</span>
                    <input class="text-sm text-gray-500" type="checkbox" wire:model="isActive">
                </div>
                <div>
                    <button wire:click="createShowModal"
                        class="justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Novo</button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-200 justify-center  items-center m-8 shadow-md rounded">

        <table class="min-w-max mt-2 w-full table-auto bg-gray-200">
            <thead>
                <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal rounded-LG">

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
                @if ($users->count() > 0)
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-300 hover:bg-gray-100">
                            @foreach ($headers as $key => $value)
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $user->$key }}
                                </td>
                            @endforeach
                            <td class="flex justify-center py-3 px-6 text-left whitespace-nowrap">
                                <svg wire:click='editUser("{{ $user->id }}")' class="w-4 cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                                <svg  wire:click='removeUser("{{ $user->id }}")' class="w-4 ml-4 cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                  </svg>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">Sem resultados </td>
                    </tr>
                @endif

            </tbody>

        </table>
        <div class="bg-gray-300 text-gray-600 text-sm leading-normal">
            {{ $users->links() }}
        </div>
    </div>

    <x-jet-dialog-modal wire:ignore wire:model="modalFormVisible">
        <x-slot name="title">
            @if ($userId)
                {{ __('Edição de usuário cadastrado') }}
            @else
                {{ __('Cadastro geral do CMSE') }}
            @endif
        </x-slot>

        <x-slot name="content">
            <div class="mt-4 text-left">
                @livewire('model.user.user-form')
            </div>
        </x-slot>

        <x-slot name="footer">
            @if($userId)
                <x-jet-secondary-button wire:click="$emit('cadastrar')">
                    {{ __('Editar') }}
                </x-jet-secondary-button>
            @else
                <x-jet-secondary-button wire:click="$emit('cadastrar')">
                    {{ __('Salvar') }}
                </x-jet-secondary-button>
            @endif


            <x-jet-secondary-button wire:click="hiddenShowModal">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-confirmation-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            Delete Account
        </x-slot>
    
        <x-slot name="content">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
        </x-slot>
    
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-jet-secondary-button>
    
            <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>





</div>

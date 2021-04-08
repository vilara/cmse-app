@php
// dd($user);
@endphp
<div class="border-b border-gray-200 border-t overflow-hidden sm:border sm:rounded-lg">

   

    <div class="bg-gray-200">

        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

            {{-- Início Login --}}
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Perfil</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Essas informações serão utilizadas para acesso aos sistemas, portanto, preencha
                                corretamente os campos ao lado.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form>
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-gray-300 space-y-6 sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <x-jet-label for="user.name" value="Login" />
                                            <x-jet-input id="user.name" type="text" wire:model="user.name" />
                                            <x-jet-input-error for="user.name" class="mt-2" />
                                        </div>
                                        <div class="col-span-3 sm:col-span-2">
                                            <x-jet-label for="user.email" value="Email" />
                                            <x-jet-input id="user.email" type="text" wire:model="user.email" />
                                            <x-jet-input-error for="user.email" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-8 gap-6">
                                        <div class="col-span-6 sm:col-span-4">
                                            <x-jet-label for="user.cpf" value="CPF" />
                                            <x-jet-input id="user.cpf" type="text" wire:model="user.cpf" />
                                            <x-jet-input-error for="user.cpf" class="mt-2" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <x-jet-label for="user.password" value="Senha" />
                                            <x-jet-input id="user.password" type="password" wire:model="user.password" />
                                            <x-jet-input-error for="user.password" class="mt-2" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <x-jet-label for="password_confirmation" value="Confirmar senha" />
                                            <x-jet-input id="password_confirmation" type="password"
                                                wire:model="password_confirmation" />
                                            <x-jet-input-error for="password_confirmation" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Final Login --}}

            {{-- separador --}}
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    </div>
                </div>
            </div>

            {{-- Início Informações Gerais --}}
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Informações gerais</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Essas informações serão utilizadas para controle do pessaol e registro de informações
                                para serem utilizadas nos sistemas.O
                                Sigilo dos dados estaram protegidos no servidor do CMSE.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-gray-300 space-y-6 sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <x-jet-label for="detail.nome_completo" value="Nome completo" />
                                            <x-jet-input id="detail.nome_completo" type="text"
                                                wire:model="detail.nome_completo" />
                                            <x-jet-input-error for="detail.nome_completo" class="mt-2" />
                                        </div>
                                        <div class="col-span-3 sm:col-span-2">
                                            <x-jet-label for="detail.idt" value="Identidade" />
                                            <x-jet-input id="detail.idt" type="text" wire:model="detail.idt" />
                                            <x-jet-input-error for="detail.idt" class="mt-2" />
                                        </div>
                                    </div>



                                    <div class="grid grid-cols-8 gap-6">
                                        <div class="col-span-6 sm:col-span-4">
                                            <x-jet-label for="detail.om_id" value="OM" />
                                            <x-select disabled='' ref="siglaOm" :arra="$oms"
                                                wire:model="detail.om_id" />
                                            <x-jet-input-error for="detail.om_id" class="mt-2" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <x-jet-label for="detail.section_id" value="Seção" />
                                            <x-select disabled='' ref="nomeSecao" :arra="$sections"
                                                wire:model="detail.section_id" />
                                            <x-jet-input-error for="detail.section_id" class="mt-2" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-2">
                                            <x-jet-label for="detail.cargo_id" value="Função" />
                                            <x-select disabled='' ref="nomeCg" :arra="$cargos"
                                                wire:model="detail.cargo_id" />
                                            <x-jet-input-error for="detail.cargo_id" class="mt-2" />
                                        </div>

                                    </div>


                                    <div class="grid grid-cols-8 gap-6">

                                        <div class="col-span-8 sm:col-span-4">
                                            <div class="col-span-3 sm:col-span-2">
                                                <x-jet-label for="detail.dtNasc" value="Data de nascimento" />
                                                <x-jet-input id="detail.dtNasc" type="date"
                                                    wire:model="detail.dtNasc" />
                                                <x-jet-input-error for="detail.dtNasc" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-span-8 sm:col-span-2">
                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-500">Sexo
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input wire:model="detail.sexo" name="detail.sexo" value="masculino"
                                                            type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="detail.sexo"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Masculino
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input wire:model="detail.sexo" name="detail.sexo" value="feminino"
                                                            type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="detail.sexo1"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Feminino
                                                        </label>
                                                    </div>
                                                    <x-jet-input-error for="detail.sexo" class="mt-2" />
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-span-8 sm:col-span-2">
                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-500">Categoria
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input wire:model="detail.detailable_type" name="detail.detailable_type"
                                                            value="militar" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="type"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Militar
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input wire:model="detail.detailable_type" name="detail.detailable_type"
                                                            value="civil" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="type1"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Civil
                                                        </label>
                                                    </div>
                                                    <x-jet-input-error for="detail.detailable_type" class="mt-2" />
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Final Informações Gerais --}}

            {{-- separador --}}
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    </div>
                </div>
            </div>
            @if ($detail->detailable_type == 'militar')
                {{-- Início Informações Específicas militar --}}
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Informações específicas</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Dados específicos para cada categoria de usuário
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-gray-300 space-y-6 sm:p-6">
                                    <div class="grid grid-cols-5 gap-6">
                                        <div class="col-span-4 sm:col-span-1">
                                            <x-jet-label for="militar.forca_id" value="Força" />
                                            <x-select disabled='' ref="abrev" :arra="$forcas"
                                                wire:model="militar.forca_id" />
                                            <x-jet-input-error for="militar.forca_id" class="mt-2" />
                                        </div>
                                        <div class="col-span-4 sm:col-span-1">
                                            <x-jet-label for="militar.postograd_id" value="Posto/Grad" />
                                            <x-select disabled='' ref="siglaPg" :arra="$postograds"
                                                wire:model="militar.postograd_id" />
                                            <x-jet-input-error for="militar.postograd_id" class="mt-2" />
                                        </div>
                                        <div class="col-span-4 sm:col-span-3">
                                            <x-jet-label for="militar.nome_guerra" value="Nome de Guerra" />
                                            <x-jet-input id="militar.nome_guerra" type="text"
                                                wire:model="militar.nome_guerra" />
                                            <x-jet-input-error for="militar.nome_guerra" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-8 gap-6">
                                        <div class="col-span-8 sm:col-span-2">
                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-500">Situação
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input wire:model="militar.situacao" id="sit" name="militar.situacao"
                                                            type="radio" value="ativa"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="sit"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Reserva
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input wire:model="militar.situacao" id="sit1" name="militar.situacao"
                                                            type="radio" value="reserva"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="sit1"
                                                            class="ml-3 block text-sm font-medium text-gray-500">
                                                            Ativa
                                                        </label>
                                                    </div>
                                                    <x-jet-input-error for="militar.situacao" class="mt-2" />
                                                </div>
                                            </fieldset>
                                        </div>


                                    </div>
                                </div>

                                @if ($errors->all())
                                    <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 relative"
                                        role="alert" x-data="{show: true}" x-show="show">
                                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                        </svg>
                                        <p>O presente formulário contem erros...</p>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                                            <svg class="fill-current h-6 w-6 text-white" role="button"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <title>Close</title>
                                                <path
                                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                            </svg>
                                        </span>
                                    </div>
                                @endif

                                @if (session()->has('message'))
                                <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 relative" role="alert"
                                    x-data="{show: true}" x-show="show">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{ session('message') }}</p>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                                        <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path
                                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span>
                                </div>
                            @endif


                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button wire:click.prevent="cadastrar" type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Editar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Final Informações Específicas Militar --}}
                @elseif ($detail->detailable_type == 'civil')
                    {{-- separador --}}
                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="">
                            <div class="border-t border-gray-200">
                            </div>
                        </div>
                    </div>
                    {{-- Início Informações Específicas Civil --}}
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informações específicas</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Dados específicos para cada categoria de usuário
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-gray-300 space-y-6 sm:p-6">
                                        <div class="grid grid-cols-4 gap-6">
                                            <div class="col-span-4 sm:col-span-2">
                                                <x-jet-label for="civil.primeiro_nome" value="Primeiro nome" />
                                                <x-jet-input id="civil.primeiro_nome" type="text"
                                                    wire:model="civil.primeiro_nome" />
                                                <x-jet-input-error for="civil.primeiro_nome" class="mt-2" />
                                            </div>
                                        </div>


                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button wire:click.prevent="cadastrar" type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Editar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Final Informações Específicas Civil --}}
            @endif

        </div>

    </div>

</div>

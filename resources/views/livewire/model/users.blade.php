<div class="border-b border-gray-200 border-t overflow-hidden sm:border sm:rounded-lg">

    <div class="bg-white border-gray-200 flex items-center justify-between px-4 py-2 sm:items-baseline sm:px-6 sm:py-4">
        <div class="flex-shrink min-w-0 flex items-center">
            <h3 class="flex-shrink min-w-0 font-regular text-base md:text-lg leading-snug truncate">
                Cadastro geral de pessoal do CMSE
            </h3>
        </div>
    </div>

    <div class="bg-gray-100">

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
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
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
                                            <x-jet-label for="password" value="Senha" />
                                            <x-jet-input id="password" type="password" wire:model="password" />
                                            <x-jet-input-error for="password" class="mt-2" />
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
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
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
                                        <div class="col-span-8 sm:col-span-2">
                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-900">Sexo
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input id="push_everything" name="push_notifications"
                                                            type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_everything"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Masculino
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="push_email" name="push_notifications" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_email"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Feminino
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-span-8 sm:col-span-2">
                                            <fieldset>
                                                <div>
                                                    <legend class="text-base font-medium text-gray-900">Categoria
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input id="push_everything" name="push_notifications"
                                                            type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_everything"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Militar
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="push_email" name="push_notifications" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_email"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Civil
                                                        </label>
                                                    </div>
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
            {{-- @if ($detail->detailable_type == 'militar') --}}
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
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
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
                                                    <legend class="text-base font-medium text-gray-900">Situação
                                                    </legend>
                                                </div>
                                                <div class="mt-4 space-y-4">
                                                    <div class="flex items-center">
                                                        <input id="push_everything" name="push_notifications"
                                                            type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_everything"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Reserva
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="push_email" name="push_notifications" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push_email"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Ativa
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>


                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Final Informações Específicas Militar --}}
            {{-- @elseif ($detail->detailable_type == 'civil') --}}
             {{-- separador --}}
             <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
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
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-4 sm:col-span-2">
                                            <x-jet-label for="detail.nome_completo" value="Primeiro nome" />
                                            <x-jet-input id="detail.nome_completo" type="text"
                                                wire:model="detail.nome_completo" />
                                            <x-jet-input-error for="detail.nome_completo" class="mt-2" />
                                        </div>
                                    </div>


                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Final Informações Específicas Civil --}}
            {{-- @endif --}}
            {{-- separador --}}
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200">
                    </div>
                </div>
            </div>


            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Decide which communications you'd like to receive and how.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">By Email</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments"
                                                        class="font-medium text-gray-700">Comments</label>
                                                    <p class="text-gray-500">Get notified when someones posts a comment
                                                        on a posting.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="candidates" name="candidates" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="candidates"
                                                        class="font-medium text-gray-700">Candidates</label>
                                                    <p class="text-gray-500">Get notified when a candidate applies for a
                                                        job.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="offers" name="offers" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="offers" class="font-medium text-gray-700">Offers</label>
                                                    <p class="text-gray-500">Get notified when a candidate accepts or
                                                        rejects an offer.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div>
                                            <legend class="text-base font-medium text-gray-900">Push Notifications
                                            </legend>
                                            <p class="text-sm text-gray-500">These are delivered via SMS to your mobile
                                                phone.</p>
                                        </div>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push_everything" name="push_notifications" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push_everything"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Everything
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push_email" name="push_notifications" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push_email"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Same as email
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push_nothing" name="push_notifications" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push_nothing"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    No push notifications
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>














<main class="container leading-normal my-12 mx-auto px-4">

    <h1 class="mb-8 text-5xl">
        Cadastro geral de pessoal do CMSE
    </h1>

    <p class="text-xl text-justify">
        Este formulário tem a finalidade de cadastrar as informações de todos os militares e funcionários civis
        do Comando militar do Sudeste para servir de base para acesso a todos os sistemas em funcionamento
        no CMSE. Seu preenchimento é obrigatório e servirá também para o controle de acesso ao QG e ao
        sistema eletrônico de arranchamento.
    </p>

    <div class="flex flex-wrap -mx-4 mt-10">
        <div class="mb-4 px-4 md:mb-0 w-full">
            <h2 class="border-b border-black mb-2">
                Formulário
            </h2>

        </div>
    </div>

    <div class="grid grid-cols-12 mt-8">

        <div class="col-start-2 col-span-10 bg-gray-100">

            <x-jet-form-section submit="updateProfileInformation">
                <x-slot name="title">
                </x-slot>

                <x-slot name="description">
                </x-slot>

                <x-slot name="form">


                    <!-- Login user-->
                    <div class="col-span-6 col sm:col-span-3">
                        <x-jet-label for="user.name" value="Login" />
                        <x-jet-input id="user.name" type="text" class="mt-1 block w-full" wire:model="user.name" />
                        <x-jet-input-error for="user.name" class="mt-2" />
                    </div>

                    <!-- Email user-->
                    <div class="col-span-6 col sm:col-span-3">
                        <x-jet-label for="user.email" value="Email" />
                        <x-jet-input id="user.email" type="text" class="mt-1 block w-full" wire:model="user.email" />
                        <x-jet-input-error for="user.email" class="mt-2" />
                    </div>
                    <!-- CPF user-->
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="user.cpf" value="CPF" />
                        <x-jet-input id="user.cpf" type="text" class="mt-1 block w-full" wire:model="user.cpf" />
                        <x-jet-input-error for="user.cpf" class="mt-2" />
                    </div>
                    <!-- Senha cpf-->
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="password" value="Senha" />
                        <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model="password" />
                        <x-jet-input-error for="password" class="mt-2" />
                    </div>

                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="password_confirmation" value="Senha" />
                        <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                            wire:model="password_confirmation" />
                        <x-jet-input-error for="password_confirmation" class="mt-2" />
                    </div>

                </x-slot>


            </x-jet-form-section>


            <x-jet-form-section submit="updateProfileInformation">
                <x-slot name="title">
                    Informaçoes complementares gerais.
                </x-slot>

                <x-slot name="description">
                    Estes campos contêm informações gerais para controle de pessoal.
                </x-slot>

                <x-slot name="form">

                    <!-- Nome completo detail -->
                    <div class="col-span-6 col sm:col-span-4">
                        <x-jet-label for="detail.nome_completo" value="Nome completo" />
                        <x-jet-input id="detail.nome_completo" type="text" class="mt-1 block w-full"
                            wire:model="detail.nome_completo" placeholder="Sem abreviaturas" />
                        <x-jet-input-error for="detail.nome_completo" class="mt-2" />
                    </div>

                    <!-- Identidade detail -->
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="detail.idt" value="Identidade" />
                        <x-jet-input id="detail.idt" type="text" class="mt-1 block w-full" wire:model="detail.idt"
                            placeholder="Somente dígitos" />
                        <x-jet-input-error for="detail.idt" class="mt-2" />
                    </div>

                    <!-- Data de nascimento detail -->
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="detail.dtNasc" value="Data de nascimento" />
                        <x-jet-input id="detail.dtNasc" type="date" class="mt-1 block w-full"
                            wire:model="detail.dtNasc" />
                        <x-jet-input-error for="detail.dtNasc" class="mt-2" />
                    </div>

                    {{-- Sexo Detail --}}
                    <div class="col-span-6 col sm:col-span-1">
                        <x-jet-label for="sexo" value="{{ __('Masculino') }}" />
                        <x-jet-input id="sexo" value="masculino" type="radio" class="mt-1 block form-check-input"
                            name="sexo" wire:model="sexo" />
                        <x-jet-input-error for="sexo" class="mt-2" />
                    </div>
                    <div class="col-span-6 col sm:col-span-1">
                        <x-jet-label for="sexo" value="{{ __('Feminino') }}" />
                        <x-jet-input id="sexo" value="feminino" type="radio" class="mt-1 block" name="sexo"
                            wire:model="sexo" />
                    </div>

                    {{-- OM detail --}}
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="detail.om_id" value="OM" />
                        <x-select disabled='' ref="siglaOm" :arra="$oms" class="mt-1 w-full block"
                            wire:model="detail.om_id" />
                        <x-jet-input-error for="detail.om_id" class="mt-2" />
                    </div>

                    {{-- Cargo detail --}}
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="detail.cargo_id" value="Cargo" />
                        <x-select disabled='' ref="nomeCg" :arra="$cargos" class="mt-1 w-full block"
                            wire:model="detail.cargo_id" />
                        <x-jet-input-error for="detail.cargo_id" class="mt-2" />
                    </div>

                    {{-- Seção detail --}}
                    <div class="col-span-6 col sm:col-span-2">
                        <x-jet-label for="detail.section_id" value="Seção" />
                        <x-select disabled='' ref="nomeSecao" :arra="$sections" class="mt-1 w-full block"
                            wire:model="detail.section_id" />
                        <x-jet-input-error for="detail.section_id" class="mt-2" />
                    </div>

                    {{-- Militar/Civil Detail --}}
                    <div class="col-span-6 col sm:col-span-1">
                        <x-jet-label for="detail.detailable_type" value="{{ __('Militar') }}" />
                        <x-jet-input id="detail.detailable_type" value="militar" type="radio"
                            class="mt-1 block form-check-input" name="detail.detailable_type"
                            wire:model="detail.detailable_type" />
                        <x-jet-input-error for="detail.detailable_type" class="mt-2" />
                    </div>
                    <div class="col-span-6 col sm:col-span-1">
                        <x-jet-label for="detail.detailable_type" value="{{ __('Civil') }}" />
                        <x-jet-input id="detail.detailable_type" value="civil" type="radio" class="mt-1 block"
                            name="detail.detailable_type" wire:model="detail.detailable_type" />
                    </div>

                </x-slot>


            </x-jet-form-section>

            <x-jet-form-section submit="updateProfileInformation">
                <x-slot name="title">
                    Informaçoes específicas.
                </x-slot>

                <x-slot name="description">
                    Estes campos contêm informações específicas para controle especial de cada situação.
                </x-slot>

                <x-slot name="form">

                    @if ($detail->detailable_type == 'militar')


                        {{-- Posto Grad Militar --}}
                        <div class="col-span-6 col sm:col-span-2">
                            <x-jet-label for="militar.postograd_id" value="Posto/Grad" />
                            <x-select disabled='' ref="siglaPg" :arra="$postograds" class="mt-1 w-full block"
                                wire:model="militar.postograd_id" />
                            <x-jet-input-error for="militar.postograd_id" class="mt-2" />
                        </div>

                        <!-- Nome de guerra Militar -->
                        <div class="col-span-6 col sm:col-span-4">
                            <x-jet-label for="militar.nome_guerra" value="Nome de guerra" />
                            <x-jet-input id="militar.nome_guerra" type="text" class="mt-1 block w-full"
                                wire:model="militar.nome_guerra" placeholder="" />
                            <x-jet-input-error for="militar.nome_guerra" class="mt-2" />
                        </div>

                        {{-- Forcas militar --}}
                        <div class="col-span-6 col sm:col-span-2">
                            <x-jet-label for="militar.forca_id" value="Força" />
                            <x-select disabled='' ref="abrev" :arra="$forcas" class="mt-1 w-full block"
                                wire:model="militar.forca_id" />
                            <x-jet-input-error for="militar.forca_id" class="mt-2" />
                        </div>

                        {{-- Situaca Militar --}}
                        <div class="col-span-6 col sm:col-span-1">
                            <x-jet-label for="situacao" value="{{ __('Ativa') }}" />
                            <x-jet-input id="situacao" value="ativa" type="radio" class="mt-1 block form-check-input"
                                name="situacao" wire:model="situacao" />
                            <x-jet-input-error for="situacao" class="mt-2" />
                        </div>
                        <div class="col-span-6 col sm:col-span-1">
                            <x-jet-label for="situacao" value="{{ __('Reserva') }}" />
                            <x-jet-input id="situacao" value="reserva" type="radio" class="mt-1 block" name="situacao"
                                wire:model="situacao" />
                        </div>



                    @elseif($detail->detailable_type == 'civil')

                        <!-- Primeito nome Civil -->
                        <div class="col-span-6 col sm:col-span-4">
                            <x-jet-label for="civil.primeiro_nome" value="Primeiro nome" />
                            <x-jet-input id="civil.primeiro_nome" type="text" class="mt-1 block w-full"
                                wire:model="civil.primeiro_nome" placeholder="" />
                            <x-jet-input-error for="civil.primeiro_nome" class="mt-2" />
                        </div>

                    @endif

                </x-slot>

                <x-slot name="actions">







                    <x-jet-button wire:click.prevent="cadastrar">
                        {{ __('Salvar') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>


        </div>
    </div>
</main>

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
                    Informaçoes para acesso aos sistemas.
                </x-slot>

                <x-slot name="description">
                    Estes campos devem conter os dados básicos para acesso aos sistemas.
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
                        <x-jet-label for="militar.forca_id" value="OM" />
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

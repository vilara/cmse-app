<div class="bg-gray-200">

    <x-jet-form-section submit="updateProfileInformation">
        <x-slot name="title">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </x-slot>

        <x-slot name="form">
            <!-- Profile Photo -->
            <!-- Name -->
            <div class="col-span-6 col sm:col-span-3">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                {{-- <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                autocomplete="name" /> --}}
                <x-select disabled='' class="mt-1 w-full block" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Name') }}" wire:dirty.class="text-red-500"
                    wire:target="user.name" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.lazy="user.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Masculino') }}" />
                <x-jet-input id="name" name="sexo" type="radio" class="mt-1 block" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Feminino') }}" />
                <x-jet-input id="name" name="sexo" type="radio" class="mt-1 block" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </x-slot>
    </x-jet-form-section>
</div>
<div class="bg-gray-400">
    <x-jet-form-section submit="updateProfileInformation">
        <x-slot name="title">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </x-slot>

        <x-slot name="form">
            <!-- Profile Photo -->


            <!-- Name -->
            <div class="col-span-6 col sm:col-span-3">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Masculino') }}" />
                <x-jet-input id="name" name="sexo" type="radio" class="mt-1 block" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <div class="col-span-6 col sm:col-span-1">
                <x-jet-label for="name" value="{{ __('Feminino') }}" />
                <x-jet-input id="name" name="sexo" type="radio" class="mt-1 block" wire:model.defer="state.name"
                    autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>



    </x-jet-form-section>

</div>

<div class="mt-8 mx-auto w-full">
    <div class="bg-green-500 py-8 px-8 shadow rounded-lg ">
        <form class="mb-0 space-y-6" action="#" method="POST">
            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-200 focus:ring-indigo-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-200 focus:ring-indigo-500">
            </div>

            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700">Om</label>
                <div class="mt-1">
                    <select id=" "
                        class="appearance-none bg-white block border border-gray-400 focus:outline-none focus:shadow-outline hover:border-gray-500 leading-tight pr-8 px-4 py-2 rounded shadow">
                        <option>Teste 1</option>
                        <option>Teste 2</option>
                        <option>Teste 3</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center">
                <input type="checkbox"
                    class="h-5 w-5 rounded border-gray-300 text-indigo-500 focus:border-indigo-200 focus:ring foucus:ring-indigo-500 ">
                <Label class="ml-2 block text-sm text-gray-900">Masculino </Label>
                <a href="" class="text-indigo-600 hover:text-indigo-500">Policy</a>
            </div>


        </form>
    </div>
</div>










<div class="flex rounded-lg bg-green-500">
    <div class="bg-blue-600 flex w-1/3 items-center p-8">
        <div class="flex-grow">
            <x-titulo type="white" nome="Aqui é o campo nome">
                <x-slot name="novoSlot">campo 1</x-slot>
                <h2>Teste de h2</h2>
                <x-slot name="novoSlot">campo 1</x-slot>
                <h3>Teste de h3</h3>
            </x-titulo>

            <p class="text-center text-blue-200">
                Preencha os campos ao para completar o cadastro geral do CMSE.

            </p>
        </div>
    </div>
    <div class="w-2/3 items-center p-24 border border-gray-300">
        <x-titulo type="white" nome="Formulário de cadastramento">

        </x-titulo>

        <div class="flex-grow bg-white shadow-xl rounded-lg border border-gray-300 p-8">
            <div class="flex bg-gray-300">
                <img src="{{ asset('img/cmse.png') }}" alt="Rosto de homem" class="w-24 rounded-full">
                <p class="text-xl bg-gray-500  mx-auto">Mario Silva</p>
                <p class="text-sm bg-green-900 text-gray-100">Gerente de suporte técnico</p>
            </div>
            <form class="flex w-full mt-8">
                <input type="password"
                    class="appearance-none flex-1 w-full text-gray-700 bg-gray-200 rounded-md hover:bg-white  border  border-gray-200 outline-none focus:bg-white focus:text-gray-200 focus:outline-none focus:ring focus:border-blue-100 py-2 px-4  "
                    placeholder="Sua senha">
                <button type="button"
                    class="inline-flex items-center ml-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Entrar</button>
            </form>
        </div>



    </div>
</div>






<main class="container leading-normal my-12 mx-auto px-4">

    <h1 class="mb-8 text-5xl">
        Simple tailwind grid
    </h1>

    <p class="text-xl">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Assumenda similique quasi praesentium! Debitis alias
        quae error veritatis tenetur perferendis cupiditate?
        Perferendis quasi quod suscipit magni aspernatur animi qui sit quo.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Assumenda similique quasi praesentium! Debitis alias
        quae error veritatis tenetur perferendis cupiditate?
        Perferendis quasi quod suscipit magni aspernatur animi qui sit quo.
    </p>

    <div class="flex flex-wrap -mx-4 mt-10">
        <div class="mb-4 px-4 md:mb-0 w-full md:w-1/3 lg:w-1/4">
            <h2 class="border-b border-black mb-2">
                Sub heading 1
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ut voluptate et voluptatem.
                Officiis, amet minus. Doloremque maiores
                dignissimos eum incidunt sapiente quod quas
                commodi dolorem repudiandae at sed, unde magni.
            </p>
        </div>
        <div class="mb-4 px-4 md:mb-0 w-full md:w-2/3  lg:w-3/4">
            <h2 class="border-b border-black mb-2">
                Sub heading 2
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ut voluptate et voluptatem.
                Officiis, amet minus. Doloremque maiores
                dignissimos eum incidunt sapiente quod quas
                commodi dolorem repudiandae at sed, unde magni.
            </p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-4 my-6">

        <div class="p-4 w-full md:w-1/2 lg:w-1/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.
                    , architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
        <div class="flex flex-wrap content-center p-4 w-full md:w-1/2 lg:w-2/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
        <div class="p-4 w-full md:w-1/2 lg:w-1/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
        <div class="p-4 w-full md:w-1/2 lg:w-2/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
        <div class="p-4 w-full md:w-1/2 lg:w-1/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
        <div class="p-4 w-full md:w-1/2 lg:w-2/3">
            <div class="bg-gray-100 p-4">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Libero eum, architecto corrupti, vitae doloremque ducimus,
                    optio voluptas eligendi assumenda eaque aliquam molestias
                    praesentium esse animi fugiat dolores odio minus mollitia.</p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap -mx-6 p-4">
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
        <div class="my-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
            <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
        </div>
    </div>


    <div class="flex flex-wrap -mx-4">
        <div class="px-4 w-full lg:w-1/2">
            <p class="leading-normal text-xl"> Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Perspiciatis laboriosam
                molestias dolorum quas sit nulla tenetur, doloribus
                fuga blanditiis, eius ea ut ad quam eaque odio sapiente
                similique doloremque! Amet! fuga blanditiis, eius ea ut ad quam eaque odio sapiente
                similique doloremque! Amet! fuga blanditiis, eius ea ut ad </p>
        </div>
        <div class="px-4 w-full lg:w-1/2">
            <div class="flex flex-wrap -mx-2">
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
                <div class="mb-2 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <img src="{{ asset('img/640x640.png') }}" alt="placeholder" class="block h-auto w-full">
                </div>
            </div>
        </div>
    </div>
</main>









<main>
    <div class="py-12 border-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">




            <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
                <form>
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="login">
                                    Login
                                </label>
                                <input wire:model="user.name"
                                    class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                    type="text" placeholder="login de acesso">
                                <div>
                                    @error('user.name')<span
                                        class="text-red-500 text-xs italic">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input wire:model='user.email'
                                    class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                    id="email" type="email" placeholder="Email">
                                <div>
                                    @error('user.email')<span
                                        class="text-red-500 text-xs italic">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="cpf">
                                    CPF
                                </label>
                                <input wire:model='user.cpf' id="cpf"
                                    class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                    id="email" type="text" placeholder="cpf">
                                <div>
                                    @error('user.cpf')<span
                                        class="text-red-500 text-xs italic">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="block mt-4 bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3">



                                <label class="inline-flex items-center mt-3">
                                    <input class="form-radio" type="radio"><span
                                        class="ml-2 text-sm text-gray-700">label</span>
                                </label>




                                <label class="text-gray-600 ml-2 text-sm"><input {{-- focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 --}}
                                        class="border-gray-300 text-indigo-600 " wire:model="detail.sexo" type="radio"
                                        id="sexo1" value="masculino">
                                    Masculino</label>
                                <label class="text-gray-600 ml-2 text-sm"><input class="" wire:model="detail.sexo"
                                        type="radio" id="sexo2" value="feminino">
                                    Feminino</label>
                                @error('detail.sexo')<span
                                    class="text-red-500 text-xs italic">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                                    for="application-link">
                                    Nome completo
                                </label>
                                <input wire:model="detail.nome_completo"
                                    class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                    id="application-link" type="radio" placeholder="Sem abreviaturas">
                                @error('detail.nome_completo')<span
                                    class="text-red-500 text-xs italic">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        @if ($show)
                            <div class="-mx-3 md:flex ml-0 mb-6">


                                <div
                                    class="block mt-4 bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3">
                                    <label for="remember_me" class="flex items-center">
                                        {{ $masculino }}
                                        <x-jet-checkbox id="sexo" value="{{ $masculino }}" wire:model="masculino" />
                                        <span class="ml-2 mr-5 text-sm text-gray-600">{{ __('Masculino') }}</span>
                                        {{ $feminino }}
                                        <x-jet-checkbox id="sexo" value="{{ $feminino }}" wire:model="feminino" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Femninino') }}</span>
                                    </label>
                                </div>
                            </div>


                            <div class="-mx-3 md:flex mb-2">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                                        for="location">
                                        OM
                                    </label>
                                    <div>
                                        <select
                                            class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded"
                                            id="department">
                                            @foreach ($oms as $index => $om)
                                                <option>Selecione ...</option>
                                                <option value="{{ $om->id }}">{{ $om->siglaOm }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                                        for="job-type">
                                        Seção
                                    </label>
                                    <div>
                                        <select
                                            class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded"
                                            id="department">
                                            @foreach ($sections as $index => $section)
                                                <option>Selecione ...</option>
                                                <option value="{{ $section->id }}">{{ $section->siglaSecao }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2"
                                        for="department">
                                        Função
                                    </label>
                                    <div>
                                        <select
                                            class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded"
                                            id="department">
                                            @foreach ($cargos as $index => $cargo)
                                                <option>Selecione ...</option>
                                                <option value="{{ $cargo->id }}">{{ $cargo->siglaCg }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        @endif
                        <div class="-mx-3 md:flex mt-2">
                            <div class="md:w-full px-3">
                                <x-jet-button wire:click.prevent="cadastrar">
                                    {{ __('Cadastrar') }}
                                </x-jet-button>


                                <button wire:click.prevent="$toggle('show')"
                                    class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                                    Button
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>






        </div>
    </div>
</main>

{{ $show }}
<button wire:click="teste">Show Content</button>

@if ($show)
    <span>Some Content...</span>
@endif

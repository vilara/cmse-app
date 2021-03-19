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
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Perfil</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Essas informações serão utilizadas para acesso aos sistemas, portanto, preencha corretamente os campos ao lado.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-3">
                                            <label for="company_website"
                                                class="block text-sm font-medium text-gray-700">
                                                Website
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span
                                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                    http://
                                                </span>
                                                <input type="text" name="company_website" id="company_website"
                                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                    placeholder="www.example.com">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-4 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company_website"
                                                class="block text-sm font-medium text-gray-700">
                                                Website
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <span
                                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                    http://
                                                </span>
                                                <input type="text" name="company_website" id="company_website"
                                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                    placeholder="www.example.com">
                                            </div>
                                        </div>

                                     {{--    <x-jet-label for="user.name" value="Login" />
                                        <x-jet-input id="user.name" type="text" class="mt-1 block w-full" wire:model="user.name" />
                                        <x-jet-input-error for="user.name" class="mt-2" /> --}}

                                        <div class="col-span-3 sm:col-span-2">
                                            <x-jet-label  class=" text-sm font-medium text-gray-700" for="user.name" value="Website" />
                                            <div class="mt-1 flex rounded-md shadow-sm text-gray-700">
                                                <x-jet-input id="user.name" type="text" class="block w-full sm:text-sm" wire:model="user.name" />
                                            </div>
                                        </div>


                                    </div>

                                    <div>
                                        <label for="about" class="block text-sm font-medium text-gray-700">
                                            About
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="about" name="about" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                                placeholder="you@example.com"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Brief description for your profile. URLs are hyperlinked.
                                        </p>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Photo
                                        </label>
                                        <div class="mt-1 flex items-center">
                                            <span
                                                class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                <svg class="h-full w-full text-gray-300" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </span>
                                            <button type="button"
                                                class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Change
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Cover photo
                                        </label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="file-upload"
                                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file"
                                                            class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
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
                        </form>
                    </div>
                </div>

            </div>

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
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Use a permanent address where you can receive mail.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first_name"
                                                class="block text-sm font-medium text-gray-700">First name</label>
                                            <input type="text" name="first_name" id="first_name"
                                                autocomplete="given-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last
                                                name</label>
                                            <input type="text" name="last_name" id="last_name"
                                                autocomplete="family-name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="email_address"
                                                class="block text-sm font-medium text-gray-700">Email address</label>
                                            <input type="text" name="email_address" id="email_address"
                                                autocomplete="email"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="country" class="block text-sm font-medium text-gray-700">Country
                                                / Region</label>
                                            <select id="country" name="country" autocomplete="country"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Mexico</option>
                                            </select>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="street_address"
                                                class="block text-sm font-medium text-gray-700">Street address</label>
                                            <input type="text" name="street_address" id="street_address"
                                                autocomplete="street-address"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="city"
                                                class="block text-sm font-medium text-gray-700">City</label>
                                            <input type="text" name="city" id="city"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="state" class="block text-sm font-medium text-gray-700">State /
                                                Province</label>
                                            <input type="text" name="state" id="state"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP
                                                / Postal</label>
                                            <input type="text" name="postal_code" id="postal_code"
                                                autocomplete="postal-code"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                        </form>
                    </div>
                </div>
            </div>

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

<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>


                    <div class="md:grid md:grid-cols-3 md:gap-6" >
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Update your account&#039;s profile information and email address.
                                </p>
                            </div>
                        </div>

                     
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form wire:submit.prevent="">
                                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                    <div class="grid grid-cols-6 gap-6">
                                        <!-- Name -->
                                        @if ($show)
                                            <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="name">
                                                Nome
                                            </label>
                                            <input
                                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                id="name" type="text" wire:model.defer="name" autocomplete="name">
                                        </div> 
                                        @endif
                                       

                                        <!-- Email -->
                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="email">
                                                Email
                                            </label>
                                            <input
                                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                id="email" type="email" wire:model.defer="state.email">
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                                        wire:loading.attr="disabled">
                                        Save
                                    </button>

                                    <x-jet-button wire:click.prevent="$toggle('show')">
                                        {{ __('Create') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</main>

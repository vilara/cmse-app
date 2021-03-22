<div class="p-6">
    <div class="flex itens-center justify-end px-4 py-3 text-right">
        <x-jet-button wire:click="createShowModal">
            {{ __('Salvar informações') }}
        </x-jet-button>

    </div>


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

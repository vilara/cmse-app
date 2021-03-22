<div class="h-40 flex justify-center gap-8 items-center bg-gray-300 shadow-lg">
    <div class="card" wire:click='cadastroForm'>
        <div class="flex w-80 flex-col justify-center items-center">
            <svg class="w-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                </path>
            </svg>
            <div class="mt-3">
                <span class="uppercase font-semibold text-xl ">
                    Cadastrar
                </span>
            </div>
            <div class="badge">
                <svg class="w-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                    class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                    </path>
                </svg>
                <span class="ml-1 text-xs">{{ $nr }}</span>
            </div>
        </div>
    </div>
    <div class="card w-80" wire:click='ListaUsers'>
        <div class="flex flex-col justify-center items-center">
            <svg class="w-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                </path>
            </svg>
            <div class="mt-3">
                <span class="uppercase font-semibold text-xl ">
                    Listar
                </span>
            </div>
            <div class="badge">
                <svg class="w-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                    class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                    </path>
                </svg>
                <span class="ml-1 text-xs">{{ $nr }}</span>
            </div>
        </div>
    </div>

</div>

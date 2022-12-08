<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent="crearVacante">
    <div>
        <x-input-label for="titulo" :value="__('Titulo')" />

        <x-text-input id="titulo" placeholder="Titulo Vacante" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" />

        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select wire:model="salario" id="salario" class="rounded border-gray-300 shadow-sm focus:ring-indigo-500 w-full">
        
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{$salario->salario}}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select wire:model="categoria" id="categoria" class="rounded border-gray-300 shadow-sm focus:ring-indigo-500 w-full">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{$categoria->categoria}}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input id="empresa" placeholder="Empresa: ej. Netflix, Uber o Shopify" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" />

        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último dia para postularse')" />

        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />

        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />

        <textarea class="rounded border-gray-300 shadow-sm focus:ring-indigo-500 w-full h-64" wire:model="descripcion" placeholder="Descripción general del puesto, experiencia"></textarea>

        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input id="imagen" class="block mt-1 w-full" accept="image/*" type="file" wire:model="imagen" />

        <div class="my-5 w-80">
            @if ($imagen)
                <img src="{{ $imagen->temporaryUrl() }}">
            @endif
        </div>

        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>

</form>
<x-hero-section>
    <div class="text-white border border-white rounded max-w-sm text-center">
        <h3 class="my-3 font-bold text-lg">Tambah Data Pembia</h3>
    </div>

    <div class="mt-5">
        <form method="POST" action="{{ route('pembina.store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="nip" :value="__('NIP')" />
                <x-text-input id="nip" class="block mt-1 w-full" type="number" name="nip" :value="old('nip')" required autofocus autocomplete="nip" />
                <x-input-error :messages="$errors->get('nip')" class="mt-2" />
            </div>
    
            <div class="mt-4">
                <x-input-label for="nama" :value="__('Nama')" />
                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="hp" :value="__('HP')" />
                <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp" :value="old('hp')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('hp')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('pembina.index') }}" class="btn">Batal</a>

                <x-primary-button class="ml-4">
                    {{ __('Create') }}
                </x-primary-button>

            </div>
        </form>
    </div>
</x-hero-section>
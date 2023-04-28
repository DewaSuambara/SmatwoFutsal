<x-hero-section>
    <div class="text-white border border-white rounded max-w-sm text-center">
        <h3 class="my-3 font-bold text-lg">Edit Data Pemain</h3>
    </div>

    <div class="mt-5">
        <form method="POST" action="{{ route('pemain.update', $pemain->id) }}">
            @csrf
            @method('put')
            <!-- Name -->
            <div>
                <x-input-label for="nim" :value="__('NIM')" />
                <x-text-input id="nim" class="block mt-1 w-full" type="number" name="nim" :value="old('nim', $pemain->nim)" required autofocus autocomplete="nim" />
                <x-input-error :messages="$errors->get('nim')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="kelas" :value="__('Kelas')" />
                <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas', $pemain->kelas)" required autocomplete="username" />
                <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
            </div>
    
            <div class="mt-4">
                <x-input-label for="nama_murid" :value="__('Nama Murid')" />
                <x-text-input id="nama_murid" class="block mt-1 w-full" type="text" name="nama_murid" :value="old('nama_murid', $pemain->nama_murid)" required autocomplete="username" />
                <x-input-error :messages="$errors->get('nama_murid')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="hp" :value="__('HP')" />
                <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp" :value="old('hp', $pemain->hp)" required autocomplete="username" />
                <x-input-error :messages="$errors->get('hp')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('pemain.index') }}" class="btn">Batal</a>

                <x-primary-button class="ml-4">
                    {{ __('Update') }}
                </x-primary-button>

            </div>
        </form>
    </div>
</x-hero-section>

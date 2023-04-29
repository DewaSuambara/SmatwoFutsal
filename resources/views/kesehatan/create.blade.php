<x-hero-section>
    <div class="text-white border border-white rounded max-w-sm text-center">
        <h3 class="my-3 font-bold text-lg">Tambah Data Kesehatan</h3>
    </div>

    <div class="mt-5">
        <form method="POST" action="{{ route('kesehatan.store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="nim" :value="__('NIM')" />
                <x-text-input id="nim" class="block mt-1 w-full" type="number" name="nim" :value="old('nim')" required autofocus autocomplete="nim" />
                <x-input-error :messages="$errors->get('nim')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="nama_anggota" :value="__('Nama Anggota')" />
                <x-text-input id="nama_anggota" class="block mt-1 w-full" type="text" name="nama_anggota" :value="old('nama_anggota')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('nama_anggota')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="kelas" :value="__('Kelas')" />
                <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="hp" :value="__('HP')" />
                <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp" :value="old('hp')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('hp')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('kesehatan.index') }}" class="btn">Batal</a>

                <x-primary-button class="ml-4">
                    {{ __('Create') }}
                </x-primary-button>

            </div>
        </form>
    </div>
</x-hero-section>

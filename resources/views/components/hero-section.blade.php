<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-primary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}

                    {{-- masukkan hero section lalu extend melalui slot --}}

    <section class="container mx-auto">
        <div>
            <img src="{{ asset('assets/tim.jpeg') }}" alt="banner" class="mt-5 w-full h-80">
        </div>

        {{-- table pemain --}}
        <div class="flex flex-row gap-4">
            {{-- side banner --}}
            <div class="">
                <img src="{{ asset('assets/side.png') }}" alt="sideimage" class="mt-5 w-96 h-screen">
            </div>

            {{-- data table --}}
            <div class="mt-5 ml-5 w-full">
                {{ $slot }}
            </div>

        </div>
    


        <div class="mt-5 bg-slate-500">
            <div class="inline-grid grid-cols-2 gap-5 text-white">
                <div class="ml-5">
                    <h1>VISI</h1>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, itaque!</li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis commodi adipisci impedit
                            necessitatibus.</li>
                    </ul>

                    <div>
                        <h1>MISI</h1>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, maxime!</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex aliquam non.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center text-white">
                    <h5 class="text-dark">TENTANG KAMI</h5>
                    <p class="text-dark">
                        <a href="#" class="text-decoration-none">Jl. Pendidikan Timur, XX Tabanan</a>
                    </p>
                    <p class="text-dark">
                        <a href="#" class="text-decoration-none">+62 812 3624 0550</a>
                    </p>
                    <p class="text-dark">
                        <a href="#" class="text-decoration-none">info@example.com</a>
                    </p>
                </div>

            </div>
            <div class="text-center text-white">
                Copyright &copy; 2023. All right reserve
                <br>
                    Developed by Fire House Creative
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

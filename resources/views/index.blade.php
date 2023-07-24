@extends('components.head')
@section('title', 'Home')

<body class="bg-default">
    @auth
    <x-loginheader/>
    @else
    <x-header />
    @endauth
    <section id="home">
        <div class="container">
            <div class="flex flex-wrap justify-center items-center h-screen">
                <div
                    class="w-auto p-10 bg-slate-500/30 rounded-md backdrop-blur-lg flex flex-wrap justify-between items-center">
                    <div class="w-1/2 max-lg:w-full flex justify-center items-center">
                        <img src="{{ asset('img/lambangkab.png') }}" alt="" style="height: 300px">
                    </div>
                    <div class="relative mt-10 text-center w-1/2 max-lg:w-full">
                        <h1 class="font-semibold text-primary text-4xl max-md:text-3xl lg:text-5xl ">Situs Resmi Desa Semboro
                        </h1>
                        <p class="font-medium text-white mb-10 leading-relaxed lg:text-2xl md:text-xl">Kabupaten Jember</p>
                        <a href="/profil"
                            class="text-lg font-semibold text-white bg-primary py-3 px-8 rounded-md hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out max-md:text-xs max-md:px-3">Profil
                            Desa</a>
                        <a href="/surat"
                            class="text-lg font-semibold text-white bg-primary py-3 px-8 rounded-md hover:shadow-2xl hover:bg-hover hover:text-teal-950 transition duration-500 ease-in-out max-md:text-xs max-md:px-3">Ajukan
                            Surat Perizinan</a>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>

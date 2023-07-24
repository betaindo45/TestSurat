@extends('components.head')
@section('title', 'Permintaan Berhasil')

<body class="bg-default">
    <div id="counter">3</div>
    <x-header />
    <section id="redirect" class="">
        <div class="container">
            <div class="flex flex-wrap justify-center items-center h-screen">
                <section id="profil">
                    <div class="container">
                        <div class="w-full px-4">
                            <div class="w-auto mx-auto text-center">
                                <div class="w-auto p-10 bg-slate-500/30 rounded-md backdrop-blur-lg">
                                    <h4 class="font-semibold text-4xl text-primary m-5">
                                        Berhasil Mengirim Permintaan
                                    </h4>
                                    <p class="text-white m-10 text-xl">Mengembalikan Ke Homepage dalam 3 Detik.</p>
                                    <button
                                        class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-white hover:bg-gray-200 hover:text-black focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset"
                                        onclick="window.location.href='/';">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                        </svg>
                                        <span class="inline-block my-5">Back to Homepage</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("/");
            }
        }, 1000);
    </script>
</body>

@extends('components.head')
@section('title', 'Profil Desa')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="profile" class="">
        <div class="container">
            <div class="flex flex-wrap justify-center h-screen">
                <section id="profil">
                    <div class="container">
                        <div class="w-full">
                            <div class="mx-auto text-center bg-slate-500/30 rounded-md backdrop-blur-lg">
                                <div class="w-auto p-10 mt-24">
                                    <h2 class="font-semibold text-3xl text-primary max-md:text-xl max-sm:text-sm mb-10">
                                        Profil Desa Semboro
                                    </h2>
                                    <p class="text-white text-lg max-md:text-base max-sm:text-sm text-left">&emsp; Desa
                                        Semboro merupakan
                                        salah satu dari 6 desa yang terletak wilayah administrasi Kecamatan Semboro
                                        Kabupaten Jember. Sejarah desa Semboro tidak terlepas dari sejarah masyarakat
                                        campuran antara Jawa dan Madura di Kabupaten Jember. Sepanjang jalan di desa ini
                                        banyak ditumbuhi pohon asem di kanan kirinya. Di desa ini awalnya banyak orang
                                        pendatang yang dikenal sebagai boro (dalam bahasa jawa). Sehingga jadilah nama
                                        Semboro yang berasal dari gabungan dua kata, yaitu asem dan boro.</p>
                                    <p class="text-white text-lg max-md:text-base max-sm:text-sm mt-5 text-left">&emsp;
                                        Wilayah Desa Semboro berada di dataran rendah dan memiliki sungai yang membuat
                                        Desa Semboro memiliki potensi untuk hasil panen yang melimpah. Selain itu
                                        banyaknya pendudukn dan beragamnya budaya yang ada di dalam wilayah desa
                                        menjadikannya sebagai sebuah aset pembangunan yang potensial. Banyaknya penduduk
                                        dengan angkatan kerja di berbagai bidang lapangan dan tingginya potensi
                                        kepemudaan juga membuat Desa Semboro memiliki sumber daya manusia yang cukup
                                        memadai untuk menggerakan ekonomi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-10 backdrop-blur-lg rounded-lg shadow-md">
                            <h2
                                class="p-5 text-primary font-semibold text-3xl max-md:text-xl max-sm:text-sm text-center">
                                Explore Semboro</h2>
                            <div class="w-full px-4 flex flex-wrap p-5 justify-center">
                                <div class="w-full bg-white  overflow-hidden mb-10 rounded-lg lg:w-1/2 xl:w-1/3 mx-1 p-5">
                                    <img src="{{ asset('img/pasarsemboro.jpg') }}" alt="">
                                    <div class="py-8 px-6">
                                        <h3
                                            class="text-center text-3xl block mb-3 font-semibold hover:text-primary truncate transition duration-200 cursor-default">
                                            Pasar Semboro</h3>
                                        <p class="font-medium text-gray-800 text-base mb-4">Pasar Semboro dikenal
                                            sebagai pusat perdagangan dan kegiatan ekonomi yang ramai, serta menawarkan
                                            berbagai pengalaman berbelanja yang menarik bagi para pengunjungnya.</p>
                                    </div>
                                </div>
                                <div class="w-full bg-white overflow-hidden mb-10 rounded-lg lg:w-1/2 xl:w-1/3 mx-1 p-5">
                                    <img src="{{ asset('img/tugusemboro.jpeg') }}" alt=""/>
                                    <div class="py-8 px-6">
                                        <h3
                                            class="text-center text-3xl block mb-3 font-semibold hover:text-primary truncate transition duration-200 cursor-default ">
                                            Tugu Semboro</h3>
                                        <p class="font-medium text-gray-800 text-base mb-4">Pasar Semboro dikenal
                                            sebagai pusat perdagangan dan kegiatan ekonomi yang ramai, serta menawarkan
                                            berbagai pengalaman berbelanja yang menarik bagi para pengunjungnya.</p>
                                    </div>
                                </div>
                                <div class="w-full bg-white  overflow-hidden mb-10 rounded-lg lg:w-1/2 xl:w-1/3  mx-1 p-5">
                                    <img src="{{ asset('img/lapangan.png') }}" alt="">
                                    <div class="py-8 px-6">
                                        <h3
                                            class="text-center text-3xl block mb-3 font-semibold hover:text-primary truncate transition duration-200 cursor-default">
                                            Lapangan Desa Semboro</h3>
                                        <p class="font-medium text-gray-800 text-base mb-4">Lapangan Semboro berada di sebelah Balai Desa Semboro, lapangan ini sangatlah luas dan biasa digunakan oleh warga setempat untuk melakukan berbagai aktivitas mulai dari jalan santai, berolahraga, maupun untuk latihan berkendara.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>

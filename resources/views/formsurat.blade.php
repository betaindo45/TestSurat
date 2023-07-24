@extends('components.head')
@section('title', 'Permintaan Surat')

<body class="bg-default">
    @auth
        <x-loginheader />
    @else
        <x-header />
    @endauth
    <section id="form" class="pt-12">
        <div class="container p-10 bg-slate-500/30 backdrop-blur-lg rounded-md justify-center items-center my-12">
            <div class="flex flex-wrap m-10">
                <div class="w-full self-center px-4">
                    <h1 class="font-semibold text-primary md:text-2xl lg:text-4xl text-center max-sm:text-md">FORM
                        PERMOHONAN SURAT</h1>
                </div>
            </div>
            <div class="grid min-h-screen place-items-center -bottom-10 p-0 m-12">
                <div class="w-auto p-12 bg-white rounded-lg">
                    <h1 class="text-xl font-semibold">Tolong isi informasi anda dibawah untuk melakukan pengajuan</h1>
                    <form action="/registersurat" method="post" class="mt-6">
                        @csrf
                        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Nama<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="name" type="text" name="name" placeholder="Budi" autocomplete="given-name"
                            class="@error('name') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('name') }}" />
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="nik" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor
                            Induk Kependudukan (NIK)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="nik" type="text" name="nik" placeholder=""
                            class="@error('nik') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('nik') }}" />
                        @error('nik')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="kk" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nomor
                            Kartu Keluarga (KK)<span class="text-red-600 text-2xl">*</span></label>
                        <input id="kk" type="text" name="kk" placeholder=""
                            class="@error('kk') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('kk') }}" />
                        @error('nokk')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="keperluan"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keperluan Surat<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="keperluan" type="text" name="keperluan" placeholder="Surat Izin"
                            class="@error('keperluan') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('keperluan') }}" />
                        @error('keperluan')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="keterangan"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Keterangan<span
                                class="text-red-600 text-2xl">*</span></label>
                        <input id="keterangan" type="text" name="keterangan" placeholder=""
                            class="@error('keterangan') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('keterangan') }}" />
                        @error('keterangan')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="nohp" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">No.
                            Handphone<span class="text-red-600 text-2xl">*</span></label>
                        <input id="nohp" type="number" name="nohp" placeholder=""
                            class="@error('nohp') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"
                            required value="{{ old('nohp') }}" />
                        @error('nohp')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <label for="email"
                            class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Email</label>
                        <input id="email" type="email" name="email" placeholder=""
                            class="@error('email') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner rounded-lg"value="{{ old('email') }}" />
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                        <button type="submit"
                            class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none rounded-lg">
                            Kirim Pengajuan
                        </button>
                    </form>
                    <p><span class="text-red-600 text-2xl">*</span> Diperlukan</p>
                </div>
            </div>
    </section>
</body>

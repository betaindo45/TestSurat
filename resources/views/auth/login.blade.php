@extends('components.head')
@section('title', 'Login Admin')

<body class="bg-default">
    <x-header />
    <section id="login">
        <div class="container p-12">
            <div class="flex flex-wrap">
                <div class="w-full self-center">
                    <!-- component -->
                    <div class="min-h-screen  flex flex-col justify-center sm:py-12">
                        <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md bg-slate-500/30 backdrop-blur-lg rounded-lg">
                            <h1 class="font-bold text-center text-2xl mb-5 text-white">Semboro Mail</h1>
                            <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
                                <div class="px-5 py-7">
                                    <form action="/login" method="post">
                                        @csrf
                                        <label for="username" class="font-semibold text-sm text-gray-600 pb-1 block">Username</label>
                                        <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" autofocus required value="{{ old('username') }}"/>
                                        @error('username')
                                            <div class="alert alert-danger"> {{ $message }} </div>
                                        @enderror
                                        <label for="password" class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                                        <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" required/>
                                        @error('password')
                                            <div class="alert alert-danger"> {{ $message }} </div>
                                        @enderror
                                        <button type="submit" class="transition duration-200 bg-primary hover:bg-hover focus:bg-secondary focus:shadow-sm focus:ring-4 focus:ring-primary focus:ring-opacity-50 hover:text-black focus:text-yellow-100   text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                                            <span class="inline-block mr-2">Login</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </button>   
                                    </form>
                                </div>
                            </div>
                            <div class="py-5">
                                <div class="grid grid-cols-2 gap-1">
                                    <div class="text-center sm:text-left whitespace-nowrap">
                                        <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-white hover:bg-gray-200 hover:text-black focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset" onclick="window.location.href='/';">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>
                                            <span class="inline-block ml-1">Back to Homepage</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
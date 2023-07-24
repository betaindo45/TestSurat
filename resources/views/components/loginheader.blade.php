<div class="w-full mx-auto bg-primary/30 backdrop-blur-lg fixed top-0 z-10 h-50 max-sm:h-100">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
            <a class="flex items-center text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl ml-5"
                href="/">
                <span class="font-semibold text-lg md:text-xl text-center">Semboro</span>
            </a>
        </div>
        <div class="flex items-center space-x-4 px-6">
            <a href="/profil" class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">Profil Desa</a>
            <a href="/registersurat"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Buat Surat
            </a>
            <a href="/DashboardAdmin/view"
                class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-105 duration-300 ease-in-out">
                Admin
            </a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="inline-block text-white no-underline text-center h-10 pt-4 md:h-auto md:pt-4 transform hover:scale-105 duration-300 ease-in-out">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
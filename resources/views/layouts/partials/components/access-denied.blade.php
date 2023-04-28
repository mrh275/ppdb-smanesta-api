<div class="py-6 sm:py-8 lg:py-12" id="close-access-denied">
    <div class="px-4 mx-auto max-w-screen-2xl md:px-8">
        <div class="relative flex flex-col overflow-hidden bg-gray-200 rounded-lg sm:flex-row">
            <button type="button" class="absolute top-0 text-2xl close-popup-denied-btn right-2 text-zinc-400 hover:text-zinc-600">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <!-- image - start -->
            <div class="order-first w-full h-48 bg-gray-300 sm:w-1/2 lg:w-2/5 sm:h-auto sm:order-none">
                <img src="{{ asset('assets/img/access-denied.svg') }}" loading="lazy" alt="Photo by Andras Vas" class="object-center w-full h-full" />
            </div>
            <!-- image - end -->

            <!-- content - start -->
            <div class="flex flex-col w-full p-4 h-max sm:w-1/2 lg:w-3/5 sm:p-8">
                <h2 class="mb-4 text-xl font-bold text-gray-800 md:text-2xl lg:text-4xl">
                    {{ session('flashdata') }}
                </h2>

                <p class="max-w-md mb-1 text-gray-600">
                    Untuk melakukan pendaftaran silahkan hubungi panitia atau datang langsung ke sekolah kami.
                </p>
                <p class="max-w-md mb-1 text-gray-600">
                    Kalo temen-temen gak tau lokasi sekolah kami, bisa klik tombol dibawah ini.
                </p>
                <div class="flex flex-col max-w-md mb-6 text-gray-600">
                    <h4 class="font-semibold narahubung-title text-zinc-700">
                        Narahubung :
                    </h4>
                    <a href="https://wa.me/6285155288214?text=Permisi,%20saya%20[nama%20anda]%20dari%20[nama%20sekolah].%20Saya%20ingin%20mendaftar%20ke%20SMAN%201%20Rawamerta" class="text-zinc-700 hover:text-[#0099ff]"><i class="fa-brands fa-whatsapp"></i> Muhamad Ramdani Hidayatullah</a>
                    <a href="https://wa.me/6285710122557?text=Permisi,%20saya%20[nama%20anda]%20dari%20[nama%20sekolah].%20Saya%20ingin%20mendaftar%20ke%20SMAN%201%20Rawamerta" class="text-zinc-700 hover:text-[#0099ff]"><i class="fa-brands fa-whatsapp"></i> Wardiyanto, S.Pd.</a>
                    <a href="https://wa.me/6285716339816?text=Permisi,%20saya%20[nama%20anda]%20dari%20[nama%20sekolah].%20Saya%20ingin%20mendaftar%20ke%20SMAN%201%20Rawamerta" class="text-zinc-700 hover:text-[#0099ff]"><i class="fa-brands fa-whatsapp"></i> Yuliansyah Dinata, M.Pd.</a>
                </div>
                <div class="mt-auto">
                    <a href="https://goo.gl/maps/m9zFx47x3Ym1fvSy9" target="_blank" class="btn btn-primary">Lokasi</a>
                </div>
            </div>
            <!-- content - end -->
        </div>
    </div>
</div>

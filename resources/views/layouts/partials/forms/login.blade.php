<div class="bg-zinc-700 bg-opacity-50 py-6 h-screen flex justify-center items-center">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <form action="{{ url('login') }}" method="post" class="max-w-lg bg-white border rounded-lg mx-auto overflow-hidden">
            @csrf
            <div class="flex justify-center items-center bg-gray-100 p-4 relative">
                <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center">Login PPDB</h2>
                <button type="button" id="close-login-btn" class="close-login-form absolute text-2xl text-zinc-600 cursor-pointer font-bold top-0.5 right-2">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="flex flex-col gap-4 px-8 pt-4 pb-8">
                <div>
                    <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Username</label>
                    <input name="username" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-[#0099ff] rounded outline-none transition duration-100 px-3 py-2" />
                </div>

                <div>
                    <label for="password" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Password</label>
                    <input name="password" type="password" id="password" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-[#0099ff] rounded outline-none transition duration-100 px-3 py-2" />
                </div>

                <div>
                    <input type="checkbox" name="showPassword" id="showPassword">
                    <label for="showPassword">Show Password</label>
                </div>

                <button class="block btn btn-primary">Log in</button>
            </div>
        </form>
    </div>
</div>

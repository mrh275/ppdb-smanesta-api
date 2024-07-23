<div class="flex items-center justify-center h-screen py-6 bg-opacity-50 bg-zinc-700">
    <div class="px-4 mx-auto max-w-screen-2xl md:px-8">
        <form action="{{ url('login') }}" method="POST" id="login-form" class="max-w-lg mx-auto overflow-hidden bg-white border rounded-lg">
            @csrf
            <div class="relative flex items-center justify-center p-4 bg-gray-100">
                <h2 class="text-2xl font-bold text-center text-gray-800 lg:text-3xl">Login PPDB</h2>
                <button type="button" id="close-login-btn" class="close-login-form absolute text-2xl text-zinc-600 cursor-pointer font-bold top-0.5 right-2">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="flex flex-col gap-4 px-8 pt-4 pb-8">
                <div>
                    <label for="email" class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Username</label>
                    <input name="username" id="username" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-[#0099ff] rounded outline-none transition duration-100 px-3 py-2" />
                </div>

                <div>
                    <label for="password" class="inline-block mb-2 text-sm text-gray-800 sm:text-base">Password</label>
                    <input name="password" type="password" id="password" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-[#0099ff] rounded outline-none transition duration-100 px-3 py-2" />
                </div>

                <div>
                    <input type="checkbox" name="showPassword" id="showPassword">
                    <label for="showPassword">Show Password</label>
                </div>

                <button class="block btn btn-primary" type="button" onclick="loginAttempt()" id="login-btn-form">Log in</button>
            </div>
        </form>
    </div>
</div>

@push('login')
    <script>
        // Login attempt
        function loginAttempt() {
            const url = '{{ url('login') }}';
            const username = document.querySelector('input#username').value;
            const password = document.querySelector('input#password').value;
            const credentials = {
                username: username,
                password: password,
            };
            try {
                fetch('{{ url('login') }}', {
                        method: 'POST',
                        headers: {
                            'content-type': 'application/json; charset=UTF=8',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify(credentials)
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        Swal.fire({
                            title: 'Logging in...',
                            timer: 2000,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        }).then((dismiss) => {
                            document.querySelector("#login-form").classList.add("invisible");
                            document.querySelector("#login-form").classList.add("opacity-0");
                            window.location.href = '/admin';
                        })
                    })
                    .catch((error) => {
                        console.log(error)
                    })
            } catch (error) {}
        }
    </script>
@endpush

@extends('admin.layouts.auth.layout-login')

@section('content')
    <div class="flex items-center justify-center w-full h-screen bg-gray-200 login-wrapper">
        <div class="px-16 py-4 mx-auto bg-white rounded-lg shadow-sm card-login">
            <div class="flex flex-col items-center card-header">
                <img src="{{ asset('assets/img/LOGO-SMALL.png') }}" alt="Logo Sekolah" class="mb-2 w-14 card-img">
                <h3 class="text-3xl font-bold text-gray-700 card-title">Login Admin</h3>
                <h4 class="text-xl font-bold text-gray-700 card-subtitle">PPDB SEMESTA</h4>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" id="username" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required id="password" name="password">
                    <label for="">Password</label>
                </div>
                <div class="password-visibility-wrapper">
                    <input type="checkbox" id="password-visibility" name="password-visibility">
                    <label for="password-visibility">Tampilkan kata sandi</label>
                </div>
                <div class="flex justify-end my-4 login-btn-wrapper">
                    <button class="login-btn" type="button">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const passwordVisibility = document.querySelector("#password-visibility");
        passwordVisibility.addEventListener("click", function() {
            const password = document.querySelector("#password");
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        });

        // Auth attempt
        const loginBtn = document.querySelector(".login-btn");
        const username = document.querySelector("#username");
        const password = document.querySelector("#password");

        loginBtn.addEventListener("click", function() {
            const data = {
                username: username.value,
                password: password.value
            };

            fetch("{{ route('auth.login') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(response => {
                    if (response.status === 200) {
                        window.location.href = "{{ route('adminDashboard') }}";
                    } else {
                        alert(response.message);
                    }
                })
                .catch(error => console.log(error));
        });
    </script>
@endpush

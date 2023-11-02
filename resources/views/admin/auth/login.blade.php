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
                    <label for=username"" id="user-label">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required id="password" name="password">
                    <label for="password" id="password-label">Password</label>
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
        const userLabel = document.querySelector("#user-label");
        const passwordLabel = document.querySelector("#password-label");
        const wrongUsername = document.createElement('small')
        wrongUsername.style.color = "#ef4444"
        const wrongPassword = document.createElement('small')
        wrongPassword.style.color = "#ef4444"

        loginBtn.addEventListener("click", function() {
            const data = {
                username: username.value,
                password: password.value
            };

            console.log(data);

            loginBtn.innerHTML = `
        <i class="fas fa-circle-notch fa-spin"></i>
        Loading...
        `;

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
                        loginBtn.style.background = "#22c55e"
                        loginBtn.innerHTML = "Success";
                        window.location.href = "{{ route('adminDashboard') }}";
                    } else if (response.status === 401) {
                        loginBtn.style.background = "#ef4444"
                        loginBtn.innerHTML = "Login Gagal!";
                        username.style.border = "1.2px solid #ef4444"
                        wrongUsername.innerHTML = response.message
                        insertAfter(username, wrongUsername)
                        userLabel.style.color = "#ef4444"
                    } else {
                        loginBtn.style.background = "#ef4444"
                        loginBtn.innerHTML = "Login Gagal!";
                        wrongPassword.innerHTML = response.message
                        insertAfter(password, wrongPassword)
                        password.style.border = "1.2px solid #ef4444"
                        passwordLabel.style.color = "#ef4444"
                    }
                })
                .catch(error => {
                    console.log(error.status)
                });
        });

        function insertAfter(referenceNode, newNode) {
            referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
        }
    </script>
@endpush

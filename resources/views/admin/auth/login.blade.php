@extends('admin.layouts.auth.layout-login')

@section('content')
    <div class="flex items-center justify-center w-full h-screen login-wrapper">
        <div class="w-1/4 px-4 py-4 mx-auto bg-gray-200 rounded-lg shadow-sm card-login">
            <div class="flex flex-col items-center card-header">
                <img src="{{ asset('assets/img/LOGO-SMALL.png') }}" alt="Logo Sekolah" class="mb-2 w-14 card-img">
                <h3 class="text-3xl font-bold text-gray-700 card-title">Login Admin</h3>
                <h4 class="text-xl font-bold text-gray-700 card-subtitle">PPDB SEMESTA</h4>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
@endsection

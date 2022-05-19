@extends('layouts.template')

@section('content')
    <div class="wrapper relative pt-14 ">
        {{-- Hero Section --}}
        <div class="hero-section">
            <div class="hero-img">
                <img src="{{ asset('assets/img/hero-img.png') }}" alt="Hero Img">
            </div>
            <div class="hero-splash">
                <h1 class="hero-title">
                    Selamat Datang <br>
                    di Portal <span class="ppdb">Penerimaan Peserta Didik Baru (PPDB)</span> <br>
                    SMA Negeri 1 Rawamerta
                </h1>
            </div>
        </div>
        {{-- End Hero --}}

        {{-- CTA Section --}}
        <div class="cta-section">
            <div class="container mx-auto">
                <div class="cta-content">
                    <p class="cta-desc">
                        Portal ini dibuat untuk memudahkan calon peserta didik baru untuk melakukan pendaftaran pada SMA Negeri 1 Rawamerta.
                    </p>
                    <a href="{{ url('/daftar') }}" class="btn btn-primary cta-btn">
                        Daftar Sekarang!
                    </a>
                </div>
            </div>
            {{-- End CTA --}}
        </div>
    @endsection

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
        </div>
        {{-- End CTA --}}

        {{-- Persyaratan --}}
        <div class="terms-section">
            <h1 class="terms-title">
                Persyaratan Pendaftaran
            </h1>
            <p class="terms-desc">
                Sebelum melakukan pendaftaran, silahkan persiapkan berkas persyaratan sesuai dengan ketentuan yang ada dibawah ini.
            </p>
            <div class="terms-content">
                <div class="regular-terms">
                    <h3 class="regular-terms-title">
                        Syarat Umum
                    </h3>
                    <ul class="regular-terms-list">
                        <li>Ijazah/Surat Keterangan Lulus/Kartu Peserta Ujian Sekolah <br>
                            <strong>*(Untuk CPD yang lulus 2022 jika belum ada ijazah, bisa dilengkapi ketika Ijazah sudah terbit.)</strong>
                        </li>
                        <li>Kartu Keluarga</li>
                        <li>Akta Kelahiran</li>
                        <li>KTP Orang Tua</li>
                    </ul>
                </div>
                <div class="special-terms">
                    <h3 class="special-terms-title">
                        Syarat Khusus
                    </h3>
                </div>
            </div>
        </div>
        {{-- End Persyaratan --}}
    </div>
@endsection

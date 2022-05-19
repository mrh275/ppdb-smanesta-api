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
                        A. Syarat Umum
                    </h3>
                    <ul class="regular-terms-list">
                        <li>Ijazah/Surat Keterangan Lulus/Kartu Peserta Ujian Sekolah <br>
                            <strong>*(Untuk CPD yang lulus 2022 jika belum ada ijazah, bisa dilengkapi ketika Ijazah sudah terbit.)</strong>
                        </li>
                        <li>Kartu Keluarga</li>
                        <li>Akta Kelahiran/Surat Kenal Lahir</li>
                        <li>KTP Orang Tua</li>
                        <li>Rapor (Semester 1 s/d 5)</li>
                        <li>Surat Pertanggung Jawaban Mutlak (SPTJM) Orang Tua</li>
                    </ul>
                </div>
                <div class="special-terms">
                    <h3 class="special-terms-title">
                        B. Syarat Khusus
                    </h3>
                    <ul class="special-terms-list">
                        <li>Sertifikat Juara</li>
                        <li>Kartu Kesejahteraan (KIP/KIS/KPS/KKS/PKH)/Terdaftar di DTKS</li>
                        <li>Surat Keterangan Domisili</li>
                        <li>Surat Tugas Orang Tua</li>
                    </ul>

                    <span class="keterangan">
                        <span class="text-red-500">*</span> Persyaratan khusus disesuaikan dengan Jalur Pendaftaran yang dipilih. <br>
                        <span class="text-red-500">**</span> Untuk melihat persyaratan berdasarkan Jalur Pendaftaran, silahkan klik tombol dibawah ini.
                    </span>

                    <div class="terms-btn-wrapper">
                        <a href="{{ url('terms') }}" class="terms-btn btn btn-primary">Baca Persyaratan Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Persyaratan --}}

        {{-- Jalur Pendaftaran --}}
        <div class="jalur-section">
            <h1 class="jalur-title">
                Kuota dan Jalur Pendaftaran
            </h1>
            <div class="jalur-content">
                <div class="kuota-wrapper">
                    <h3 class="kuota-title">
                        A. Kuota Pendaftaran
                    </h3>
                    <ul class="kuota-list">
                        <li>Afirmasi (20%)</li>
                        <li>Perpindahan Orang Tua/Anak Guru (5%)</li>
                        <li>Prestasi (25%)</li>
                        <li>Zonasi (50%)</li>
                    </ul>
                    <p class="kuota-desc">
                        <span class="text-red-500">*</span> Informasi lebih lengkap tentang Kuota Pendaftaran, silahkan klik tombol dibawah ini.
                    </p>
                    <div class="kuota-btn-wrapper">
                        <a href="{{ url('kuota') }}" class="btn btn-primary btn-kuota">Kuota Pendaftaran</a>
                    </div>
                </div>
                <div class="jalur-wrapper">
                    <h3 class="jalur-list-title">
                        B. Jalur Pendaftaran
                    </h3>
                    <ul class="jalur-list">
                        <li>Jalur Afirmasi</li>
                        <li>Jalur Perpindahan Orang Tua/Anak Guru</li>
                        <li>Jalur Prestasi</li>
                        <li>Jalur Zonasi</li>
                    </ul>
                    <p class="jalur-desc">
                        <span class="text-red-500">*</span> Informasi lebih lengkap tentang Jalur Pendaftaran, silahkan klik tombol dibawah ini.
                    </p>
                    <div class="jalur-btn-wrapper">
                        <a href="{{ url('jalur') }}" class="btn btn-primary btn-jalur">Jalur Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Jalur --}}
    </div>
@endsection

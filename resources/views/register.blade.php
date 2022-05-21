@extends('layouts.template')

@section('content')
    <div class="wrapper relative pt-28">
        <div class="register-section">
            <h2 class="register-title">
                Pendaftaran PPDB
            </h2>
            {{-- Progress Bar --}}
            <div class="progress-bar">
                <section class="step-wizard">
                    <ul class="step-wizard-list">
                        <li class="step-wizard-item current-item" id="data-diri">
                            <span class="progress-count"><i class="fa-solid fa-user"></i></span>
                            <span class="progress-label">Data Diri</span>
                        </li>
                        <li class="step-wizard-item " id="data-orang-tua">
                            <span class="progress-count"><i class="fa-solid fa-users"></i></span>
                            <span class="progress-label">Data Orang Tua</span>
                        </li>
                        <li class="step-wizard-item" id="data-periodik">
                            <span class="progress-count"><i class="fa-solid fa-clipboard-user"></i></span>
                            <span class="progress-label">Data Periodik</span>
                        </li>
                        <li class="step-wizard-item " id="data-kesejahteraan">
                            <span class="progress-count"><i class="fa-solid fa-address-card"></i></span>
                            <span class="progress-label">Data Kesejahteraan</span>
                        </li>
                    </ul>
                </section>
            </div>
            {{-- End Progress Bar --}}
            <div class="form-section">
                @include('layouts.partials.forms.biodata')
                @include('layouts.partials.forms.orang-tua')
            </div>
        </div>
    </div>
@endsection

@push('topjs')
    <script>
        const url = window.location.pathname;
        if (url == '/register') {

            const body = document.getElementsByTagName("BODY")[0]
            body.style.display = 'none';
            if (window.innerWidth < 1024) {
                alert('Silahkan buka halaman ini dengan menggunakan laptop/pc');
            } else {
                body.style.display = 'block';
            }
        }
    </script>
@endpush

@push('scripts')
    <script>
        // Remove some menu when on register page
        if (window.location.pathname == '/register') {
            document.getElementById('menu-home').href = "{{ url('') }}"
            document.getElementById('menu-terms').remove();
            document.getElementById('menu-kuota').remove();
            document.getElementById('menu-faq').remove();
        }

        // Get all progress bar necessary element
        const btnBackDataDiri = document.querySelector('#btn-back-data-diri');
        const btnBackDataOrangTua = document.querySelector('#btn-back-data-orang-tua');
        const btnBackDataPeriodik = document.querySelector('#btn-back-data-periodik');
        const btnDataDiri = document.querySelector('#btn-data-diri');
        const btnDataOrangTua = document.querySelector('#btn-data-orang-tua');
        const btnDataPeriodik = document.querySelector('#btn-data-periodik');
        const dataDiri = document.querySelector('#data-diri');
        const dataOrangTua = document.querySelector('#data-orang-tua');
        const dataPeriodik = document.querySelector('#data-periodik');
        const dataKesejahteraan = document.querySelector('#data-kesejahteraan');

        // Back Button
        btnBackDataDiri.addEventListener('click', function() {
            dataDiri.classList.add('current-item');
            dataDiri.firstElementChild.classList.remove('completed');
            dataOrangTua.classList.remove('current-item');
        });
        btnBackDataOrangTua.addEventListener('click', function() {
            dataOrangTua.classList.add('current-item');
            dataOrangTua.firstElementChild.classList.remove('completed');
            dataPeriodik.classList.remove('current-item');
        });
        btnBackDataPeriodik.addEventListener('click', function() {
            dataPeriodik.classList.add('current-item');
            dataPeriodik.firstElementChild.classList.remove('completed');
            dataKesejahteraan.classList.remove('current-item');
        });
        // End Back Button

        // Next Button
        function dataDiriNext() {
            dataDiri.classList.remove('current-item');
            dataDiri.firstElementChild.classList.add('completed');
            dataOrangTua.classList.add('current-item');
            document.querySelector('.form-biodata-wrapper').classList.add('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.add('show')
        };
        btnDataOrangTua.addEventListener('click', function() {
            dataOrangTua.classList.remove('current-item');
            dataOrangTua.firstElementChild.classList.add('completed');
            dataPeriodik.classList.add('current-item');
        });
        btnDataPeriodik.addEventListener('click', function() {
            dataPeriodik.classList.remove('current-item');
            dataPeriodik.firstElementChild.classList.add('completed');
            dataKesejahteraan.classList.add('current-item');
        });
        // End Next Button
    </script>
@endpush

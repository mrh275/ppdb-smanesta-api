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
                            <span class="progress-count" onclick="jumpToDataPeriodik()"><i class="fa-solid fa-clipboard-user"></i></span>
                            <span class="progress-label">Data Periodik</span>
                        </li>
                        <li class="step-wizard-item " id="data-kesejahteraan">
                            <span class="progress-count" onclick="jumpToDataKesejahteraan()"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                            <span class="progress-label">Upload Dokumen</span>
                        </li>
                    </ul>
                </section>
            </div>
            {{-- End Progress Bar --}}
            <div class="form-section">
                <div class="form-wrapper-responsive">
                    @include('layouts.partials.forms.biodata')
                    @include('layouts.partials.forms.orang-tua')
                    @include('layouts.partials.forms.data-periodik')
                    @include('layouts.partials.forms.upload-dokumen')
                </div>
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
        function backToDataDiri() {
            dataDiri.classList.add('current-item');
            dataOrangTua.classList.remove('current-item');
            dataPeriodik.classList.remove('current-item');
            dataKesejahteraan.classList.remove('current-item');
            document.querySelector('.form-biodata-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('completed')
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.remove('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };

        function backToDataOrangTua() {
            dataDiri.classList.remove('current-item');
            dataOrangTua.classList.add('current-item');
            dataPeriodik.classList.remove('current-item');
            dataKesejahteraan.classList.remove('current-item');
            if (!document.querySelector('.form-biodata-wrapper').classList.contains('completed')) {
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                dataDiri.firstElementChild.classList.add('completed');
            }
            document.querySelector('.form-orang-tua-wrapper').classList.remove('completed')
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.add('show')
            document.querySelector('.form-biodata-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.remove('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.add('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };

        function backToDataPeriodik() {
            dataDiri.classList.remove('current-item');
            dataOrangTua.classList.remove('current-item');
            dataPeriodik.classList.add('current-item');
            dataKesejahteraan.classList.remove('current-item');
            if (!document.querySelector('.form-biodata-wrapper').classList.contains('completed')) {
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                dataDiri.firstElementChild.classList.add('completed');
            }
            if (!document.querySelector('.form-orang-tua-wrapper').classList.contains('completed')) {
                document.querySelector('.form-orang-tua-wrapper').classList.add('completed')
                dataOrangTua.firstElementChild.classList.add('completed');
            }
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-biodata-wrapper').classList.remove('show')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.add('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.add('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };
        // End Back Button

        // Next Button
        function dataDiriNext() {
            Swal.fire({
                title: 'Sedang menyimpan data...',
                timer: 2000,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            }).
            then((dismiss) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    showCloseButton: true,
                    timer: 3000,
                    timerProgressBar: true,
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Data diri tersimpan'
                })
                dataDiri.classList.remove('current-item');
                dataDiri.firstElementChild.classList.add('completed');
                dataOrangTua.classList.add('current-item');
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                document.querySelector('.form-orang-tua-wrapper').classList.add('show')
                document.querySelector('.form-wrapper-responsive').classList.add('orang-tua')
            })
        };

        function dataOrangTuaNext() {
            Swal.fire({
                title: 'Sedang menyimpan data...',
                timer: 2000,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            }).
            then((dismiss) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    showCloseButton: true,
                    timer: 3000,
                    timerProgressBar: true,
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Data orang tua tersimpan'
                })
                dataOrangTua.classList.remove('current-item');
                dataOrangTua.firstElementChild.classList.add('completed');
                dataPeriodik.classList.add('current-item');
                document.querySelector('.form-orang-tua-wrapper').classList.add('completed')
                document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
                document.querySelector('.form-periodik-wrapper').classList.add('show')
                document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
                document.querySelector('.form-wrapper-responsive').classList.add('periodik')
            })

        };

        function dataPeriodikNext() {
            Swal.fire({
                title: 'Sedang menyimpan data...',
                timer: 2000,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            }).
            then((dismiss) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    showCloseButton: true,
                    timer: 3000,
                    timerProgressBar: true,
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Data periodik tersimpan'
                })
                dataPeriodik.classList.remove('current-item');
                dataPeriodik.firstElementChild.classList.add('completed');
                dataKesejahteraan.classList.add('current-item');
                document.querySelector('.form-periodik-wrapper').classList.add('completed')
                document.querySelector('.form-periodik-wrapper').classList.remove('show')
                document.querySelector('.form-kesejahteraan-wrapper').classList.add('show')
                document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
                document.querySelector('.form-wrapper-responsive').classList.add('kesejahteraan')
                dataDiri.firstElementChild.setAttribute('onclick', 'jumpToDataDiri()')
                dataOrangTua.firstElementChild.setAttribute('onclick', 'jumpToDataOrangTua()')
                dataPeriodik.firstElementChild.setAttribute('onclick', 'jumpToDataPeriodik()')
                dataKesejahteraan.firstElementChild.setAttribute('onclick', 'jumpToDataKesejahteraan()')
                dataDiri.firstElementChild.classList.add('cursor-pointer')
                dataOrangTua.firstElementChild.classList.add('cursor-pointer')
                dataPeriodik.firstElementChild.classList.add('cursor-pointer')
                dataKesejahteraan.firstElementChild.classList.add('cursor-pointer')
            })

        };
        // End Next Button

        // Jump to Specified Form
        function jumpToDataDiri() {
            dataDiri.classList.add('current-item');
            dataOrangTua.classList.remove('current-item');
            dataPeriodik.classList.remove('current-item');
            dataKesejahteraan.classList.remove('current-item');
            document.querySelector('.form-biodata-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('completed')
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.remove('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };

        function jumpToDataOrangTua() {
            dataDiri.classList.remove('current-item');
            dataOrangTua.classList.add('current-item');
            dataPeriodik.classList.remove('current-item');
            dataKesejahteraan.classList.remove('current-item');
            if (!document.querySelector('.form-biodata-wrapper').classList.contains('completed')) {
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                dataDiri.firstElementChild.classList.add('completed');
            }
            document.querySelector('.form-orang-tua-wrapper').classList.remove('completed')
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-orang-tua-wrapper').classList.add('show')
            document.querySelector('.form-biodata-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.remove('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.add('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };

        function jumpToDataPeriodik() {
            dataDiri.classList.remove('current-item');
            dataOrangTua.classList.remove('current-item');
            dataPeriodik.classList.add('current-item');
            dataKesejahteraan.classList.remove('current-item');
            if (!document.querySelector('.form-biodata-wrapper').classList.contains('completed')) {
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                dataDiri.firstElementChild.classList.add('completed');
            }
            if (!document.querySelector('.form-orang-tua-wrapper').classList.contains('completed')) {
                document.querySelector('.form-orang-tua-wrapper').classList.add('completed')
                dataOrangTua.firstElementChild.classList.add('completed');
            }
            document.querySelector('.form-periodik-wrapper').classList.remove('completed')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-biodata-wrapper').classList.remove('show')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.add('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('show')
            document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.add('periodik')
            document.querySelector('.form-wrapper-responsive').classList.remove('kesejahteraan')
        };

        function jumpToDataKesejahteraan() {
            dataDiri.classList.remove('current-item');
            dataOrangTua.classList.remove('current-item');
            dataPeriodik.classList.remove('current-item');
            dataKesejahteraan.classList.add('current-item');
            if (!document.querySelector('.form-biodata-wrapper').classList.contains('completed')) {
                document.querySelector('.form-biodata-wrapper').classList.add('completed')
                dataDiri.firstElementChild.classList.add('completed');
            }
            if (!document.querySelector('.form-orang-tua-wrapper').classList.contains('completed')) {
                document.querySelector('.form-orang-tua-wrapper').classList.add('completed')
                dataOrangTua.firstElementChild.classList.add('completed');
            }
            if (!document.querySelector('.form-periodik-wrapper').classList.contains('completed')) {
                document.querySelector('.form-periodik-wrapper').classList.add('completed')
                dataPeriodik.firstElementChild.classList.add('completed');
            }
            document.querySelector('.form-kesejahteraan-wrapper').classList.remove('completed')
            document.querySelector('.form-biodata-wrapper').classList.remove('show')
            document.querySelector('.form-orang-tua-wrapper').classList.remove('show')
            document.querySelector('.form-periodik-wrapper').classList.remove('show')
            document.querySelector('.form-kesejahteraan-wrapper').classList.add('show')
            document.querySelector('.form-wrapper-responsive').classList.remove('orang-tua')
            document.querySelector('.form-wrapper-responsive').classList.remove('periodik')
            document.querySelector('.form-wrapper-responsive').classList.add('kesejahteraan')
        };
        // End Jump To Specified Form

        // Remove disabled attribute onchange select option
        const disabledAtt = document.querySelector('#nomor_kip').getAttribute('disabled');
        document.querySelector('#kip').addEventListener('change', function() {
            if (document.querySelector('#kip-1').selected) {
                document.querySelector('#nomor_kip').removeAttribute('disabled');
            } else {
                document.querySelector('#nomor_kip').setAttribute('disabled', 'disabled');
            }
        })
        document.querySelector('#kis').addEventListener('change', function() {
            if (document.querySelector('#kis-1').selected) {
                document.querySelector('#nomor_kis').removeAttribute('disabled');
            } else {
                document.querySelector('#nomor_kis').setAttribute('disabled', 'disabled');
            }
        })
        document.querySelector('#kks').addEventListener('change', function() {
            if (document.querySelector('#kks-1').selected) {
                document.querySelector('#nomor_kks').removeAttribute('disabled');
            } else {
                document.querySelector('#nomor_kks').setAttribute('disabled', 'disabled');
            }
        })
        document.querySelector('#kps').addEventListener('change', function() {
            if (document.querySelector('#kps-1').selected) {
                document.querySelector('#nomor_kps').removeAttribute('disabled');
            } else {
                document.querySelector('#nomor_kps').setAttribute('disabled', 'disabled');
            }
        })
        document.querySelector('#pkh').addEventListener('change', function() {
            if (document.querySelector('#pkh-1').selected) {
                document.querySelector('#nomor_pkh').removeAttribute('disabled');
            } else {
                document.querySelector('#nomor_pkh').setAttribute('disabled', 'disabled');
            }
        })

        $(document).ready(function() {
            $('.form-select').select2();
        });
    </script>
@endpush

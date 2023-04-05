<div class="transition-all duration-300 ease-in-out cetak-pendaftaran-wrapper">
    <h3 class="cetak-pendaftaran-title">
        Bukti Pendaftaran PPDB
    </h3>

    <button class="btn btn-primary" type="button" onclick="cetakBukti()">Cetak Bukti Pendaftaran</button>
    <a href="{{ url('') }}" class="btn btn-secondary">Tutup Halaman</a>
    <div class="card-bukti-pendaftaran my-4 px-[11rem] 2xl:px-[28rem]">
        <div class="w-full mx-auto bg-white rounded-lg card-body" id="cetak-bukti-pendaftaran">
            <div class="flex items-center justify-start px-8 pt-6 pb-4 cetak-header">
                <img src="{{ asset('assets/img/LOGO-SMALL.png') }}" alt="Logo Sekolah" class="w-20 h-20 cetak-logo">
                <div class="mx-4 cetak-brand">
                    <p class="leading-3 cetak-brand-title">
                        <span class="block text-xl font-semibold leading-6">
                            BUKTI PENDAFTARAN
                        </span>
                        <span class="block text-xl font-semibold leading-6">
                            PENERIMAAN PESERTA DIDIK BARU (PPDB)
                        </span>
                        <span class="block text-xl font-semibold leading-6">
                            SMA NEGERI 1 RAWAMERTA
                        </span>
                        <span class="block text-xl font-semibold leading-6">
                            TAHUN PELAJARAN 2022/2023
                        </span>
                    </p>
                </div>
            </div>
            <div class="px-8 pt-2 pb-6 cetak-body">
                <div class="w-full px-6 py-3 biodata-cpd bg-zinc-300">
                    <h3 class="text-lg font-semibold align-middle biodata-cpd-title text-zinc-700">
                        Biodata Calon Peserta Didik
                    </h3>
                </div>
                <div class="flex items-start justify-between px-6 pt-4 pb-8 text-sm register-wrapper text-zinc-700">
                    <div class="w-3/5 pr-2 left-register">
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>No. Pendaftaran</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="noreg_ppdb"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>NIK</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="nik"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>NISN</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="nisn"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Nama Lengkap</span>
                            </div>
                            <div class="register-separator">
                                <span>&nbsp;:&nbsp;</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span class="nama"></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Jenis Kelamin</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="jenis_kelamin"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>TTL</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="tempat_lahir"></span>, <span class="tanggal_lahir"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Asal Sekolah</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="asal_sekolah"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Alamat Lengkap</span>
                            </div>
                            <div class="register-separator">
                                <span>&nbsp;:&nbsp;</span>
                            </div>
                            <div class="w-3/5 whitespace-normal register-value">
                                <span class="alamat"></span> Dusun <span class="dusun"></span> RT.<span class="rt"></span> RW.<span class="rw"></span> Ds. <span class="desa"></span> Kec. <span class="kecamatan"></span> <span class="kabupaten"></span>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/5 pl-2 right-register">
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Jalur Pendaftaran</span>
                            </div>
                            <div class="register-separator">
                                <span>&nbsp;:&nbsp;</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span class="jalur_pendaftaran"></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Advisor</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="user"></span></span>
                            </div>
                        </div>
                        <div class="flex items-start justify-start w-full register-item">
                            <div class="w-2/5 register-key">
                                <span>Tanggal Pendaftaran</span>
                            </div>
                            <div class="w-3/5 register-value">
                                <span>: <span class="register_date"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-10 py-3 peryaratan-cpd bg-zinc-300">
                    <h3 class="text-lg font-semibold align-middle peryaratan-cpd-title text-zinc-700">
                        Persyaratan Calon Peserta Didik
                    </h3>
                </div>
                <div class="flex items-start justify-between px-6 pt-4 pb-8 text-sm peryaratan-cpd-wrapper text-zinc-700 ">
                    <div class="w-1/2 pr-4 left-terms-cpd">
                        <h4 class="mb-4 text-lg font-semibold reguler-terms-cpd-title">
                            Persyaratan Umum
                        </h4>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>Foto</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>Kartu Keluarga</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>KTP Orang Tua</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>Akta Kelahiran</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>Ijazah/Surat Kelulusan</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/5 terms-cpd-key">
                                <span>SKKB</span>
                            </div>
                            <div class="w-2/5 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 pl-4 right-terms-cpd">
                        <h4 class="mb-4 text-lg font-semibold specified-terms-cpd-title">
                            Persyaratan Khusus
                        </h4>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Sertifikat Juara</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Rapor</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Kartu Indonesia Pintar</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Kartu Indonesia Sehat</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Kartu Keluarga Sejahtera</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Kartu Perlindungan Sosial</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Program Keluarga Harapan</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-start w-full terms-cpd-item">
                            <div class="w-3/4 terms-cpd-key">
                                <span>Surat Tugas Orang Tua</span>
                            </div>
                            <div class="w-1/4 terms-cpd-value">
                                <span>: Ada</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-2 mb-4 separator bg-zinc-300">

                </div>
                <div class="signature">
                    <div class="flex items-start justify-start barcode-wrapper">
                        <img src="{{ asset('assets/img/ttd.png') }}" class="w-[8rem] h-[8rem]" alt="TTD">
                        <ul class="px-8 text-base font-semibold list-disc barcode-list">
                            <li class="barcode-list-item">
                                Tanggal Cetak <span class="print_date"></span> WIB
                            </li>
                            <li class="barcode-list-item">
                                Untuk mendapatkan informasi lebih lanjut, silahkan hubungi kami di instagram <a href="https://instagram.com/sman1rawamerta" class="text-[#0077ff]">@sman1rawamerta</a>
                            </li>
                            <li class="barcode-list-item">
                                Atau kunjungi website resmi PPDB SMAN 1 RAWAMERTA 2022 <a href="https://ppdb.sman1rawamerta.sch.id" class="text-[#0077ff]">https://ppdb.sman1rawamerta.sch.id</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sign-additional">
                        <p class="py-4 text-base font-semibold text-red-400 sign-additional-desc">
                            * Dilarang menyebarkan bukti pendaftaran serta QRCode ini kepada pihak lain selain pendaftar dan sekolah tujuan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('specifyjs')
    <script>
        // Fetch register data
        const noregPPDB = "PPDB-2324-75247";
        $.ajax({
            type: "get",
            url: "{{ url('/cetak-pendaftaran/') }}/" + noregPPDB,
            dataType: "json",
            success: function(response) {
                // document.querySelector(".noreg_ppdb").innerHTML = response.biodata.noreg_ppdb
                // let jalur = [
                //     'KETM', 'Disabilitas', 'Kondisi Tertentu', 'Prestasi Rapor', 'Prestasi Kejuaraan', 'Perpindahan Orang Tua/Anak Guru', 'Zonasi'
                // ];
                // document.querySelector(".jalur_pendaftaran").innerHTML = jalur[response.biodata.jalur_pendaftaran - 1];
                // document.querySelector(".nik").innerHTML = response.biodata.nik
                // document.querySelector(".nisn").innerHTML = response.biodata.nisn
                // document.querySelector(".nama").innerHTML = response.biodata.nama
                // if (response.biodata.jenis_kelamin == "L") {
                //     document.querySelector(".jenis_kelamin").innerHTML = "Laki-laki"
                // } else {
                //     document.querySelector(".jenis_kelamin").innerHTML = "Perempuan"
                // }
                // document.querySelector(".tempat_lahir").innerHTML = response.biodata.tempat_lahir

                // let month = [
                //     'Januari',
                //     'Februari',
                //     'Maret',
                //     'April',
                //     'Mei',
                //     'Juni',
                //     'Juli',
                //     'Agustus',
                //     'September',
                //     'Oktober',
                //     'November',
                //     'Desember'
                // ];
                // let dateBirth = response.biodata.tanggal_lahir;
                // // yyyy-mm-dd
                // let dayBirth = dateBirth.substr(8, 2);
                // let monthBirth = month[parseInt(dateBirth.substr(5, 2)) - 1];
                // let yearBirth = dateBirth.substr(0, 4);
                // let newBirth = dayBirth + ' ' + monthBirth + ' ' + yearBirth;
                // document.querySelector(".tanggal_lahir").innerHTML = newBirth
                // document.querySelector(".asal_sekolah").innerHTML = response.biodata.asal_sekolah
                // document.querySelector(".alamat").innerHTML = response.biodata.alamat
                // document.querySelector(".dusun").innerHTML = response.biodata.dusun
                // document.querySelector(".rt").innerHTML = response.biodata.rt
                // document.querySelector(".rw").innerHTML = response.biodata.rw
                // document.querySelector(".desa").innerHTML = response.biodata.desa
                // document.querySelector(".kecamatan").innerHTML = response.biodata.kecamatan
                // document.querySelector(".kabupaten").innerHTML = response.biodata.kabupaten

                // document.querySelector(".user").innerHTML = "{{ Auth::user()->name }}"

                // const dateRegister = response.biodata.created_at;
                // console.log(dateRegister);
                // let dayRegister = dateRegister.substr(8, 2);
                // let monthRegister = month[parseInt(dateRegister.substr(5, 2)) - 1];
                // let yearRegister = dateRegister.substr(0, 4);
                // let newRegisterDate = dayRegister + ' ' + monthRegister + ' ' + yearRegister;
                // const timeRegister = dateRegister.substr(11, 5);
                // document.querySelector(".register_date").innerHTML = newRegisterDate + ', ' + timeRegister

                // let today = new Date();
                // let date = today.getDate() + ' ' + month[today.getMonth()] + ' ' + today.getFullYear();
                // let time = today.getHours() + ":" + ((today.getMinutes().toString().length == 1) ? "0" + today.getMinutes().toString() : today.getMinutes());
                // document.querySelector(".print_date").innerHTML = date + ', ' + time
                console.log(response)
            },
            error: function(error) {
                // Swal.fire({
                //     icon: 'error',
                //     title: error.status + '<br/>Data tidak ditemukan',
                //     text: "Silahkan hubungi admin!",
                //     showCancelButton: true,
                //     cancelButtonText: 'Tutup',
                //     showConfirmButton: false
                // }).then((dismiss) => {
                //     window.location.href = "{{ url('/') }}";
                // })
                // console.log(error)
            }
        });

        function cetakBukti() {
            let element = document.getElementById('cetak-bukti-pendaftaran');
            document.documentElement.scrollTop = 0;
            Swal.fire({
                title: 'Cetak Bukti Pendaftaran',
                text: 'Apakah anda yakin ingin mencetak bukti pendaftaran ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, cetak!'
            }).then((result) => {
                if (result.value) {
                    let option = {
                        margin: [0, 0, 0, 0],
                        filename: 'bukti-pendaftaran-ppdb-2-2223001.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 1
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'A4',
                            orientation: 'portrait'
                        }
                    };

                    html2pdf().set(option).from(element).save();
                }
            })
        }
    </script>
@endpush

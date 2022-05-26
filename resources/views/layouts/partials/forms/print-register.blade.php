<div class="cetak-pendaftaran-wrapper transition-all ease-in-out duration-300">
    <h3 class="cetak-pendaftaran-title">
        Bukti Pendaftaran PPDB
    </h3>

    <button class="btn btn-primary" type="button" onclick="cetakBukti()">Cetak Bukti Pendaftaran</button>
    <a href="{{ url('') }}" class="btn btn-secondary">Tutup Halaman</a>
    <div class="card-bukti-pendaftaran my-4 px-[28rem]">
        <div class="card-body bg-white w-full mx-auto rounded-lg" id="cetak-bukti-pendaftaran">
            <div class="cetak-header flex justify-start items-center pt-6 pb-4 px-8">
                <img src="{{ asset('assets/img/LOGO-SMALL.png') }}" alt="Logo Sekolah" class="cetak-logo w-20 h-20">
                <div class="cetak-brand mx-4">
                    <p class="cetak-brand-title leading-3">
                        <span class="text-xl block leading-6 font-semibold">
                            BUKTI PENDAFTARAN
                        </span>
                        <span class="text-xl block leading-6 font-semibold">
                            PENERIMAAN PESERTA DIDIK BARU (PPDB)
                        </span>
                        <span class="text-xl block leading-6 font-semibold">
                            SMA NEGERI 1 RAWAMERTA
                        </span>
                        <span class="text-xl block leading-6 font-semibold">
                            TAHUN PELAJARAN 2022/2023
                        </span>
                    </p>
                </div>
            </div>
            <div class="cetak-body pt-2 pb-6 px-8">
                <div class="biodata-cpd w-full px-6 py-3 bg-zinc-300">
                    <h3 class="biodata-cpd-title font-semibold text-lg text-zinc-700 align-middle">
                        Biodata Calon Peserta Didik
                    </h3>
                </div>
                <div class="register-wrapper flex justify-between text-sm items-start px-6 pt-4 pb-8 text-zinc-700">
                    <div class="left-register w-1/2 pr-4">
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>No. Pendaftaran</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: PPDB-2-2223001</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>NIK</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: 3215142905020001</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>NISN</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: 0028688308</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Nama Lengkap</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: KEUKEU MEILANI DWI YANTI</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Jenis Kelamin</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: Perempuan</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>TTL</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: KARAWANG, 29 Mei 2002</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Asal Sekolah</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: SMPN 1 JATISARI</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Alamat Lengkap</span>
                            </div>
                            <div class="register-separator">
                                <span>&nbsp;:&nbsp;</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>DUSUN KRAJAN RT. 03 RW. 01 DESA CIREJAG KEC. JATISARI KARAWANG</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-register w-1/2 pl-4">
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Jalur Pendaftaran</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: PRESTASI RAPOR</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Advisor</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: VERIFIKATOR</span>
                            </div>
                        </div>
                        <div class="register-item w-full flex justify-start items-start">
                            <div class="register-key w-2/5">
                                <span>Tanggal Pendaftaran</span>
                            </div>
                            <div class="register-value w-3/5">
                                <span>: 06 Juni 2022, 09:24</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="peryaratan-cpd w-full px-10 py-3 bg-zinc-300">
                    <h3 class="peryaratan-cpd-title font-semibold text-lg text-zinc-700 align-middle">
                        Persyaratan Calon Peserta Didik
                    </h3>
                </div>
                <div class="peryaratan-cpd-wrapper text-sm flex justify-between items-start px-6 pt-4 pb-8 text-zinc-700 ">
                    <div class="left-terms-cpd w-1/2 pr-4">
                        <h4 class="reguler-terms-cpd-title mb-4 font-semibold text-lg">
                            Persyaratan Umum
                        </h4>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>Foto</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>Kartu Keluarga</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>KTP Orang Tua</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>Akta Kelahiran</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>Ijazah/Surat Kelulusan</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/5">
                                <span>SKKB</span>
                            </div>
                            <div class="terms-cpd-value w-2/5">
                                <span>: Ada</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-terms-cpd w-1/2 pl-4">
                        <h4 class="specified-terms-cpd-title mb-4 font-semibold text-lg">
                            Persyaratan Khusus
                        </h4>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Sertifikat Juara</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Rapor</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Kartu Indonesia Pintar</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Kartu Indonesia Sehat</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Kartu Keluarga Sejahtera</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Kartu Perlindungan Sosial</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Program Keluarga Harapan</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                        <div class="terms-cpd-item w-full flex justify-start items-center">
                            <div class="terms-cpd-key w-3/4">
                                <span>Surat Tugas Orang Tua</span>
                            </div>
                            <div class="terms-cpd-value w-1/4">
                                <span>: Ada</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator w-full h-2 bg-zinc-300 mb-4">

                </div>
                <div class="signature">
                    <div class="barcode-wrapper flex justify-start items-start">
                        <img src="{{ asset('assets/img/ttd.png') }}" class="w-[8rem] h-[8rem]" alt="TTD">
                        <ul class="barcode-list list-disc px-8 font-semibold text-base">
                            <li class="barcode-list-item">
                                Tanggal Cetak 15 Juni 2022, 13:34 WIB
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
                        <p class="sign-additional-desc text-red-400 font-semibold py-4 text-base">
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
        function cetakBukti() {
            let element = document.getElementById('cetak-bukti-pendaftaran');
            document.documentElement.scrollTop = 0;
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
    </script>
@endpush

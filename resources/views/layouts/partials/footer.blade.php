<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-top">
            <div class="footer-left">
                <div class="footer-brand">
                    <img src="{{ asset('assets/img/LOGO-SMALL.png') }}" alt="Logo PPDB SMA Negeri 1 Rawamerta" class="footer-img-brand">
                    <span class="footer-brand-text">SMA Negeri 1 Rawamerta</span>
                </div>
                <div class="footer-text">
                    <p class="py-2">
                        <strong>Address</strong> <br>
                        Jl. Raya Garunggung - Panyingkiran Kec. Rawamerta Kab. Karawang, Jawa Barat 41382
                    </p>
                    <p>
                        <i class="fa-solid fa-phone"></i> -
                    </p>
                    <p>
                        <i class="fa-solid fa-globe"></i> <a href="https://sman1rawamerta.sch.id" target="_blank">https://sman1rawamerta.sch.id</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/sman1rawamerta/" target="_blank">@sman1rawamerta</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-youtube"></i> <a href="https://www.youtube.com/channel/UCvTaB-4bPPasVnUf7QYI3tg" target="_blank">SMAN 1 RAWAMERTA</a>
                    </p>
                </div>
            </div>
            <hr class="border-b border-b-zinc-300 w-full lg:hidden">
            <div class="footer-middle">
                <h3 class="footer-related-link">Link Terkait</h3>
                <div class="backlink">
                    <ul class="backlink-list">
                        <li class="backlink-item">
                            <a href="https://sman1rawamerta.sch.id" class="backlink-link">Website Sekolah</a>
                        </li>
                        <li class="backlink-item">
                            <a href="https://vervalponsel.sman1rawamerta.sch.id" class="backlink-link">Verval Ponsel</a>
                        </li>
                        <li class="backlink-item">
                            <a href="https://ujian.sman1rawamerta.sch.id" class="backlink-link">Ujian Online</a>
                        </li>
                        <li class="backlink-item">
                            <a href="https://alumni.sman1rawamerta.sch.id" class="backlink-link">Jejak Lulusan</a>
                        </li>
                        <li class="backlink-item">
                            <a href="https://kelulusan.sman1rawamerta.sch.id" class="backlink-link">Kelulusan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-right">

            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                Copyright ©️ <span class="year"></span> SMA Negeri 1 Rawamerta. All Right Reserved.
            </div>
            <div class="footer-bottom-right">
                Made with ❤️ by <a href="https://muhamadramdani.my.id" class="creator">dNezast</a>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
    <script>
        const year = new Date().getFullYear();
        document.querySelector('.year').innerHTML = year
    </script>
@endpush

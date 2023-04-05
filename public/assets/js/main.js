const dataRegister = (localStorage.dataRegister) ? JSON.parse(localStorage.dataRegister) : {};
window.addEventListener("load", function () {
    // Check register last session
    if (dataRegister.dataPeriodik == true) {
        jumpToUploadFiles();
    } else if (dataRegister.dataOrangTua == true) {
        jumpToDataPeriodik()
        getCurrentBiodataSession();
        getCurrentDataOrangTua();
    } else if (dataRegister.biodata == true) {
        jumpToDataOrangTua();
        getCurrentBiodataSession();
    }
})

// Navbar Animation on Scroll
let navbar = document.querySelector(".navbar");
let offset = 0;
window.addEventListener("scroll", function () {
    let st = window.pageYOffset;
    if (st > offset) {
        navbar.classList.add("fixed-nav");
    } else {
        navbar.classList.remove("fixed-nav");
    }
});

// Progress Bar fixed on scroll
let progressBar = document.querySelector(".progress-bar");
let offsetProgressBar = 91;
if (window.location.pathname == "/register") {
    window.addEventListener("scroll", function () {
        let st = window.pageYOffset;
        if (st > offsetProgressBar) {
            progressBar.classList.add("fixed-nav");
        } else {
            progressBar.classList.remove("fixed-nav");
        }
    });
}
// Toggle Menu
let hMenu = document.querySelector(".toggle-menu");
hMenu.addEventListener("click", function () {
    if (!hMenu.classList.contains("show")) {
        this.classList.add("show");
        document.querySelector(".nav-menu").classList.add("show");
        document.querySelector(".navbar").classList.add("show");
    } else {
        this.classList.remove("show");
        document.querySelector(".nav-menu").classList.remove("show");
        document.querySelector(".navbar").classList.remove("show");
    }
});

// Toggle dark mode
const toggleSwitch = document.querySelector("#toggle-darkMode");
toggleSwitch.addEventListener("click", () => {
    document.body.classList.toggle("dark");
});

// Toggle dropdown
const menuPortalDropdown = document.querySelector(".dropdown-portal");
menuPortalDropdown.addEventListener("click", () => {
    document
        .querySelector(".menu-dropdown-portal")
        .classList.toggle("invisible");
    document
        .querySelector(".menu-dropdown-portal")
        .classList.toggle("opacity-0");
});

// Fasilitas Carousel
if (window.innerWidth < 768) {
    // Carousel
    document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide(".splide", {
            type: "loop",
            perPage: 2,
            perMove: 2,
            arrows: false,
            classes: {
                pagination: "splide__pagination fasilitas-pagination",
                page: "splide__pagination__page fasilitas-page",
            },
        });
        splide.mount();
    });
} else {
    // Carousel
    document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide(".splide", {
            type: "loop",
            perPage: 3,
            perMove: 3,
            arrows: false,
            classes: {
                pagination: "splide__pagination fasilitas-pagination",
                page: "splide__pagination__page fasilitas-page",
            },
        });
        splide.mount();
    });
}
// Show Login Form
const lastMenu = document.querySelector(".nav-menu").lastElementChild;

if (lastMenu.querySelector("a").innerHTML != "Logout") {
    document
        .querySelector("#login-btn")
        .addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector("#login-form").classList.remove("invisible");
            document.querySelector("#login-form").classList.remove("opacity-0");
        });
}

// Close Login Form
document
    .querySelector("#close-login-btn")
    .addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelector("#login-form").classList.add("invisible");
        document.querySelector("#login-form").classList.add("opacity-0");
    });

// Show Password
document
    .querySelector("#showPassword")
    .addEventListener("change", function (e) {
        if (this.checked) {
            document.querySelector("#password").type = "text";
        } else {
            document.querySelector("#password").type = "password";
        }
    });

function getCurrentBiodataSession() {
    const data = {
        'noreg_ppdb': dataRegister.noregPPDB
    };
    const formOrangTua = document.querySelector('#form-data-orang-tua input[name="noreg_ppdb"]');
    const formPeriodik = document.querySelector('#form-data-periodik input[name="noreg_ppdb"]');
    const formUpload = document.querySelector('#form-data-periodik input[name="noreg_ppdb"]');
    formOrangTua.setAttribute('value', dataRegister.noregPPDB);
    formPeriodik.setAttribute('value', dataRegister.noregPPDB);
    formUpload.setAttribute('value', dataRegister.noregPPDB);
    fetch('/biodata/edit', {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then((response) => response.json())
        .then((data) => {
            const item = data.data[0];
            const tanggalLahir = item.tanggal_lahir.substr(8, 2) + '/' + item.tanggal_lahir.substr(5, 2) + '/' + item.tanggal_lahir.substr(0, 4);
            document.querySelector('#nisn').value = item.nisn
            document.querySelector('#nik').value = item.nik
            document.querySelector('#nama').value = item.nama
            $("#jenis_kelamin").select2('val', item.jenis_kelamin)
            document.querySelector('#tempat_lahir').value = item.tempat_lahir
            document.querySelector('#tanggal_lahir').value = tanggalLahir
            document.querySelector('#asal_sekolah').value = item.asal_sekolah
            $("#tahun_lulus").select2('val', item.tahun_lulus)
            $("#kelas").select2('val', item.kelas)
            $("#jalur_pendaftaran").select2('val', item.jalur_pendaftaran)
            document.querySelector('#alamat').value = item.alamat
            document.querySelector('#dusun').value = item.dusun
            document.querySelector('#rt').value = item.rt
            document.querySelector('#rw').value = item.rw
            document.querySelector('#desa').value = item.desa
            document.querySelector('#kecamatan').value = item.kecamatan
            document.querySelector('#kabupaten').value = item.kabupaten
            document.querySelector('#provinsi').value = item.provinsi
            document.querySelector('#kode_pos').value = item.kode_pos
        })
}

function getCurrentDataOrangTua() {
    const data = {
        'noreg_ppdb': dataRegister.noregPPDB
    };
    fetch('/data-orang-tua/edit', {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then((response) => response.json())
        .then((data) => {
            const item = data.data[0];
            console.log(data.data[0])
            const tanggalLahirAyah = item.tanggal_lahir_ayah.substr(8, 2) + '/' + item.tanggal_lahir_ayah.substr(5, 2) + '/' + item.tanggal_lahir_ayah.substr(0, 4);
            document.querySelector('#nama_ayah').value = item.nama_ayah
            document.querySelector('#tempat_lahir_ayah').value = item.tempat_lahir_ayah
            document.querySelector('#tanggal_lahir_ayah').value = tanggalLahirAyah
            $("#input-pendidikan-ayah").select2('val', item.pendidikan_ayah)
            $("#input-pekerjaan-ayah").select2('val', item.pekerjaan_ayah)
            $("#input-penghasilan-ayah").select2('val', item.penghasilan_ayah)
            document.querySelector('#input-alamat-ayah').value = item.alamat_ayah
            document.querySelector('#nama_ibu').value = item.nama_ibu
            document.querySelector('#tempat_lahir_ibu').value = item.tempat_lahir_ibu
            document.querySelector('#tanggal_lahir_ibu').value = item.tanggal_lahir_ibu
            $("#input-pendidikan-ibu").select2('val', item.pendidikan_ibu)
            $("#input-pekerjaan-ibu").select2('val', item.pekerjaan_ibu)
            $("#input-penghasilan-ibu").select2('val', item.penghasilan_ibu)
            document.querySelector('#input-alamat-ibu').value = item.alamat_ibu
        })
}

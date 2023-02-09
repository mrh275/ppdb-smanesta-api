<div class="form-kesejahteraan-wrapper">
    <h3 class="form-title form-biodata-title">
        Upload Dokumen
    </h3>

    <div class="mb-6 form-wrapper form-biodata">
        <div class="w-full">
            {{-- <form method="post" class="flex flex-wrap items-center justify-between flox-col" id="img-upload" enctype="multipart/form-data"> --}}

            <div class="flex items-start w-full mb-6 left-upload justify-evenly">
                <div class="upload-group">
                    <label for="ijazah-upload" class="inline-block mb-1 text-lg font-semibold">Ijazah/Surat Kelulusan</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="ijazah-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="ijazah-upload" class="inline-block mb-1 text-lg font-semibold">Kartu Keluarga</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="kk-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="ijazah-upload" class="inline-block mb-1 text-lg font-semibold">Akte Kelahiran</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="akte-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="ijazah-upload" class="inline-block mb-1 text-lg font-semibold">KTP Orang Tua</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="ktp-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex items-start w-full right-upload justify-evenly">
                <div class="upload-group">
                    <label for="kip-upload" class="inline-block mb-1 text-lg font-semibold">Kartu Indonesia Pintar</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="kip-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="kis-upload" class="inline-block mb-1 text-lg font-semibold">Kartu Indonesia Sehat</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="kis-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="kks-upload" class="inline-block mb-1 text-lg font-semibold">KKS/KPS</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="kks-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
                <div class="upload-group">
                    <label for="pkh-upload" class="inline-block mb-1 text-lg font-semibold">Kartu PKH</label>
                    <form method="post" enctype="multipart/form-data" class="dropzone w-[13rem] h-[15rem] flex items-center justify-center rounded-lg border-[#0099ff]" id="pkh-upload">
                        @csrf
                        <div class="dz-message">
                            <div class="mb-4">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up text-[2rem] text-[#0099ff]"></i>
                                </div>
                                <span class="block text-sm text-zinc-700">Klik untuk memilih file</span>
                                <span class="block my-1 text-xs text-zinc-600">atau</span>
                                <span class="block text-sm text-zinc-700">Drag and Drop file</span>
                            </div>
                            <span class="btn-sm btn-primary">Browse files</span>
                        </div>
                    </form>
                </div>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    <div class="form-btn">
        <button type="button" class="btn btn-secondary" onclick="backToDataPeriodik()">Kembali</button>
        <button class="btn btn-primary" type="button" id="btn-upload-files" onclick="nextUpload()">
            Simpan
        </button>
    </div>
</div>

<!-- Dropzone -->
<div id="dropzoneItemTemplate" style="display: none;">
    <div class="dz-preview dz-file-preview">
        <div class="dz-image"><img data-dz-thumbnail=""></div>
        <div class="dz-details">
            <div class="dz-size"><span data-dz-size=""><strong>3.7</strong> MB</span></div>
            <div class="dz-filename"><span data-dz-name="">PPDB SMANR1.png</span></div>
        </div>
        <div class="dz-progress progress" style="height: 4px;">
            <div class="dz-upload progress-bar bg-success" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
        </div>
        <div class="d-flex align-items-center">
            <div class="dz-success-mark">
                <span class="fa fa-check-circle"></span>
            </div>
            <div class="dz-error-mark">
                <span class="fa fa-times-circle"></span>
            </div>
            <div class="dz-error-message">
                <small data-dz-errormessage></small>
            </div>
        </div>
    </div>
</div>

<!-- End Dropzone -->


@push('specifyjs')
    <script>
        Dropzone.autoDiscover = false;
        // Upload ijazah
        const ijazahUpload = new Dropzone('#ijazah-upload', {
            url: "{{ url('upload-files/ijazah') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'ijazahFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload ijazah

        // Upload kk
        const kkUpload = new Dropzone('#kk-upload', {
            url: "{{ url('upload-files/kk') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'kkFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload kk

        // Upload akte
        const akteUpload = new Dropzone('#akte-upload', {
            url: "{{ url('upload-files/akte') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'akteFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload akte

        // Upload ktp
        const ktpUpload = new Dropzone('#ktp-upload', {
            url: "{{ url('upload-files/ktp') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'ktpFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload ktp

        // Upload kip
        const kipUpload = new Dropzone('#kip-upload', {
            url: "{{ url('upload-files/kip') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'kipFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload kip

        // Upload kis
        const kisUpload = new Dropzone('#kis-upload', {
            url: "{{ url('upload-files/kis') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'kisFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload kis

        // Upload kks/kps
        const kksUpload = new Dropzone('#kks-upload', {
            url: "{{ url('upload-files/kks') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'kksFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload kks/kps

        // Upload pkh
        const pkhUpload = new Dropzone('#pkh-upload', {
            url: "{{ url('upload-files/pkh') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            paramName: 'pkhFile',
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
        // End Upload pkh
    </script>
@endpush

<div class="form-kesejahteraan-wrapper">
    <h3 class="form-title form-biodata-title">
        Upload Dokumen
    </h3>

    <div class="form-wrapper form-biodata">
        <div class="w-full">
            <form method="post" class="dropzone h-[22rem] flex items-center justify-center flex-wrap" id="img-upload" enctype="multipart/form-data">
                @csrf
                <div class="dz-message">
                    <div class="mb-4">
                        <div class="text-center">
                            <i class="fa-solid fa-cloud-arrow-up text-[4rem] text-[#0099ff]"></i>
                        </div>
                        <span class="block text-xl text-zinc-700">Klik untuk memilih file</span>
                        <span class="block my-1 text-zinc-600">atau</span>
                        <span class="block text-xl text-zinc-700">Drag and Drop file</span>
                    </div>
                    <span class="btn btn-sm btn-primary">Browse files</span>
                </div>
            </form>
        </div>
    </div>
    <div class="form-btn">
        <button type="button" class="btn btn-secondary" onclick="backToDataPeriodik()">Kembali</button>
        <button class="btn btn-primary" type="button" id="btn-data-diri" onclick="nextUpload()">
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
        const dropzone = new Dropzone('form#img-upload', {
            url: "{{ url('register/upload') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            thumbnailWidth: 180,
            thumbnailHeight: 180,
            addRemoveLinks: true,
            "dictRemoveFile": '<span class="tooltiptext ">Hapus</span>',
            dictCancelUpload: "",
            previewTemplate: document.querySelector("div#dropzoneItemTemplate").innerHTML,
            dictFileTooBig: "Ukuran file terlalu besar! Maksimal 1024KB",
            dictInvalidFileType: "Tipe file tidak sesuai. Hanya file .jpg, .jpeg, .png yang diperbolehkan",
        })
    </script>
@endpush

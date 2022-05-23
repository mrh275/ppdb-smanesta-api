<div class="form-kesejahteraan-wrapper">
    <h3 class="form-title form-biodata-title">
        Upload Dokumen
    </h3>

    <div class="form-wrapper form-biodata">
        <div class="w-full">
            <form method="post" class="dropzone" id="img-upload" enctype="multipart/form-data">
                @csrf
            </form>
        </div>
    </div>
    <div class="form-btn">
        <button type="button" class="btn btn-secondary" onclick="backToDataPeriodik()">Kembali</button>
        <button class="btn btn-primary" type="button" id="btn-data-diri" onclick="simpanData()">
            Simpan
        </button>
    </div>
</div>

<div class="template-dropzone hidden">
    <div class="dz-preview dz-file-preview">

    </div>
</div>


@push('specifyjs')
    <script>
        const dropzone = new Dropzone('form#img-upload', {
            url: "{{ url('register/upload') }}",
            acceptedFiles: '.jpg, .jpeg, .png',
            maxFilesize: 1,
            addRemoveLinks: false,
        })
    </script>
@endpush

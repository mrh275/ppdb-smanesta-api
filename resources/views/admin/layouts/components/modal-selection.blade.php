<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $statusTitle }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row mb-2">
                        <div class="col-md-4">Nomor Pendaftaran</div>
                        <div class="col-md-8">: <span class="noreg_ppdb"></span></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">Nama Pendaftar</div>
                        <div class="col-md-8">: <span class="nama-peserta"></span></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">{{ $statusTitle }}</div>
                        <div class="col-md-8">
                            <select name="is_verified" id="is_verified" class="form-control">
                                <option value="1" id="zero"></option>
                                <option value="2" id="one"></option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                @if (Request::segment(2) == 'data-pendaftar')
                    <button type="button" class="btn btn-primary" onclick="verifiedPendaftar()">Simpan</button>
                @else
                    <button type="button" class="btn btn-primary" oncanplay="acceptPendaftar()">Simpan</button>
                @endif
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="form-kesejahteraan-wrapper">
    <h3 class="form-title form-biodata-title">
        Formulir Data Kesejahteraan
    </h3>
    <form action="" method="post">
        <div class="form-wrapper form-biodata">
            <div class="w-full">
                <div class="form-group">
                    <label for="jenis_kesejahteraan">Jenis Kartu Kesejahteraan</label>
                    <select name="jenis_kesejahteraan" id="jenis_kesejahteraan" class="form-select">
                        <option value="">Pilih :</option>
                        <option value="1">Kartu Indonesia Pintar</option>
                        <option value="2">Kartu Indonesia Sehat</option>
                        <option value="3">Kartu Keluarga Sejahtera</option>
                        <option value="4">Kartu Perlindungan Sosial</option>
                        <option value="5">Program Keluarga Harapan</option>
                        <option value="6">Surat Keterangan Tidak Mampu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nomor_kartu">Nomor Kartu</label>
                    <input type="text" class="form-control" id="nomor_kartu" name="nomor_kartu">
                </div>
                <div class="form-group">
                    <label for="nama_kartu">Nama Pada Kartu</label>
                    <input type="text" name="nama_kartu" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tahun_mulai_berlaku">Tahun Mulai Berlaku</label>
                    <input type="text" class="form-control" id="tahun_mulai_berlaku" name="tahun_mulai_berlaku">
                </div>
                <div class="form-group">
                    <label for="tahun_berakhir">Tahun Berakhir</label>
                    <input type="text" class="form-control" id="tahun_berakhir" name="tahun_berakhir">
                </div>
            </div>

        </div>
        <div class="form-btn">
            <button type="button" class="btn btn-secondary" onclick="backToDataPeriodik()">Kembali</button>
            <button class="btn btn-primary" type="button" id="btn-data-diri" onclick="simpanData()">
                Simpan
            </button>
        </div>
    </form>

</div>

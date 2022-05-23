<div class="form-periodik-wrapper">
    <h3 class="form-title form-biodata-title">
        Formulir Data Periodik
    </h3>
    <form action="" method="post">
        <div class="form-wrapper form-biodata">
            <div class="form-section-left">
                <div class="form-group">
                    <label for="jenjang">Jenjang</label>
                    <select name="jenjang" id="jenjang" class="form-select">
                        <option value="">Pilih :</option>
                        <option value="1">SMP</option>
                        <option value="2">MTs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_sekolah_asal">Nama Sekolah Asal</label>
                    <input type="text" class="form-control" id="nama_sekolah_asal" name="nama_sekolah_asal">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <textarea name="alamat_sekolah_asal" id="alamat_sekolah_asal" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="nomor_ijazah">Nomor Ijazah</label>
                    <input type="text" class="form-control" id="nomor_ijazah" name="nomor_ijazah">
                </div>
                <div class="form-group">
                    <label for="nopes_ujian">Nomor Peserta Ujian Sekolah</label>
                    <input type="text" class="form-control" id="nopes_ujian" name="nopes_ujian">
                </div>
            </div>
            <div class="form-section-right">
                <div class="address-group">
                    <div class="form-group hobi">
                        <label for="hobi">Hobi</label>
                        <select name="hobi" id="hobi" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1">Belanja</option>
                            <option value="2">Berkemah</option>
                            <option value="3">Bermain Bola</option>
                            <option value="4">Bermain Biola</option>
                            <option value="5">Main Musik</option>
                            <option value="6">Futsal</option>
                            <option value="7">Membaca</option>
                            <option value="8">Menulis</option>
                            <option value="9">Mendaki</option>
                            <option value="10">Menyanyi</option>
                            <option value="11">Menari</option>
                            <option value="12">Bermain Game</option>
                            <option value="13">Fotografi</option>
                            <option value="14">Videografi</option>
                            <option value="15">Memancing</option>
                            <option value="16">Traveling</option>
                            <option value="17">Berenang</option>
                            <option value="18">Olahraga</option>
                            <option value="19">Kesenian</option>
                            <option value="20">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group cita-cita">
                        <label for="cita_cita">Cita-cita</label>
                        <select name="cita_cita" id="cita_cita" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1">Arsitek</option>
                            <option value="2">Atlet</option>
                            <option value="3">Astronot</option>
                            <option value="4">Bidan</option>
                            <option value="5">Content Creator Musik</option>
                            <option value="6">Desainer</option>
                            <option value="7">Dokter</option>
                            <option value="8">Entertainer</option>
                            <option value="9">Guru/Dosen</option>
                            <option value="10">Koki/Chef</option>
                            <option value="11">PNS/TNI/Polri</option>
                            <option value="12">Pembalap</option>
                            <option value="13">Fotographer</option>
                            <option value="14">Videographer</option>
                            <option value="15">Pembawa Acara</option>
                            <option value="16">Pengacara</option>
                            <option value="17">Penulis</option>
                            <option value="18">Pengusaha</option>
                            <option value="19">Politikus</option>
                            <option value="20">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group desa">
                        <label for="tinggi_badan">Tinggi Badan (cm)</label>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan">
                    </div>
                    <div class="form-group kecamatan">
                        <label for="berat_badan">Berat Badan (kg)</label>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group kabupaten">
                        <label for="jarak_rumah">Jarak Rumah ke Sekolah (m)</label>
                        <input type="number" class="form-control" id="jarak_rumah" name="jarak_rumah">
                    </div>
                    <div class="form-group provinsi">
                        <label for="waktu_tempuh">Waktu Tempuh (menit)</label>
                        <input type="number" class="form-control" id="waktu_tempuh" name="waktu_tempuh">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group anak-ke">
                        <label for="anak_ke">Anak ke berapa</label>
                        <input type="number" class="form-control" id="anak_ke" name="anak_ke">
                    </div>
                    <div class="form-group jumlah-saudara">
                        <label for="jumlah_saudara">Jumlah Saudara</label>
                        <input type="number" class="form-control" id="jumlah_saudara" name="jumlah_saudara">
                    </div>
                </div>
                <hr class="border-b-2 border-t-0 border-solid border-zinc-400 my-2">
                <h4 class="title-kesejahteraan">
                    Data Kesejahteraan
                </h4>
                <div class="address-group">
                    <div class="form-group kip">
                        <label for="kip">Apakah kamu memiliki KIP?</label>
                        <select name="kip" id="kip" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1" id="kip-1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group nomor-kip">
                        <label for="nomor_kip">Nomor KIP</label>
                        <input type="number" class="form-control" id="nomor_kip" name="nomor_kip" disabled="disabled">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group kis">
                        <label for="kis">Apakah kamu memiliki KIS?</label>
                        <select name="kis" id="kis" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1" id="kis-1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group nomor-kis">
                        <label for="nomor_kis">Nomor KIS</label>
                        <input type="number" class="form-control" id="nomor_kis" name="nomor_kis" disabled="disabled">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group kks">
                        <label for="kks">Apakah kamu memiliki KKS?</label>
                        <select name="kks" id="kks" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1" id="kks-1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group nomor-kks">
                        <label for="nomor_kks">Nomor KKS</label>
                        <input type="number" class="form-control" id="nomor_kks" name="nomor_kks" disabled="disabled">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group kps">
                        <label for="kps">Apakah kamu memiliki KPS?</label>
                        <select name="kps" id="kps" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1" id="kps-1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group nomor-kps">
                        <label for="nomor_kps">Nomor KPS</label>
                        <input type="number" class="form-control" id="nomor_kps" name="nomor_kps" disabled="disabled">
                    </div>
                </div>
                <div class="address-group">
                    <div class="form-group pkh">
                        <label for="pkh">Apakah kamu memiliki PKH?</label>
                        <select name="pkh" id="pkh" class="form-select">
                            <option value="">Pilih :</option>
                            <option value="1" id="pkh-1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group nomor-pkh">
                        <label for="nomor_pkh">Nomor PKH</label>
                        <input type="number" class="form-control" id="nomor_pkh" name="nomor_pkh" disabled="disabled">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-btn">
            <button type="button" class="btn btn-secondary" onclick="backToDataOrangTua()">Kembali</button>
            <button class="btn btn-primary" type="button" id="btn-data-diri" onclick="dataPeriodikNext()">
                Simpan
            </button>
        </div>
    </form>
</div>

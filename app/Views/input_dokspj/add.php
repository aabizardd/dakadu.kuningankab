<?php

use App\Controllers\Input_dokspj;
?>
<?=$this->extend('layout/default')?>

<?=$this->section('content')?>


<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('input_dokspj')?> " class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>INPUT DOKUMEN SPJ</h1>


    </div>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4> Input Data Dok.SPJ</h4>
            </div>
            <div class="card-body ">
                <form action="<?=site_url('input_dokspj')?>" method="POST" autocomplete="off"
                    enctype="multipart/form-data">
                    <?=csrf_field();?>
                    <div class="form-group">
                        <label>Arsip Kode Kegiatan</label>
                        <select class="form-control selectric" name="kode_arsip">
                            <option> </option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Alat/Bahan untuk Kegiatan Kantor Lainnya
                                (5.02.5.02.0.001.2.01.06.5.1.02.01.01.0036.)</option>
                            <option>Belanja Makanan dan Minuman Rapat (5.02.5.02.0.001.2.01.06.5.1.02.01.01.0052.)
                            </option>
                            <option>Belanja Perjalanan Dinas Dalam Kota (5.02.5.02.0.001.2.01.06.5.1.02.04.01.0003.)
                            </option>
                            <option>Belanja Gaji Pokok dan Tunjangan ASN/PNS
                                (5.02.5.02.0.001.2.02.01.5.1.01.01.01.0001.)</option>
                            <option>Tambahan Penghasilan berdasarkan Beban Kerja PNS
                                (5.02.5.02.0.001.2.02.01.5.1.01.02.01.0001.)</option>
                            <option>Tambahan Penghasilan berdasarkan Prestasi Kerja PNS
                                (5.02.5.02.0.001.2.02.01.5.1.01.02.05.0001.)</option>
                            <option>Belanja Insentif bagi ASN (5.02.5.02.0.001.2.02.01.5.1.01.03.01.0006.)</option>
                            <option>Belanja Insentif bagi KDH/WKDH (5.02.5.02.0.001.2.02.01.5.1.01.05.10.0006.)</option>
                            <option>Belanja Insentif Pegawai Non ASN (5.02.5.02.0.001.2.02.01.5.1.02.02.13.0006.)
                            </option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Alat Listrik
                                (5.02.5.02.0.001.2.06.01.5.1.02.01.01.0031.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Alat Tulis Kantor
                                (5.02.5.02.0.001.2.06.02.5.1.02.01.01.0024.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor- Kertas dan Cover
                                (5.02.5.02.0.001.2.06.02.5.1.02.01.01.0025.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor- Bahan Cetak
                                (5.02.5.02.0.001.2.06.02.5.1.02.01.01.0026.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Benda Pos
                                (5.02.5.02.0.001.2.06.02.5.1.02.01.01.0027.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Bahan Komputer
                                (5.02.5.02.0.001.2.06.02.5.1.02.01.01.0029.)</option>
                            <option>Belanja Makanan dan Minuman Rapat (5.02.5.02.0.001.2.06.04.5.1.02.01.01.0052.)
                            </option>
                            <option>Belanja Makanan dan Minuman Jamuan Tamu (5.02.5.02.0.001.2.06.04.5.1.02.01.01.0053.)
                            </option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor- Bahan Cetak
                                (5.02.5.02.0.001.2.06.05.5.1.02.01.01.0026.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Alat/Bahan untuk Kegiatan Kantor Lainnya
                                (5.02.5.02.0.001.2.06.05.5.1.02.01.01.0036.)</option>
                            <option>Belanja Langganan Jurnal/Surat Kabar/Majalah
                                (5.02.5.02.0.001.2.06.06.5.1.02.02.01.0062.)</option>
                            <option>Belanja Perjalanan Dinas Tetap (5.02.5.02.0.001.2.06.09.5.1.02.04.01.0002.)</option>
                            <option>Belanja Perjalanan Dinas Dalam Kota (5.02.5.02.0.001.2.06.09.5.1.02.04.01.0003.)
                            </option>
                            <option>Belanja Perjalanan Dinas Paket Meeting Luar Kota
                                (5.02.5.02.0.001.2.06.09.5.1.02.04.01.0005.)</option>
                            <option>Belanja Bahan-Bahan Bangunan dan Konstruksi
                                (5.02.5.02.0.001.2.07.10.5.1.02.01.01.0001.)</option>
                            <option>Belanja Alat/Bahan untuk Kegiatan Kantor-Perabot Kantor
                                (5.02.5.02.0.001.2.07.10.5.1.02.01.01.0030.)</option>
                            <option>Belanja Modal Mesin Proses (5.02.5.02.0.001.2.07.10.5.2.02.01.01.0011.)</option>
                            <option>Belanja Modal Personal Computer (5.02.5.02.0.001.2.07.10.5.2.02.10.01.0002.)
                            </option>
                            <option>Belanja Modal Komputer Unit Lainnya (5.02.5.02.0.001.2.07.10.5.2.02.10.01.0003.)
                            </option>
                            <option>Belanja Modal Peralatan Komputer Lainnya
                                (5.02.5.02.0.001.2.07.10.5.2.02.10.02.0005.)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Input</label>
                        <input type="date" name="tanggal_input" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 1</label>
                            <input type="file"
                                class="form-control-file <?=($validation->hasError('foto1')) ? "is-invalid" : ""?>"
                                id="foto1" name="foto1">
                            <label for="foto1">Maksimal file 500kb</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?=$validation->getError('foto1')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 2</label>
                            <input type="file"
                                class="form-control-file <?=($validation->hasError('foto2')) ? "is-invalid" : ""?>"
                                id="foto2" name="foto2">
                            <label for="foto2">Maksimal file 500kb</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?=$validation->getError('foto2')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 3</label>
                            <input type="file"
                                class="form-control-file <?=($validation->hasError('foto3')) ? "is-invalid" : ""?>"
                                id="foto3" name="foto3">
                            <label for="foto3">Maksimal file 500kb</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?=$validation->getError('foto3')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 4</label>
                            <input type="file"
                                class="form-control-file <?=($validation->hasError('foto4')) ? "is-invalid" : ""?>"
                                id="foto4" name="foto4">
                            <label for="foto4">Maksimal file 500kb</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?=$validation->getError('foto4')?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 5</label>
                            <input type="file"
                                class="form-control-file <?=($validation->hasError('foto5')) ? "is-invalid" : ""?>"
                                id="foto5" name="foto5">
                            <label for="foto5">Maksimal file 500kb</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?=$validation->getError('foto5')?>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> </i>
                            Submit</button>
                        <button type="reset" class="btn btn-warning"> Reset</button>

                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>


</section>
<?=$this->endSection()?>
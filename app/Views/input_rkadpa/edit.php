<?php

use App\Controllers\Input_rkadpa;
?>
<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('input_rkadpa') ?> " class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>UPDATE DOKUMEN RKA/DPA</h1>


    </div>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4> Edit Data RKA/DPA</h4>
            </div>
            <div class="card-body ">
                <form action="<?= site_url('input_rkadpa/' . $rkadpa->id_rkadpa) ?>" method="POST" autocomplete="off">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label>Tanggal Input</label>
                        <input type="date" name="tanggal_input" value="<?= $rkadpa->tanggal_input ?>" class="form-control" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 1</label>
                            <input type="file" value="<?= $rkadpa->foto1 ?>" class="form-control-file" id="foto1" name="foto1">
                            <label for="foto1">Maksimal file 500kb</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 2</label>
                            <input type="file" class="form-control-file" value="<?= $rkadpa->foto2 ?>" id="foto2" name="foto2">
                            <label for="foto2">Maksimal file 500kb</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 3</label>
                            <input type="file" class="form-control-file" value="<?= $rkadpa->foto3 ?>" id="foto3" name="foto3">
                            <label for="foto3">Maksimal file 500kb</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 4</label>
                            <input type="file" class="form-control-file" value="<?= $rkadpa->foto4 ?>" id="foto4" name="foto4">
                            <label for="foto4">Maksimal file 500kb</label>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dokumentasi 5</label>
                            <input type="file" class="form-control-file" value="<?= $rkadpa->foto5 ?>" id="foto5" name="foto5">
                            <label for="foto5">Maksimal file 500kb</label>
                        </div>
                    </div>



                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" name="keterangan" class="form-control"><?= $rkadpa->keterangan ?></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> </i> Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>

                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>


</section>
<?= $this->endSection() ?>
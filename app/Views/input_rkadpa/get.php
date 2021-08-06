<?php

use App\Controllers\Input_rkadpa;
?>
<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<section class="section">
    <div class="section-header">
        <h1>ARSIP RKA/DPA</h1>
        <div class="section-header-button">
            <a href="<?= site_url('input_rkadpa/add') ?> " class="btn btn-primary">Tambah Data</a>
        </div>
        <form action="" method="post">
            <select name="keyword">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
            <button type="submit" name="submit">Cari</button>
        </form>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4> Total Data RKA/DPA</h4>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>foto 1</th>
                            <th>foto 2</th>
                            <th>foto 3</th>
                            <th>foto 4</th>
                            <th>foto 5</th>
                            <th>Tanggal Input</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>

                        <?php foreach ($rkadpa as $key => $value) : ?>
                            <tr>
                                <td> <?= $key + 1 ?> </td>
                                <td><?= $value->foto1 ?></td>
                                <td><?= $value->foto2 ?></td>
                                <td><?= $value->foto3 ?></td>
                                <td><?= $value->foto4 ?></td>
                                <td><?= $value->foto5 ?></td>
                                <td><?= date('d/m/y', strtotime($value->tanggal_input)) ?></td>
                                <td><?= $value->keterangan ?></td>

                                <td class="text-center" style="width: 15%;">
                                    <a href="<?= site_url('input_rkadpa/edit/' . $value->id_rkadpa) ?> " class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('input_rkadpa/' . $value->id_rkadpa) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin akan menghapus data ini ?')">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>

                                    </form>

                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>
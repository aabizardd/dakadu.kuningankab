<?php

use App\Controllers\Input_users;
?>
<?=$this->extend('layout/default')?>

<?=$this->section('content')?>


<section class="section">
    <div class="section-header">
        <h1>ARSIP DATA PEGAWAI</h1>
        <?php if (session()->get('info_user') == "Admin"): ?>
        <div class="section-header-button">
            <a href="<?=site_url('input_users/add')?> " class="btn btn-primary">Tambah Akun</a>
        </div>
        <?php endif?>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">x</button>
            <b>Success !</b>
            <?=session()->getFlashdata('success');?>
        </div>
    </div>
    <?php endif;?>
    <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">x</button>
            <b>Error !</b>
            <?=session()->getFlashdata('error');?>
        </div>
    </div>
    <?php endif;?>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4> Total Data Pegawai Terdaftar</h4>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Password</th>



                            <th>Info User</th>
                            <?=session()->get('info_user') == "Admin" ? "<th>Aksi</th> " : ""?>

                        </tr>

                        <?php foreach ($users as $key => $value): ?>
                        <tr>
                            <td> <?=$key + 1?> </td>
                            <td><?=$value->nama_user?></td>
                            <td><?=$value->username_user?></td>
                            <td><?=$value->password_user?></td>
                            <td><?=$value->info_user?></td>


                            <?php if (session()->get('info_user') == "Admin"): ?>
                            <td class="text-center" style="width: 15%;">
                                <a href="<?=site_url('input_users/edit/' . $value->id_user)?> "
                                    class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <form action="<?=site_url('input_users/' . $value->id_user)?>" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin akan menghapus data ini ?')">
                                    <?=csrf_field();?>
                                    <input type="hidden" name="_method" value="DELETE">

                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>

                                </form>

                            </td>
                            <?php endif?>

                        </tr>
                        <?php endforeach;?>


                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>
<?=$this->endSection()?>
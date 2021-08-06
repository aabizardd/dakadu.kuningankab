<?php

use App\Controllers\Input_users;
?>
<?=$this->extend('layout/default')?>

<?=$this->section('content')?>


<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('input_users')?> " class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>INPUT AKUN BARU</h1>


    </div>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4> Input Data Akun Baru</h4>
            </div>
            <div class="card-body ">
                <form action="<?=site_url('input_users')?>" method="POST" autocomplete="off">
                    <?=csrf_field();?>






                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username_user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password_user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Info User</label>
                        <select class="form-control selectric" name="info_user">
                            <option>Pegawai </option>
                            <option>Admin </option>
                        </select>
                    </div>


                    <div>
                        <button type=" submit" class="btn btn-success"><i class="fas fa-paper-plane"> </i>
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
<?php

use App\Controllers\Input_dokpajak_ppndn;
?>
<?=$this->extend('layout/default')?>

<?=$this->section('content')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
    rel="stylesheet" />



<section class="section">
    <div class="section-header">
        <h1>ARSIP DOKUMEN PAJAK PPN DN</h1>
        <div class="section-header-button">
            <a href="<?=site_url('input_dokpajak_ppndn/add')?> " class="btn btn-primary">Tambah Data</a>
        </div>

        <form class="form-inline mt-1 mr-2" style="position: absolute;right: 0;" method="POST"
            action="/input_dokpajak_ppndn/index">

            <?=csrf_field()?>

            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Date</label>
                <input type="text" class="form-control" id="datepicker" placeholder="Tahun" autocomplete="off"
                    name="year">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cari</button>

        </form>
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
                <h4> Total Data Dok.Pajak PPN DN</h4>
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

                        <?php foreach ($dokpajak_ppndn as $key => $value): ?>
                        <tr>
                            <td> <?=$key + 1?> </td>
                            <td>
                                <img src="/img/dokpajak_ppndn/<?=$value->foto1?>" alt="" width="100" height="100">
                                <br><br>
                                <a class="btn btn-primary text-white"
                                    href="/input_dokpajak_ppndn/saveImg/<?=$value->foto1?>">Simpan</a>
                                <a class="btn btn-info text-white"
                                    href="<?=base_url('img/dokpajak_ppndn/' . $value->foto1)?>"
                                    target="_blank">Lihat</a>
                                <!-- <a class="btn btn-primary">Lihat</a> -->

                            </td>
                            <td>
                                <img src="/img/dokpajak_ppndn/<?=$value->foto2?>" alt="" width="100" height="100">
                                <br><br>
                                <a class="btn btn-primary text-white"
                                    href="/input_dokpajak_ppndn/saveImg/<?=$value->foto2?>">Simpan</a>
                                <a class="btn btn-info text-white"
                                    href="<?=base_url('img/dokpajak_ppndn/' . $value->foto2)?>"
                                    target="_blank">Lihat</a>
                            </td>
                            <td>
                                <img src="/img/dokpajak_ppndn/<?=$value->foto3?>" alt="" width="100" height="100">
                                <br><br>
                                <a class="btn btn-primary text-white"
                                    href="/input_dokpajak_ppndn/saveImg/<?=$value->foto3?>">Simpan</a>
                                <a class="btn btn-info text-white"
                                    href="<?=base_url('img/dokpajak_ppndn/' . $value->foto3)?>"
                                    target="_blank">Lihat</a>
                            </td>
                            <td>
                                <img src="/img/dokpajak_ppndn/<?=$value->foto4?>" alt="" width="100" height="100">
                                <br><br>
                                <a class="btn btn-primary text-white"
                                    href="/input_dokpajak_ppndn/saveImg/<?=$value->foto4?>">Simpan</a>
                                <a class="btn btn-info text-white"
                                    href="<?=base_url('img/dokpajak_ppndn/' . $value->foto4)?>"
                                    target="_blank">Lihat</a>
                            </td>
                            <td>
                                <img src="/img/dokpajak_ppndn/<?=$value->foto5?>" alt="" width="100" height="100">
                                <br><br>
                                <a class="btn btn-primary text-white"
                                    href="/input_dokpajak_ppndn/saveImg/<?=$value->foto5?>">Simpan</a>
                                <a class="btn btn-info text-white"
                                    href="<?=base_url('img/dokpajak_ppndn/' . $value->foto5)?>"
                                    target="_blank">Lihat</a>
                            </td>

                            <td><?=date('d/m/y', strtotime($value->tanggal_input))?></td>
                            <td><?=$value->keterangan?></td>

                            <td class="text-center" style="width: 15%;">
                                <a href="<?=site_url('input_dokpajak_ppndn/edit/' . $value->id_dokpajak_ppndn)?> "
                                    class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <form action="<?=site_url('input_dokpajak_ppndn/' . $value->id_dokpajak_ppndn)?>"
                                    method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin akan menghapus data ini ?')">
                                    <?=csrf_field();?>
                                    <input type="hidden" name="_method" value="DELETE">

                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>

                                </form>

                            </td>

                        </tr>
                        <?php endforeach;?>


                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>

<script>
$("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
});
</script>
<?=$this->endSection()?>
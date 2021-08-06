<li class="menu-header" style="margin-top: 20px;">Main Menu</li>


<li><a href="<?=site_url()?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

<li><a class="nav-link" href="<?=site_url('input_rkadpa')?>"><i class="fas fa-table"></i><span>RKA/DPA</span></a></li>
<li><a class="nav-link" href=" <?=site_url('input_lk')?>"><i class="fas fa-table"></i><span>LK</span></a></li>
<li><a class="nav-link" href="<?=site_url('input_dokspj')?> "><i class="fas fa-table"></i><span>DOK.SPJ</span></a></li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>DOK.PAJAK</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?=site_url('input_dokpajak_ppndn')?>">PPN DN</a></li>
        <li><a class="nav-link" href="<?=site_url('input_dokpajak_pph')?>">PPH</a></li>
        <li><a class="nav-link" href="<?=site_url('input_dokpajak_pajakdaerah')?>">Pajak Daerah</a></li>
    </ul>
</li>
<li class="menu-header" style="margin-top: 20px;">Tampilin hanya login admin aja</li>


<li><a href="<?=site_url('input_users')?>" class="nav-link "><i class="fas fa-fire"></i><span>Data Akun
            Pegawai</span></a></li>
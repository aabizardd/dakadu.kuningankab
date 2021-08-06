<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'rkdpa';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_rkdpa', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'tanggal_input', 'keterangan'];

    public function search($keyword)
    {
        return $this->table('rkdpa')->like('tanggal_input', $keyword);
    }
}

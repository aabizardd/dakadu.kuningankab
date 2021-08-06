<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [

            'nama_user' => 'Pegawai',
            'username_user' => 'kipecek',
            'password_user' => password_hash('12345', PASSWORD_BCRYPT),

            'nama_user' => 'Administrator',
            'username_user' => 'admin',
            'password_user' => password_hash('12345', PASSWORD_BCRYPT),

        ];
        $this->db->table('users')->insert($data);
    }
}
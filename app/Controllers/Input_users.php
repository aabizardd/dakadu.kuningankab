<?php

namespace App\Controllers;

class Input_users extends BaseController
{

    public function __construct()
    {

    }

    public function index()
    {
        // dd($this->session->get('id_user'));

        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('users')->getWhere(['id_user !=' => session()->get('id_user')]);
        // $query = $builder->get();

        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM users");

        $data['users'] = $builder->getResult();

        return view('input_users/get', $data);
    }
    public function create()
    {

        if (session()->get('info_user') != "Admin") {
            return redirect()->to(site_url('input_users'));
        }

        return view('input_users/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $data['password_user'] = password_hash($data['password_user'], PASSWORD_BCRYPT);

        $this->db->table('users')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_users'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('users')->getWhere(['id_user' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['users'] = $query->getRow();
                return view('input_users/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('users')->where(['id_user' => $id])->update($data);
        return redirect()->to(site_url('input_users'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('users')->where(['id_user' => $id])->delete();
        return redirect()->to(site_url('input_users'))->with('success', 'Data Berhasil Dihapus');
    }
}
<?php

namespace App\Controllers;

class Input_rkadpa extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('rkadpa');
        $query = $builder->get();

        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM rkadpa");

        $data['rkadpa'] = $query->getResult();

        return view('input_rkadpa/get', $data);
    }
    public function create()
    {
        return view('input_rkadpa/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('rkadpa')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_rkadpa'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('rkadpa')->getWhere(['id_rkadpa' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['rkadpa'] = $query->getRow();
                return view('input_rkadpa/edit', $data);
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

        $this->db->table('rkadpa')->where(['id_rkadpa' => $id])->update($data);
        return redirect()->to(site_url('input_rkadpa'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('rkadpa')->where(['id_rkadpa' => $id])->delete();
        return redirect()->to(site_url('input_rkadpa'))->with('success', 'Data Berhasil Dihapus');
    }
}
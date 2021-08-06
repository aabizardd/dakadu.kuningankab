<?php

namespace App\Controllers;

class Input_lk extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('lk');
        $query   = $builder->get();


        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM lk");



        $data['lk'] = $query->getResult();


        return view('input_lk/get', $data);
    }
    public function create()
    {
        return view('input_lk/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('lk')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_lk'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('lk')->getWhere(['id_lk' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['lk'] = $query->getRow();
                return view('input_lk/edit', $data);
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

        $this->db->table('lk')->where(['id_lk' => $id])->update($data);
        return redirect()->to(site_url('input_lk'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('lk')->where(['id_lk' => $id])->delete();
        return redirect()->to(site_url('input_lk'))->with('success', 'Data Berhasil Dihapus');
    }
}

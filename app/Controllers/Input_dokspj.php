<?php

namespace App\Controllers;

class Input_dokspj extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('dokspj');
        $query   = $builder->get();


        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM dokspj");



        $data['dokspj'] = $query->getResult();


        return view('input_dokspj/get', $data);
    }
    public function create()
    {
        return view('input_dokspj/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('dokspj')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_dokspj'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('dokspj')->getWhere(['id_dokspj' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dokspj'] = $query->getRow();
                return view('input_dokspj/edit', $data);
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

        $this->db->table('dokspj')->where(['id_dokspj' => $id])->update($data);
        return redirect()->to(site_url('input_dokspj'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('dokspj')->where(['id_dokspj' => $id])->delete();
        return redirect()->to(site_url('input_dokspj'))->with('success', 'Data Berhasil Dihapus');
    }
}

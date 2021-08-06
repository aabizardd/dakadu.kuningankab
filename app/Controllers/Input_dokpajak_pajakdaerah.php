<?php

namespace App\Controllers;

class Input_dokpajak_pajakdaerah extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('dokpajak_pajakdaerah');
        $query   = $builder->get();


        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM dokpajak_pajakdaerah");



        $data['dokpajak_pajakdaerah'] = $query->getResult();


        return view('input_dokpajak_pajakdaerah/get', $data);
    }
    public function create()
    {
        return view('input_dokpajak_pajakdaerah/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('dokpajak_pajakdaerah')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_dokpajak_pajakdaerah'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('dokpajak_pajakdaerah')->getWhere(['id_dokpajak_pajakdaerah' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dokpajak_pajakdaerah'] = $query->getRow();
                return view('input_dokpajak_pajakdaerah/edit', $data);
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

        $this->db->table('dokpajak_pajakdaerah')->where(['id_dokpajak_pajakdaerah' => $id])->update($data);
        return redirect()->to(site_url('input_dokpajak_pajakdaerah'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('dokpajak_pajakdaerah')->where(['id_dokpajak_pajakdaerah' => $id])->delete();
        return redirect()->to(site_url('input_dokpajak_pajakdaerah'))->with('success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Controllers;

class Input_dokpajak_pph extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('dokpajak_pph');
        $query   = $builder->get();


        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM dokpajak_pph");



        $data['dokpajak_pph'] = $query->getResult();


        return view('input_dokpajak_pph/get', $data);
    }
    public function create()
    {
        return view('input_dokpajak_pph/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('dokpajak_pph')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_dokpajak_pph'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('dokpajak_pph')->getWhere(['id_dokpajak_pph' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dokpajak_pph'] = $query->getRow();
                return view('input_dokpajak_pph/edit', $data);
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

        $this->db->table('dokpajak_pph')->where(['id_dokpajak_pph' => $id])->update($data);
        return redirect()->to(site_url('input_dokpajak_pph'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('dokpajak_pph')->where(['id_dokpajak_pph' => $id])->delete();
        return redirect()->to(site_url('input_dokpajak_pph'))->with('success', 'Data Berhasil Dihapus');
    }
}

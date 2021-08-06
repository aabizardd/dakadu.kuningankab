<?php

namespace App\Controllers;

class Input_dokpajak_ppndn extends BaseController
{
    public function index()
    {
        // cara 1 jika data tidak ada keterangan
        $builder = $this->db->table('dokpajak_ppndn');
        $query   = $builder->get();


        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM dokpajak_ppndn");



        $data['dokpajak_ppndn'] = $query->getResult();


        return view('input_dokpajak_ppndn/get', $data);
    }
    public function create()
    {
        return view('input_dokpajak_ppndn/add');
    }
    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('dokpajak_ppndn')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('input_dokpajak_ppndn'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('dokpajak_ppndn')->getWhere(['id_dokpajak_ppndn' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['dokpajak_ppndn'] = $query->getRow();
                return view('input_dokpajak_ppndn/edit', $data);
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

        $this->db->table('dokpajak_ppndn')->where(['id_dokpajak_ppndn' => $id])->update($data);
        return redirect()->to(site_url('input_dokpajak_ppndn'))->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {

        $this->db->table('dokpajak_ppndn')->where(['id_dokpajak_ppndn' => $id])->delete();
        return redirect()->to(site_url('input_dokpajak_ppndn'))->with('success', 'Data Berhasil Dihapus');
    }
}

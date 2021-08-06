<?php

namespace App\Controllers;

class Input_dokpajak_ppndn extends BaseController
{
    public function index()
    {

        if ($this->request->getVar('year')) {
            $builder = $this->db->table('dokpajak_ppndn');
            $query = $builder->getWhere(['YEAR(tanggal_input)' => $this->request->getVar('year')]);
            // dd($this->request->getVar('year'));
        } else {
            $builder = $this->db->table('dokpajak_ppndn');
            $query = $builder->get();
        }
        // cara 1 jika data tidak ada keterangan
        // $builder = $this->db->table('dokpajak_ppndn');
        // $query = $builder->get();

        // cara 2 jika data kompleks NANTI DIGUNAIN PAS VIEW PER TAHUN
        // $query = $this->db->query("SELECT * FROM dokpajak_ppndn");

        $data['dokpajak_ppndn'] = $query->getResult();

        return view('input_dokpajak_ppndn/get', $data);
    }
    public function create()
    {

        $data = [
            'validation' => \Config\Services::validation(),
        ];

        return view('input_dokpajak_ppndn/add', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'foto1' => [
                'rules' => 'max_size[foto1, 600]|is_image[foto1]|mime_in[foto1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ],
            ],
            'foto2' => [
                'rules' => 'max_size[foto2, 600]|is_image[foto2]|mime_in[foto2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ],
            ],
            'foto3' => [
                'rules' => 'max_size[foto3, 600]|is_image[foto3]|mime_in[foto3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ],
            ],
            'foto4' => [
                'rules' => 'max_size[foto4, 600]|is_image[foto4]|mime_in[foto4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ],
            ],
            'foto5' => [
                'rules' => 'max_size[foto5, 600]|is_image[foto5]|mime_in[foto5,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ],
            ],
            // 'penulis'=> 'required'
        ])) {
            // $validaton = \Config\Services::validation();

            // dd($validaton);
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validaton);
            return redirect()->to('/input_dokpajak_ppndn/add')->withInput();
        }

        $data1 = array();
        for ($i = 1; $i <= 5; $i++) {

            $file = $this->request->getFile('foto' . $i);
            if ($file->getError() == 4) {
                $namaFile = 'default.png';
            } else {
                //generate nama sampul
                $namaFile = $file->getRandomName();
                //pindahkan file ke folder img
                $file->move('img/dokpajak_ppndn', $namaFile);

                $data1['foto' . $i] = $namaFile;

                // array_push($data1, ['foto' . $i => ]);
            }
        }

        // dd($data1);

        $data2 = [
            'tanggal_input' => $this->request->getVar('tanggal_input'),
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $data = array_merge($data1, $data2);

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

    public function saveImg($file)
    {
        // Function to write image into file
        return $this->response->download('img/dokpajak_ppndn/' . $file, null);
    }
}
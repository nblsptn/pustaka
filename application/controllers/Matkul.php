<?php
class Matkul extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matkul');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_length' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matkul');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matkul', $data);
        }
    }
}
?>
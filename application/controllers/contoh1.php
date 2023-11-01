<?php 
class contoh1 extends CI_Controller
{
    public function awal()
    {
        echo "<h1>BIODATA DIRI</h1>";
        echo "Nama saya M Rival Cahya Nugraha<br>Saya tinggal
        di bumi karadenan permai";
    }
    public function print()
    {
        echo"<h1>INI CONTOH KE 2</h1>";
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('latihan1');
        $hasil = $this->latihan1->jumlah($n1, $n2);
        echo "<h1>Hasil Penjumlahan dari</h1> ". $n1 ." + " . $n2 ." = "
       .$hasil;
    }
    public function jmlh($n1, $n2)
    {
        $this->load->model('latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->latihan1->jumlah($n1, $n2);
        
        $this->load->view('view-latihan', $data);

    }
}
?>
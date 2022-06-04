<?php class latihan1 extends CI_Model
{
    public function index() 
    {
        echo "selamat datang..selamat belajar web programing";
        //$this -> load -> view ('view-latihan1')
    }
    public function penjumlahan($nil1,$nil2)
    {
        $this->load->model('latihan1_model');
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->$this->latihan1_model->jumlah($nil1,$nil2);
        return $this->hasil;
    }
}
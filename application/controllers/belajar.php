<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller{
    public function index(){

        $nil1 = 4;
        $nil2 = 6;

        $tambah=$nil1+$nil2;

        echo " <br> hasil dari $nil1 + $nil2 adalah ",$tambah ;
        echo " <br>";



        echo "Selamat Datang di Website saya <br>";
        echo "biodata";
    }

    public function biodata()
    {

        $data=array(
        'no_barang' => '1434314',
        'nama_barang'=> "aasus",
        'qty'=> 90
            
        );

            $this->load->view('views_belajar',$data);
    }
}

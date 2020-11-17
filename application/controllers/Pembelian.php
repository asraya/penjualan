<?php
class Pembelian extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
        $this->load->model('model_app');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $data=array(
            'title'=>'Pembelian Barang',
            'active_Pembelian'=>'active',
            'kd_mobil'=>$this->model_app->getKodeBarang(),
            'kd_pelanggan'=>$this->model_app->getKodePelanggan(),
            'kd_pegawai'=>$this->model_app->getKodePegawai(),
            'data_barang'=>$this->model_app->getAllData('tbl_mobil'),
            'data_pelanggan'=>$this->model_app->getAllData('tbl_pelanggan'),
            'data_contact'=>$this->model_app->getAllData('tbl_contact'),
            'data_pegawai'=>$this->model_app->getAllData('tbl_pegawai'),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_pembelian');
        $this->load->view('element/v_footer');
    }

//
//    ===================== INSERT =====================
    function tambah_barang(){
        $data=array(
            'kd_mobil'=>$this->input->post('kd_mobil'),
            'nm_mobil'=>$this->input->post('nm_mobil'),
            'Transmisi'=>$this->input->post('Transmisi'),
            'Tahun'=>$this->input->post('Tahun'),
            'Warna'=>$this->input->post('Warna'),
            'Km'=>$this->input->post('Km'),
            'stok'=>$this->input->post('stok'),
            'harga'=>$this->input->post('harga'),
            'hargabeli'=>$this->input->post('hargabeli'),
        );
        $this->model_app->insertData('tbl_mobil',$data);
        redirect("Pembelian");
    }
    function tambah_pelanggan(){
        $data=array(
            'kd_pelanggan'=> $this->input->post('kd_pelanggan'),
            'nm_pelanggan'=>$this->input->post('nm_pelanggan'),
            'alamat'=>$this->input->post('alamat'),
            'email'=>$this->input->post('email'),
        );
        $this->model_app->insertData('tbl_pelanggan',$data);
        redirect("Pembelian");
    }
    function tambah_pegawai(){
        $data=array(
            'kd_pegawai'=> $this->input->post('kd_pegawai'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'nama'=> $this->input->post('nama'),
            'level'=>$this->input->post('level'),
        );
        $this->model_app->insertData('tbl_pegawai',$data);
        
           
   //$data['Data Tersimpan'] = true;
 //$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
      redirect("Pembelian");
 
    }


//    ======================== EDIT =======================
    function edit_barang(){
        $id['kd_mobil'] = $this->input->post('kd_mobil');
        $data=array(
            'nm_mobil'=>$this->input->post('nm_mobil'),
            'stok'=>$this->input->post('stok'),
            'harga'=>$this->input->post('harga'),
            'hargabeli'=>$this->input->post('hargabeli'),
        );
        $this->model_app->updateData('tbl_mobil',$data,$id);
        redirect("Pembelian");
    }
    function edit_pelanggan(){
        $id['kd_pelanggan'] = $this->input->post('kd_pelanggan');
        $data=array(
            'nm_pelanggan'=>$this->input->post('nm_pelanggan'),
            'alamat'=>$this->input->post('alamat'),
            'email'=>$this->input->post('email'),
        );
        $this->model_app->updateData('tbl_pelanggan',$data,$id);
        redirect("Pembelian");
    }
    function edit_contact(){
        $id['id'] = 1;
        $data=array(
            'nama'=> $this->input->post('nama'),
            'owner'=>$this->input->post('owner'),
            'alamat'=>$this->input->post('alamat'),
            'telp'=>$this->input->post('telp'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'desc'=>$this->input->post('desc'),
        );
        $this->model_app->updateData('tbl_contact',$data,$id);
        redirect("Pembelian");
    }
    function edit_pegawai(){
        $id['kd_pegawai'] = $this->input->post('kd_pegawai');
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'nama'=> $this->input->post('nama'),
            'level'=>$this->input->post('level'),
        );
        $this->model_app->updateData('tbl_pegawai',$data,$id);
        redirect("Pembelian");
    }

//    ========================== DELETE =======================
    function hapus_barang(){
        $id['kd_mobil'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_mobil',$id);
        redirect("Pembelian");
    }
    function hapus_pelanggan(){
        $id['kd_pelanggan'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_pelanggan',$id);
        redirect("Pembelian");
    }
    function hapus_pegawai(){
        $id['kd_pegawai'] = $this->uri->segment(3);
        $this->model_app->deleteData('tbl_pegawai',$id);
        redirect("Pembelian");
    }
}



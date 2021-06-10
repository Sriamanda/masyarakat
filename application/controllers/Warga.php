<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MWarga');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataWarga()
	{

		if($this->uri->segment(4)=='view')
		{
		  $id_warga=$this->uri->segment(3);
		   $tampil=$this->MWarga->GetDataWhere('id_warga',$id_warga)->row();
			$data['detail']['id_warga']= $tampil->id_warga;
    		$data['detail']['id_rt']= $tampil->id_rt;
            $data['detail']['id_kk']= $tampil->id_kk;
            $data['detail']['nik']= $tampil->nik;
            $data['detail']['nama_lengkap']= $tampil->nama_lengkap;
            $data['detail']['no_telp']= $tampil->no_telp;
            $data['detail']['id_ronda']= $tampil->id_ronda;
			      $data['content']='Warga/VFormUpdateWarga';
		}
		else
		{	
			$data['DataWarga']=$this->MWarga->GetData();
			$data['content']='Warga/VWarga';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddWarga()
	{
		$data['content']='Warga/VFormAddWarga';
		$data['list_rt'] = $this->MWarga->list_rt();
		$data['list_kk'] = $this->MWarga->list_kk();
		$data['list_ronda'] = $this->MWarga->list_ronda();
		$this->load->view('VBackend',$data);
	}
	public function AddDataWarga()
	{

		 	$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jeid_rt file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('image')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$file = $this->upload->data();
         $add['image'] = $file['file_name'];
		 $add['id_warga']=$this->input->post('id_warga');
         $add['id_rt']= $this->input->post('id_rt');
       	 $add['id_kk']= $this->input->post('id_kk');
       	 $add['nik']= $this->input->post('nik');  
       	 $add['nama_lengkap']= $this->input->post('nama_lengkap');
       	 $add['no_telp']= $this->input->post('no_telp');
       	 $add['id_ronda']= $this->input->post('id_ronda');
        	 $this->MWarga->AddData('Warga',$add);
        	 redirect(site_url('Warga/DataWarga'));
	}
}


	public function UpdateDataWarga()
	{
		 $id_warga=$this->input->post('id_warga');
		 $update['id_rt']= $this->input->post('id_rt');
         $update['id_kk']= $this->input->post('id_kk');
         $update['nik']= $this->input->post('nik');
         $update['nama_lengkap']= $this->input->post('nama_lengkap'); 
         $update['no_telp']= $this->input->post('no_telp');
       	 $update['id_ronda']= $this->input->post('id_ronda');
          	 $this->MWarga->UpdateData('warga','id_warga',$id_warga,$update);
		 redirect(site_url('Warga/DataWarga'));
	}


	public function DeleteDataWarga()
	{
		 $id_warga=$this->uri->segment('3');
        	 $this->MWarga->DeleteData('warga','id_warga',$id_warga);
        	 redirect(site_url('Warga/DataWarga'));
	}

	function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->input->post('image')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }

}
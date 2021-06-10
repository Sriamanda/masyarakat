<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MKartu');
	}


public function DataKartu()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_kk=$this->uri->segment(3);
			$tampil=$this->MKartu->GetDataWhere('kartu_keluarga','id_kk',$id_kk)->row();
			        $data['detail']['id_kk']= $tampil->id_kk;
			        $data['detail']['no_kk']= $tampil->no_kk;
            		$data['detail']['kepala_keluarga']= $tampil->kepala_keluarga;
			$data['content']='Kartu/VFormUpdateKartu';
		}
		else
		{	
			$data['DataKartu']=$this->MKartu->GetData('kartu_keluarga');
			$data['content']='Kartu/VKartu';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKartu()
	{
		$data['content']='Kartu/VFormAddKartu';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKartu()
	{
		 	 $add['id_kk']=$this->input->post('id_kk');
		 	 $add['no_kk']=$this->input->post('no_kk');
         	 $add['kepala_keluarga']= $this->input->post('kepala_keluarga');
        	 $this->MKartu->AddData('kartu_keluarga',$add);
        	 redirect(site_url('Kartu/DataKartu'));
	}



	public function UpdateDataKartu()
	{
		 $id_kk=$this->input->post('id_kk');
		 	 $update['no_kk']= $this->input->post('no_kk');
		 	 $update['kepala_keluarga']= $this->input->post('kepala_keluarga');
          	 $this->MKartu->UpdateData('kartu_keluarga','id_kk',$id_kk,$update);
		 redirect(site_url('Kartu/DataKartu'));
	}


	public function DeleteDataKartu()
	{
		 $id_kk=$this->uri->segment('3');
        	 $this->MKartu->DeleteData('kartu_keluarga','id_kk',$id_kk);
        	 redirect(site_url('Kartu/DataKartu'));
	}

}
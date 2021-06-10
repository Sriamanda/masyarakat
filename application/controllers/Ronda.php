<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ronda extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataRonda()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_ronda=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('ronda','id_ronda',$id_ronda)->row();
			        $data['detail']['id_ronda']= $tampil->id_ronda;
            		$data['detail']['hari']= $tampil->hari;
			$data['content']='Ronda/VFormUpdateRonda';
		}
		else
		{	
			$data['DataRonda']=$this->MSudi->GetData('Ronda');
			$data['content']='Ronda/VRonda';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddRonda()
	{
		$data['content']='Ronda/VFormAddRonda';
		$this->load->view('VBackend',$data);
	}
	public function AddDataRonda()
	{
		 	 $add['id_ronda']=$this->input->post('id_ronda');
         	 $add['hari']= $this->input->post('hari');
        	 $this->MSudi->AddData('ronda',$add);
        	 redirect(site_url('Ronda/DataRonda'));
	}



	public function UpdateDataRonda()
	{
		 $id_ronda=$this->input->post('id_ronda');
		 	 $update['hari']= $this->input->post('hari');
          	 $this->MSudi->UpdateData('ronda','id_ronda',$id_ronda,$update);
		 redirect(site_url('Ronda/DataRonda'));
	}


	public function DeleteDataRonda()
	{
		 $id_ronda=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('ronda','id_ronda',$id_ronda);
        	 redirect(site_url('Ronda/DataRonda'));
	}

}
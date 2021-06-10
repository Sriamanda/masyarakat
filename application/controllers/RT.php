<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RT extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataRT()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_rt=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('ketua_rt','id_rt',$id_rt)->row();
			        $data['detail']['id_rt']= $tampil->id_rt;
            		$data['detail']['no_rt']= $tampil->no_rt;
            		$data['detail']['nama_rt']= $tampil->nama_rt;
			$data['content']='RT/VFormUpdateRT';
		}
		else
		{	
			$data['DataRT']=$this->MSudi->GetData('ketua_rt');
			$data['content']='RT/VRT';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddRT()
	{
		$data['content']='RT/VFormAddRT';
		$this->load->view('VBackend',$data);
	}
	public function AddDataRT()
	{
		 	 $add['id_rt']=$this->input->post('id_rt');
         	 $add['no_rt']= $this->input->post('no_rt');
         	 $add['nama_rt']= $this->input->post('nama_rt'); 
        	 $this->MSudi->AddData('ketua_rt',$add);
        	 redirect(site_url('RT/DataRT'));
	}



	public function UpdateDataRT()
	{
		 $id_rt=$this->input->post('id_rt');
		 	 $update['no_rt']= $this->input->post('no_rt');
         	 $update['nama_rt']= $this->input->post('nama_rt');
          	 $this->MSudi->UpdateData('ketua_rt','id_rt',$id_rt,$update);
		 redirect(site_url('RT/DataRT'));
	}


	public function DeleteDataRT()
	{
		 $id_rt=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('ketua_rt','id_rt',$id_rt);
        	 redirect(site_url('RT/DataRT'));
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MWarga extends CI_Model
{
     function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData()
    {
        $this->db->from('ketua_rt as a, kartu_keluarga as b, ronda as c, warga as d');
        $this->db->where('a.id_rt = `d`.`id_rt`');
        $this->db->where('b.id_kk = `d`.`id_kk`');
        $this->db->where('c.id_ronda = `d`.`id_ronda`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('ketua_rt as a, kartu_keluarga as b, ronda as c, warga as d');
        $this->db->where('a.id_rt = `d`.`id_rt`');
        $this->db->where('b.id_kk = `d`.`id_kk`');
        $this->db->where('c.id_ronda = `d`.`id_ronda`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_rt()
     {
        return $this->db->get('ketua_rt')->result();
     }

     function list_kk()
     {
        return $this->db->get('kartu_keluarga')->result();
     }

     function list_ronda()
     {
        return $this->db->get('ronda')->result();
     }
}
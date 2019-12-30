<?php
class modeladmin extends CI_Model
{
   public function tambah_data($table, $data)
   {
      $this->db->insert($table, $data);
   }
   function tampil_data(){
   	return $this->db->get("data_mahasiswa")->result();
   	
   	// return->db->query("SELECT * FROM data_mahasiswa");
   	// return;
   }
}

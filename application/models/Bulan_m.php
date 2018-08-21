<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bulan_m extends CI_Model {

  function bulan_list(){
        $hasil=$this->db->query("SELECT * FROM bulan");
        return $hasil->result();
    }

    function simpan_bulan($id,$nabul){
        $hasil=$this->db->query("INSERT INTO bulan (id_bulan,nama_bulan)VALUES('$id','$nabul')");
        return $hasil;
    }

    function get_bulan_by_kode($idbul){
        $hsl=$this->db->query("SELECT * FROM bulan WHERE id_bulan='$idbul'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_bulan' => $data->id_bulan,
                    'nama_bulan' => $data->nama_bulan,
                    );
            }
        }
        return $hasil;
    }

    function update_bulan($idbul,$nabul){
        $hasil=$this->db->query("UPDATE bulan SET nama_bulan='$nabul' WHERE id_bulan='$idbul'");
        return $hasil;
    }

    function hapus_bulan($idbul){
        $hasil=$this->db->query("DELETE FROM bulan WHERE id_bulan='$idbul'");
        return $hasil;
    }

}

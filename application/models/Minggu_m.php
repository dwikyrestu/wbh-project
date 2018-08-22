<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Minggu_m extends CI_Model {

  function minggu_list($id){
        $hasil=$this->db->query("SELECT * FROM minggu where id_bulan='$id'");
        return $hasil->result();
    }

    function minggu_detlist($id){
          $hasil=$this->db->query("SELECT * FROM detail_penjualan where id_minggu='$id'");
          return $hasil->result();
      }


    function simpan_minggu($id,$minggu,$omset){
        $hasil=$this->db->query("INSERT INTO minggu (id_bulan,nama_minggu,omset_minggu)VALUES('$id','$minggu','$omset')");
        return $hasil;
    }

    function get_bulan_by_kode($idbul){
        $hsl=$this->db->query("SELECT * FROM bulan WHERE id_bulan='$idbul'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_bulan' => $data->id_bulan,
                    'nama_bulan' => $data->nama_bulan,
                    'target' => $data->target,
                    );
            }
        }
        return $hasil;
    }

    function update_bulan($idbul,$nabul){
        $hasil=$this->db->query("UPDATE bulan SET nama_bulan='$nabul' WHERE id_bulan='$idbul'");
        return $hasil;
    }

    function hapus_minggu($idbul){
        $hasil=$this->db->query("DELETE FROM minggu WHERE id_minggu='$idbul'");
        return $hasil;
    }

}

<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
 public function tblKategori(){
    $a = $this->db->table('tbl_kategori');
    return $a->get();}
}

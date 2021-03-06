<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function delete($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier', ['supplier_id' => $id]);
    }
}

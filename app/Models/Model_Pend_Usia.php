<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Pend_Usia extends Model

{
    protected $table = 'penddk_usia';

    protected $allowedFields = ['l_0_5', 'p_0_5', 'l_6_10', 'p_6_10', 'l_11_15', 'p_11_15', 'l_16_20', 'p_16_20', 'l_21_25', 'p_21_25', 'l_26_30', 'p_26_30', 'l_31_35', 'p_31_35', 'l_36_40', 'p_36_40', 'l_41_45', 'p_41_45', 'l_46_50', 'p_46_50', 'l_51_55', 'p_51_55', 'l_56_60', 'p_56_60', 'l_61_65', 'p_61_65', 'l_66_plus', 'p_66_plus'];
    // datatables
    private function _get_datatables_query()
    {
        $column_search = array('penddk_usia.l_0_5', 'penddk_usia.p_0_5', 'penddk_usia.l_6_10', 'penddk_usia.p_6_10', '.penddk_usia.l_11_15', 'penddk_usia.p_11_15', 'penddk_usia.l_16_20', 'penddk_usia.p_16_20', 'penddk_usia.l_21_25', 'penddk_usia.p_21_25', 'penddk_usia.l_26_30', 'penddk_usia.p_26_30', 'penddk_usia.l_31_35', 'penddk_usia.p_31_35', 'penddk_usia.l_36_40', 'penddk_usia.p_36_40', 'penddk_usia.l_41_45', 'penddk_usia.p_41_45', 'penddk_usia.l_46_50', 'penddk_usia.p_46_50', 'penddk_usia.l_51_55', 'penddk_usia.p_51_55', 'penddk_usia.l_56_60', 'penddk_usia.p_56_60', 'penddk_usia.l_61_65', 'penddk_usia.p_61_65', 'penddk_usia.l_66_plus', 'penddk_usia.p_66_plus', null);
        $column_order = array('penddk_usia.l_0_5', 'penddk_usia.p_0_5', 'penddk_usia.l_6_10', 'penddk_usia.p_6_10', '.penddk_usia.l_11_15', 'penddk_usia.p_11_15', 'penddk_usia.l_16_20', 'penddk_usia.p_16_20', 'penddk_usia.l_21_25', 'penddk_usia.p_21_25', 'penddk_usia.l_26_30', 'penddk_usia.p_26_30', 'penddk_usia.l_31_35', 'penddk_usia.p_31_35', 'penddk_usia.l_36_40', 'penddk_usia.p_36_40', 'penddk_usia.l_41_45', 'penddk_usia.p_41_45', 'penddk_usia.l_46_50', 'penddk_usia.p_46_50', 'penddk_usia.l_51_55', 'penddk_usia.p_51_55', 'penddk_usia.l_56_60', 'penddk_usia.p_56_60', 'penddk_usia.l_61_65', 'penddk_usia.p_61_65', 'penddk_usia.l_66_plus', 'penddk_usia.p_66_plus');
        $orders = array('id' => 'asc');

        $this->db->table('penddk_usia');

        $i = 0;
        foreach ($column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->groupStart();
                    $this->like($item, $_POST['search']['value']);
                } else {
                    $this->orLike($item, $_POST['search']['value']);
                }
                if (count($column_search) - 1 == $i) //last loop
                    $this->groupEnd();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($orders)) {
            $order = $orders;
            $this->orderBy(key($order), $order[key($order)]);
        }
    }
    // public function get_relasi()
    // {
    //     $this->db->select('penddk_usia.id as id, penddk_usia.selesai_pemantauan as selesai_pemantauan, penddk_usia.proses_pemantauan as proses_pemantauan, kecamatan.kecamatan as kecamatan');
    //     $this->db->from('penddk_usia');
    //     $this->db->join('kecamatan', 'kecamatan.id = penddk_usia.id_kecamatan');
    //     $query = $this->db->get();
    //     return $query;
    // }
    // public function get_jumlah_pend()
    // {
    //     $query = $this->db->get('penddk_usia');
    //     return $query;
    // }
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) $this->limit($_POST['length'], $_POST['start']);
        $query = $this->get();
        return $query->getResult();
    }
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->get();
        return $query->getNumRows();
    }
    public function count_all()
    {
        $this->table('penddk_usia');
        return $this->countAllResults();
    }
    // get all
    public function get_all()
    {
        $this->db->table('penddk_usia');
        return $this->get();
    }
    // get data by id
    public function get_by_id($id)
    {
        $this->db->table('penddk_usia');
        $this->where('id', $id);
        return $this->get()->getRow();
    }
    // public function tambah($data)
    // {
    //     if ($this->db->table('penddk_usia')->insert($data)) {
    //         return TRUE;
    //     }
    //     return $this->db->error();
    // }
    // public function ubah($id, $data)
    // {
    //     if ($this->db->table('penddk_usia')->update($data, array('id' => $id))) {
    //         return TRUE;
    //     }
    //     return $this->db->error();
    // }
    // public function hapus($id)
    // {
    //     $this->where('id', $id);
    //     if ($this->delete()) {
    //         return TRUE;
    //     }
    //     return $this->db->error();
    // }
}

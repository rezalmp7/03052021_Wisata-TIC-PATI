<?php

class M_admin extends CI_Model
{
    // ----menggunakan query sql----
    function select_menu_count()
    {
        return $this->db->query("SELECT kode, count(kode) FROM pesanan WHERE status='belum'");
    }
    function select_menu_count_bolean()
    {
        $cek = $this->db->query("SELECT kode, count(kode) FROM pesanan WHERE status='belum'")->num_rows();
        if($cek >= 1)
        {
            return true;
        }
        else {
            return false;
        }
    }
    function select_beetween($table, $where, $dateNow)
    {
        return $this->db->query("select * from ".$table." where ".$where." between '".$dateNow." 00:00:00' and '".$dateNow." 23:59:59'");
    }
    function select_select_beetween($select, $table, $where, $dateNow)
    {
        return $this->db->query('SELECT '.$select.' FROM '.$table.' WHERE '.$where.' between "'.$dateNow.' 00:00:00" and "'.$dateNow.' 23:59:59"');
    }
    function selectsum_select_join_2table_wherebeetween($select, $table, $table2, $on2, $where, $dateNow)
    {
        return $this->db->query("SELECT ".$select." FROM ".$table." LEFT JOIN ".$table2." ON ".$on2." where ".$where." between '".$dateNow." 00:00:00' and '".$dateNow." 23:59:59'");
    }
    // ----/pakaiquery----
    function select_all($table)
    {
        return $this->db->get($table);
    }
    function select_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function select_select($select, $table)
    {
        $this->db->select($select);
        return $this->db->get($table);
    }
    function select_select_orderBy($select, $table, $orderBy, $orderType)
    {
        return $this->db->select($select)
        ->from($table)
        ->order_by($orderBy, $orderType)
        ->get();
    }
    function select_select_limit($select, $table, $limit)
    {
        return $this->db->select($select)
        ->from($table)
        ->limit($limit)
        ->get();
    }
    
    function select_select_where_limit($select, $table, $where, $limit)
    {
        return $this->db->select($select)
        ->from($table)
        ->where($where)
        ->limit($limit)
        ->get();
    }
    function select_select_where($select, $table, $where)
    {
        return $this->db->select($select)
        ->from($table)
        ->where($where)
        ->get();
    }
    function select_select_where_join_2table_type($select, $table1, $table2, $on, $where, $type)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on, $type)
        ->where($where)
        ->get();
    }
    function select_select_where_join_2table_type_limit($select, $table1, $table2, $on, $where, $type, $limit)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on, $type)
        ->where($where)
        ->limit($limit)
        ->get();
    }
    function select_select_join_2table_type($select, $table1, $table2, $on, $type)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on, $type)
        ->get();
    }
    function select_select_sum_join_2table_type($select, $selectSum, $table1, $table2, $on, $type, $groupBy)
    {
        return $this->db->select($select)
        ->select_sum($selectSum)
        ->from($table1)
        ->join($table2, $on, $type)
        ->group_by($groupBy)
        ->get();
    }
    function select_select_where_join_3table_type($select, $table1, $table2, $on2, $type2, $table3, $on3, $type3, $where)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on2, $type2)
        ->join($table3, $on3, $type3)
        ->where($where)
        ->get();
    }
    function select_select_join_3table_type_groupBy($select, $table1, $table2, $on2, $type2, $table3, $on3, $type3, $groupBy)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on2, $type2)
        ->join($table3, $on3, $type3)
        ->group_by($groupBy)
        ->get();
    }
    function select_select_sum_join_3table_type($select, $selectSum, $table1, $table2, $on2, $type2, $table3, $on3, $type3, $groupBy)
    {
        return $this->db->select($select)
        ->select_sum($selectSum)
        ->from($table1)
        ->join($table2, $on2, $type2)
        ->join($table3, $on3, $type3)
        ->group_by($groupBy)
        ->get();
    }
    function select_select_join_3table_type($select, $table1, $table2, $on2, $type2, $table3, $on3, $type3)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on2, $type2)
        ->join($table3, $on3, $type3)
        ->get();
    }
    function select_select_join_4table_type($select, $table1, $table2, $on2, $type2, $table3, $on3, $type3, $table4, $on4, $type4)
    {
        return $this->db->select($select)
        ->from($table1)
        ->join($table2, $on2, $type2)
        ->join($table3, $on3, $type3)
        ->join($table4, $on4, $type4)
        ->get();
    }
    function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function delete_data($table, $where)
    {
        $this->db->delete($table, $where);
    }
    function update_data($table, $set, $where)
    {
        $this->db->from($table)
        ->where($where)
        ->set($set)
        ->update();
    }
	public function updateBatch($table, $set, $where)
	{
		$this->db->update_batch($table ,$set, $where); 
	}
}
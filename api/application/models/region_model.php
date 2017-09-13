<?php  
class Region_model extends CI_Model 
{
    public $table = 'Region';

    public function __construct()
    {
        parent::__construct();
        $this->load->database('sqlserver');
    }

    public function getAll()
    {
        $query = $this->db->get($this->table);

        if($query->num_rows() > 0)
        {
            return $query->result();
        }
    }

    public function get($id)
    {
        $query = $this->db->get_where($this->table, array("IdRegion" => $id));

        if($query->num_rows() == 1)
        {
            return $query->row();
        }
    }

}



?>
<?php 
    class m_dolgozok extends CI_Model{
        function getAllDolgozo(){
             $list = array();
             
             $query = $this->db->get('GetAllDolgozo');
             print $query->result();
        }
    }
    
?>

<?php
class m_arajanlat extends CI_Model
{
    function listArajanlatok(){
        $list= array();
             
             $q = "select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id";
             $query = $this->db->query($q);
           
             if ($query->num_rows() !== 0 ){
                 foreach($query->result() as $row){
                     $list['aid'][] = $row->ajanlat_id;
                     $list['projekt_nev'][] = $row->projekt_nev;
                     $list['hozzaadva'][] = $row->ajanlatkeres_datuma;
                     $list['statusz'][] = $row->statusz;
                     $list['megrendelo'][] = $row->nev;                     
                 }
                 
                return $list;
             }
            
    }
    /**
     * @param = array
     * A fv az árajánlat táblába beteszi a paraméterül kapott adatokat.
     * 
     */
    function addArajanlat($data){
        $msg;
        try{
            $this->db->insert('arajanlat',$data);
            $msg = "OK";
            return $msg;
        }
        catch(exception $ex){
            $msg = $ex->getMessage();
        }
    }
    
    function editArajanlat($id, $data){         
        $this->db->where('ajanlat_id',$id);
        $this->db->update('arajanlat', $data);
        return;                           
    }
    
    /**
     * Árajánlat státusza
     * @param varchar(16)
     */
    function getArajanlatStatusz($aid){
        $this->db->select('statusz');
        $query = $this->db->get('arajanlat');
        $this->db->where('ajanlat_id', $aid); 
        return $query->result();
    }
    
    function getArajanlatData($id){
        $arajanlat = array();
        if ($id != null) {
            $query = $this->db->get_where('arajanlat', array('ajanlat_id' => $id));
            if ($query->num_rows() == 1) {
                foreach ($query->result() as $row) {
                    $arajanlat['ajanlat_id'] = $row->ajanlat_id;
                    $arajanlat['projekt_nev'] = $row->projekt_nev;
                    $arajanlat['ajanlatkeres_datuma'] = $row->ajanlatkeres_datuma;
                    $arajanlat['hatarido'] = $row->hatarido;
                    $arajanlat['nyereseg'] = $row->nyereseg;
                    $arajanlat['statusz'] = $row->statusz;
                    $arajanlat['megrendelo_megrendelo_id'] = $row->megrendelo_megrendelo_id;           
                }
                //$dolgozo['username'] = $username;
                return $arajanlat;
            }
        }
    }
    
    function addTermek($data){
        try{
            $this->db->insert('termek',$data);
            $msg = "OK";
            return $msg;
        }
        catch(exception $ex){
            $msg = $ex->getMessage();
        }
    }
    
    function addKomponens($data){
        try{
            $this->db->insert('komponens',$data);
            $msg = "OK";
            return $msg;
        }
        catch(exception $ex){
            $msg = $ex->getMessage();
        }
    }
    
}
?>
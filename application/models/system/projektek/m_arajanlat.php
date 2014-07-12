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
                     $list['hozzaadva'][] = $row->ajanlatkeres_datuma;
                     $list['statusz'][] = $row->statusz;
                     $list['megrendelo'][] = $row->nev;                     
                 }
                 
                return $list;
             }
             else{
                var_dump("hiba a lekérdezésben");
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
    
}
?>
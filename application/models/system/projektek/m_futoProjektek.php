<?php
class m_futoprojektek extends CI_Model
{
    function listMunkak(){
        $list= array();
             
             $q = "select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id";
             $query = $this->db->query($q);
           
             if ($query->num_rows() !== 0 ){
                 foreach($query->result() as $row){
                     $list['munkaszam'][] = $row->munkaszam;
                     $list['hozzaadva'][] = $row->hozzadva;
                     $list['statusz'][] = $row->munkastatusz;
                     $list['megrendelo'][] = $row->nev;                     
                 }
                 
                return $list;
             }
             else{
                var_dump("hiba a lekérdezésben");
             }
    }
    
}
?>
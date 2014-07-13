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
             
    }
    
    
    /**
     * @param array
     * Új munkaszámot úgy generálok, hogy megnézem az utolsó munkaszámot a táblában,
     * majd ahoz hozzáadok egyet.
     */
    function addMunka($munka){       
        $regiszam;
        $currentYear = date("Y");
        
        $q = "select munkaszam from munka order by hozzadva desc limit 1";
        $query = $this->db->query($q);
        if($query->num_rows() !==0){
            foreach($query->result() as $row){
                $regiszam = $row->munkaszam;
            }
            $regisorszam = explode("-",$regiszam);
            $sorszam = (int)$regisorszam[1];
            $ujsorszam = $sorszam + 1;
            $josorszam = sprintf("%04d", $ujsorszam);
            $munka['munkaszam'] = 'NT' . $currentYear . '-' . $josorszam;
        }
        else{         
            $munka['munkaszam'] = 'NT' . $currentYear . '-0001'; 
        }        
        $this->db->insert('munka',$munka);       
        return true;
        
    }
    
}
?>
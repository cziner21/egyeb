<?php
class m_megrendelo extends CI_Model
{
    function listMegrendelok(){
        $list= array();
             
             $query = $this->db->get('megrendelo');
           
             if ($query->num_rows() !== 0 ){
                 foreach($query->result() as $row){
                     $list['mid'][] = $row->megrendelo_id;
                     $list['nev'][] = $row->nev;
                     $list['cim'][] = $row->cim;
                     $list['telefon'][] = $row->telefon; 
                     $list['email'][] = $row->cim;
                     $list['hozzaadva'][] = $row->hozzaadva;                     
                 }
                 
                return $list;
             }
             else{
                var_dump("hiba a lekérdezésben");
             }
    }
    
    /**
     * @param = array
     * A fv az megrendelő táblába beteszi a paraméterül kapott adatokat.
     * 
     */
    function addMegrendelo($data){
        $msg;
        try{
            $this->db->insert('megrendelo',$data);
            $msg = "OK";
            return $msg;
        }
        catch(exception $ex){
            $msg = $ex->getMessage();
        }
    }
    
    function getMegrendeloData($megrendelo_id){
        $megrendelo = array();
        if ($megrendelo_id != null) {
            $query = $this->db->get_where('megrendelo', array('megrendelo_id' => $megrendelo_id));
            if ($query->num_rows() == 1) {
                foreach ($query->result() as $row) {
                     $megrendelo['mid'] = $row->megrendelo_id;
                     $megrendelo['nev'] = $row->nev;
                     $megrendelo['cim'] = $row->cim;
                     $megrendelo['telefon'] = $row->telefon; 
                     $megrendelo['email'] = $row->cim;
                     $megrendelo['hozzaadva'] = $row->hozzaadva;  
                }
                
                return $megrendelo;
            }
        }
    }
    
    /**
     * Megrendelő szerkesztése
     * @param   int(11)
     * @param   array
     */
    function editMegrendelo($megrendelo_id, $data){          
        $this->db->where('megrendelo_id',$megrendelo_id);
        $this->db->update('megrendelo', $data);             
        return;            
    }
    
    /**
     * Megrednelő törlése
     */
    function delMegrendelo($megrendelo_id){
        $this->db->delete('megrendelo', array('megrendelo_id' => $megrendelo_id)); 
        return;
    }
    
}
?>
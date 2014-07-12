<?php
class m_munka extends CI_Model
{
    function listMunkak(){
        $list= array();
             
             //$query = $this->db->get('munka');
             $this->db->select('munkaszam, projekt_nev, hozzadva, megrendeles_datuma, munka.hatarido as munkahatar, munka.statusz as munkastatusz, arajanlat_id, rajzszam, bizonylatszam, komponens_id');
             $this->db->from('munka');
             $this->db->join('munka_rajz_kapcs', 'munka.munkaszam = munka_rajz_kapcs.munka_munkaszam');
             $this->db->join('rajz', 'munka_rajz_kapcs.rajz_rajzszam = rajz.rajzszam');
             $this->db->join('munka_komponens_kapcs', 'munka.munkaszam = munka_komponens_kapcs.munka_munkaszam');
             $this->db->join('komponens', 'munka_komponens_kapcs.komponens_komponens_id = komponens.komponens_id');
             $this->db->join('munkalap', 'munka.munkaszam = munkalap.munka_munkaszam');
             //$this->db->join('arajanlat', 'munka.arajanlat_id = arajanlat.arajanlat_id');
             //$this->db->join('megrendelo', 'arajanlat.megrendelo_id = megrendelo.megrendelo_id');
             $query = $this->db->get();
           
             if ($query->num_rows() !== 0 ){
                 foreach($query->result() as $row){
                     $list['munkaszam'][] = $row->munkaszam;
                     $list['projekt_nev'][] = $row->projekt_nev;
                     $list['hozzaadva'][] = $row->hozzaadva;
                     $list['megrendeles_datuma'][] = $row->megrendeles_datuma; 
                     $list['hatarido'][] = $row->munkahatar;
                     $list['statusz'][] = $row->statusz;   
                     $list['arajanlat_id'][] = $row->arajanlat_id; 
                     $list['rajzszam'][] = $row->rajzszam;
                     $list['bizonylatszam'][] = $row->bizonylatszam;   
                     $list['komponens_id'][] = $row->komponens_id;  
                                        
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
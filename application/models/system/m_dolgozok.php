<?php
class m_dolgozok extends CI_Model
{

    function getDolgozoData($userId)
    {
        $dolgozo = array();
        if ($userId != null) {
            $query = $this->db->get_where('user_profiles', array('user_id' => $userId));
            if ($query->num_rows() == 1) {
                foreach ($query->result() as $row) {
                    //$dolgozo['id'] = $row->id;
                    $dolgozo['teljes_nev'] = $row->teljes_nev;
                    $dolgozo['country'] = $row->country;
                    /*$dolgozo['website'] = $row->website;
                    $dolgozo['about'] = $row->about;*/
                }
                //$dolgozo['username'] = $username;
                return $dolgozo;
            }
        }
    }
    
    function dolgozoInfo($p_id){
        if($p_id != null){
            $jog = array();
            //$id = $p_id;
            //$dolgozoInfo_stored_procedure = "CALL dolgozoInfo(?) ";
            $query = $this->db->get_where('dolgozok', array('id' => $p_id));
            if($query->num_rows() == 1){
                foreach ($query->result() as $row){
                 $jog['username'] = $row->username;
                 $jog['priv'] = $row->priv;   
                 $jog['vezerlopult_megtekintes'] = $row->vezerlopult_megtekintes;
            	 $jog['hozzaferesek_megtekintes'] = $row->hozzaferesek_megtekintes; 
            	 $jog['hozzaferesek_szerkesztes'] = $row->hozzaferesek_szerkesztes ;
            	 $jog['megrendelok_megtekintes'] = $row->megrendelok_megtekintes ;
            	 $jog['megrendelok_szerkesztes'] = $row->megrendelok_szerkesztes ;
            	 $jog['muveletek_megtekintes'] = $row->muveletek_megtekintes ;
            	 $jog['muveletek_szerkesztes'] = $row->muveletek_szerkesztes ;
            	 $jog['gepieroforrasok_megtekintes'] = $row->gepieroforrasok_megtekintes; 
            	 $jog['gepieroforrasok_szerkesztes'] = $row->gepieroforrasok_szerkesztes ;
            	 $jog['anyagok_megtekintes'] = $row->anyagok_megtekintes ;
            	 $jog['anyagok_szerkesztes'] = $row->anyagok_szerkesztes ;
            	 $jog['valtozokoltsegek_megtekintes'] = $row->valtozokoltsegek_megtekintes ;
            	 $jog['valatozokoltsegek_szerkesztes'] = $row->valatozokoltsegek_szerkesztes ;
            	 $jog['egyebbeallitasok_megtekintes'] = $row->egyebbeallitasok_megtekintes ;
            	 $jog['egyebbeallitasok_szerkesztes'] = $row-> egyebbeallitasok_szerkesztes ;
            	 $jog['beszerzes_megtekintes '] = $row->beszerzes_megtekintes ;
            	 $jog['termeles_megtekintes'] = $row->termeles_megtekintes ;
            	 $jog['arajanlatok_megtekintes'] = $row->arajanlatok_megtekintes; 
            	 $jog['arajanlatok_szerkesztes'] = $row->arajanlatok_szerkesztes ;
            	 $jog['futoprojektek_megtekintes'] = $row->futoprojektek_megtekintes;     
            	 $jog['futoprojektek_szerkesztes'] = $row->futoprojektek_szerkesztes ;
            	 $jog['ellenorzes_megtekintes'] = $row->ellenorzes_megtekintes ;
            	 $jog['ellenorzes_szerkesztes'] = $row->ellenorzes_szerkesztes ;
            	 $jog['kiszallitas_megtekintes'] = $row->kiszallitas_megtekintes ;
            	 $jog['kiszallitas_szerkesztes'] = $row->kiszallitas_szerkesztes ;
            	 $jog['kiszallitva_megtekintes'] = $row->kiszallitva_megtekintes ;
            	 $jog['kiszallitva_szerkesztes'] = $row->kiszallitva_szerkesztes ;
            	 $jog['elutasitva_megtekintes'] = $row->elutasitva_megtekintes ;
            	 $jog['elutasitva_szerkesztes'] = $row-> elutasitva_szerkesztes ;
                }
            }
            return $jog;
        }      
    }
    
    function listDolgozok(){
             //var_dump($links);
             $list= array();
             
             $query = $this->db->get('dolgozok');
                         
             if ($query->num_rows() !== 0 ){
                 foreach($query->result() as $row){
                     $list['id'][] = $row->id;
                     $list['username'][] = $row->username;
                     $list['teljes_nev'][] = $row->teljes_nev;
                     if($row->banned == 0)
                        $list['engedelyezve'][] = 'engedélyezve';
                     else
                        $list['engedelyezve'][] = 'kitiltva';
                     $list['priv'][] = $row->priv;
                     $list['created'][] = $row->created;
                     $list['last_login'][] = $row->last_login;
                 }
                 
                return $list;
             }
             else{
                var_dump("hiba a lekérdezésben");
             }
        }
        
    
        
        
    

}

?>

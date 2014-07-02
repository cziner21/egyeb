<?php
class m_dolgozok extends CI_Model
{

    function getDolgozoData($userId)
    {
        $dolgozo = array();
        if ($userId != null) {
            $query = $this->db->get_where('user_profiles', array('id' => $userId));
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
}

?>

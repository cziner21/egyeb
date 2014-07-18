<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Projektek extends CI_Controller
{
    function __construct(){
        parent::__construct();
        //$this->output->enable_profiler(TRUE);
		$this->load->helper('url');
		$this->load->library(array('tank_auth','form_validation'));
        $this->load->model('/system/m_header');
        $this->load->model('/system/m_dolgozok');
        $this->load->model('/system/projektek/m_arajanlat');
        $this->load->model('/system/projektek/m_futoProjektek');
        $this->load->model('/system/projektek/m_munka');
        define('SITETITLE','Normatool Kft.');
    }
    
    /**
     * Státusz kódok jelentése:
     * 1 - gyártás alatt
     * 2 - ellenőrzés alatt
     * 3 - ellenőrizve
     * 4 - kiszállítás alatt
     * 5 - kiszállítva
     * 6 - elutasítva
     */
    
    public function index(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Árajánlatok';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['arajanlatok_megtekintes'] == 1){
             $data['arajanlatok'] = $this->m_arajanlat->listArajanlatok();
			 $this->load->view('/system/body/admin/projektek/v_admin_arajanlatok', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function futoProjektek(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Futó projektek';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['futoprojektek_megtekintes'] == 1){
             $data['munkak'] = $this->m_futoProjektek->listMunkak();
			 $this->load->view('/system/body/admin/projektek/v_admin_futoProjektek', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
			
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function ellenorzes(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Ellenörzés';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
			$this->load->view('/system/body/admin/projektek/v_admin_ellenorzes', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function kiszallitas(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Kiszállítás';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
			$this->load->view('/system/body/admin/projektek/v_admin_kiszallitas', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function kiszallitva(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Kiszállítva';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
			$this->load->view('/system/body/admin/projektek/v_admin_kiszallitva', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function elutasitva(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Elutasítva';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
			$this->load->view('/system/body/admin/projektek/v_admin_elutasitva', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function addArajanlat(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} 
        else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Projektek -> Árajánlatok';
            
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['arajanlatok_szerkesztes'] == 1){                    
                    $this->load->view('/system/header/admin/v_admin_header', $data);
                    $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
                    //$data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
                    //if($data['jogok']['arajanlatok_szerkesztes'] == 1){
                     //$data['arajanlatok'] = $this->m_arajanlat->listArajanlatok();
        			 $this->load->view('/system/body/admin/projektek/v_admin_addArajanlat', $data);
                     $this->load->view('/system/footer/admin/v_admin_footer');
                /*}
                else{
                    var_dump($_POST);    
                    $data = $_POST;
                    $data['statusz'] = "készítés_alatt";
                    $this->m_arajanlat->addArajanlat($data);
                    redirect('projektek');
                }*/
            
            }
            else{
                $this->load->view('/system/header/admin/v_admin_header', $data);
                $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
                $this->load->view('/system/footer/admin/v_admin_footer');
            }
		}
    }
    
    function insertArajanlat(){
    
                    $data = $_POST;
                    $data['statusz'] = "készítés_alatt";
                    $this->m_arajanlat->addArajanlat($data);
                    redirect('projektek');
    }
    
    ///TODO: Ezt kidolgozni, vázlatosan kb így kéne működnie
    function editArajanlat($id){
        
        $data = $_POST;
        $this->m_arajanlat->editArajanlat($id,$data);        
        
        if($_POST['statusz'] == 'elfogadva'){
            $data['id'] = $id;
            $this->generateMunka($data);
        }
    }
    
    function generateMunka($data){
        var_dump($data);
        $munka['projekt_nev'] = $data['projekt_nev'];
        $munka['megrendeles_datuma'] = $data['ajanlatkeres_datuma'];
        $munka['hatarido'] = $data['hatarido'];
        $munka['statusz'] = 1;
        $munka['arajanlat_id'] = $data['id'];
        $this->m_futoProjektek->addMunka($munka);
        redirect('projektek/futoProjektek');	
    }
    
    function arajanlatInfo($id){
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
        $data['arajanlat_adatai'] = $this->m_arajanlat->getArajanlatData($id);        
        $data['main_title'] = SITETITLE;
        $data['site_title'] = SITETITLE .' :: Projektek -> Árajánlat';
        $this->load->view('/system/header/admin/v_admin_header', $data);
        $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
        $this->load->view('/system/body/admin/projektek/arajanlat/v_arajanlatInfo', $data);
        $this->load->view('/system/footer/admin/v_admin_footer');
    }
    
    function termekHozzaadasa(){
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
        //$data['arajanlat_adatai'] = $this->m_arajanlat->getArajanlatData($id);        
        $data['main_title'] = SITETITLE;
        $data['site_title'] = SITETITLE .' :: Projektek -> Árajánlat';
        $this->load->view('/system/header/admin/v_admin_header', $data);
        $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);
        $this->load->view('/system/body/admin/projektek/termek/v_addTermek', $data);
        $this->load->view('/system/footer/admin/v_admin_footer');
    }
    
    function addTermek(){
        if($_POST['termek_nev'] != "" && $_POST['mennyiseg'] != ""){
        $termek['termek_nev'] = $_POST['termek_nev'];
        $termek['mennyiseg'] = $_POST['mennyiseg'];
        $this->m_arajanlat->addTermek($termek);
        }
        
        redirect('projektek');
    }
    
    
    
    
    
    /**
     * Még nem jó, a visszaadott értéket nem sikerült rendesen feldolgozni jquery oldalon
     */
    function searchMegrendelo(){
        //var_dump("search");
        $newData = $_POST['tomb'];
        $sk = htmlspecialchars(stripslashes($newData['0']));
        $this->load->model('/system/vezerlopult/m_megrendelo');
        
        
        $msg = $this->m_megrendelo->searchMegrendelo($sk);
        echo json_encode($msg);
    }
    
    function datumos(){
        /*$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Dátum';
        $this->load->view('/system/header/admin/v_admin_header', $data);
        $this->load->view('/system/body/admin/projektek/v_projektek_menu',$data);*/
        $this->load->view('datumos');
        //$this->load->view('/system/footer/admin/v_admin_footer');
    }
    
    
}

?>
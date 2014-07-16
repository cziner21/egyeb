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
		} else {
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
    //print_r("itt vagyok");
                    $data = $_POST;
                    $data['statusz'] = "készítés_alatt";
                    $this->m_arajanlat->addArajanlat($data);
                    redirect('projektek');
    }
    
    function generateMunka(){
        $munka['projekt_nev'] = "köszörűfej";
        $munka['megrendeles_datuma'] = '2012-03-06 17:33:07';
        $munka['hatarido'] = '2012-03-08 11:33:07';
        $munka['statusz'] = 2;
        $munka['arajanlat_id'] = 2;
        $this->m_futoProjektek->addMunka($munka);
        redirect('projektek/futoProjektek');		
    }
    
    function searchMegrendelo(){
        //var_dump("search");
        $newData = $_POST['tomb'];
        $sk = htmlspecialchars(stripslashes($newData['0']));
        $this->load->model('/system/vezerlopult/m_megrendelo');
        
        
        $msg = $this->m_megrendelo->searchMegrendelo($sk);
        echo json_encode($msg);
    }
    
    
}

?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class vezerloPult extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        //$this->output->enable_profiler(TRUE);
		$this->load->helper('url');
		$this->load->library('tank_auth');
        $this->load->model('/system/m_header');
        $this->load->model('/system/m_dolgozok');
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
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Hozzáférések';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['hozzaferesek_megtekintes'] == 1){
             $data['dolgozok'] = $this->m_dolgozok->listDolgozok();
			 $this->load->view('/system/body/admin/vezerlopult/v_admin_hozzaferesek', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function addDolgozo(){
        $data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
        $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
        $data['main_title'] = SITETITLE;
        $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Hozzáférések';
        $this->load->view('/system/header/admin/v_admin_header', $data);
        $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
        $this->load->view('/system/body/admin/vezerlopult/hozzaferesek/v_admin_addDolgozo');
        $this->load->view('/system/footer/admin/v_admin_footer');
    }
    
    function dolgozoAdatlap($id){
        //$data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
        $data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Hozzáférések';
            $this->load->view('/system/header/admin/v_admin_header', $data);
        $this->load->view('/system/body/admin/vezerlopult/hozzaferesek/v_admin_dolgozoInfo');
        $this->load->view('/system/footer/admin/v_admin_footer');
    }
    
    function megrendelok(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Megrendelők';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['megrendelok_megtekintes'] == 1){
                $this->load->view('/system/body/admin/vezerlopult/v_admin_megrendelok', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function muveletek(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Műveletek';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['muveletek_megtekintes'] == 1){
			     $this->load->view('/system/body/admin/vezerlopult/v_admin_muveletek', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function gepieroforrasok(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Gépi erőforrások';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['gepieroforrasok_megtekintes'] == 1){
			     $this->load->view('/system/body/admin/vezerlopult/v_admin_gepieroforrasok', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function anyagok(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Anyagok';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['anyagok_megtekintes'] == 1){
			     $this->load->view('/system/body/admin/vezerlopult/v_admin_anyagok', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function valtozoKoltsegek(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Változó költségek';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['valtozokoltsegek_megtekintes'] == 1){
			     $this->load->view('/system/body/admin/vezerlopult/v_admin_valtozoKoltsegek', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
    function egyebBeallitasok(){
        if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Vezérlőpult -> Egyéb beállítások';
            $this->load->view('/system/header/admin/v_admin_header', $data);
            $this->load->view('/system/body/admin/vezerlopult/v_vezerlopult_menu',$data);
            $data['jogok'] = $this->m_dolgozok->dolgozoInfo($data['user_id']);
            if($data['jogok']['egyebbeallitasok_megtekintes'] == 1){
			     $this->load->view('/system/body/admin/vezerlopult/v_admin_egyebBeallitasok', $data);
            }
            else{
                $data['fejlec'] = 'Hiba!';
                $data['uzenet'] = 'Nincs jogosultsága az adott oldal megtekintéséhez!';
                $this->load->view('/system/body/dolgozo/vezerlopult/v_dolgozo_nincsJog', $data);
            }
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
 }
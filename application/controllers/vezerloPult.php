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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_hozzaferesek', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_megrendelok', $data);
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_muveletek', $data);
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_gepieroforrasok', $data);
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_anyagok', $data);
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_valtozoKoltsegek', $data);
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
			$this->load->view('/system/body/admin/vezerlopult/v_admin_egyebBeallitasok', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
    
 }
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Projektek extends CI_Controller
{
    function __construct(){
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
            $data['site_title'] = SITETITLE .' :: Projektek -> Árajánlatok';
            $this->load->view('/system/header/admin/v_admin_header', $data);
			$this->load->view('/system/body/admin/projektek/v_admin_arajanlatok', $data);
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
			$this->load->view('/system/body/admin/projektek/v_admin_futoProjektek', $data);
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
			$this->load->view('/system/body/admin/projektek/v_admin_elutasitva', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
    }
}

?>
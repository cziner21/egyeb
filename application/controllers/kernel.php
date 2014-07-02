<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kernel extends CI_Controller
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

	function index()
	{  	
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
            $data['dolgozo_adatai'] = $this->m_dolgozok->getDolgozoData($data['user_id']);
            $data['main_title'] = SITETITLE;
            $data['site_title'] = SITETITLE .' :: Főoldal';
            $this->load->view('/system/header/admin/v_admin_header', $data);
			$this->load->view('/system/body/admin/v_admin_main_body', $data);
            $this->load->view('/system/footer/admin/v_admin_footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
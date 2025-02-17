<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eddy extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 

		
	public function view($page = 'home') {
//		include 'test.php';
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		} else {

		$data['title'] = ucfirst($page);
		// Capitalize the first letter

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/foot');
		}	
	}
}

 
//* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
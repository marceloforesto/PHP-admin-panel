<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	
	public function index()
	{
		$data = array();
		$this->load->view('dashboard/html_header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/html_footer');
		$this->load->view('dashboard/home');
	}

	public function update_title($id) {
		$data = $this->input->post('title');
		$this->load->model('dashboard_model');
		$this->dashboard_model->update_title($id, $data);
		$this->index();
	}	

	public function update_text($id) {
		$data = $this->input->post('text');
		$this->load->model('dashboard_model');
		$this->dashboard_model->update_text($id, $data);
		$this->index();
	}	

	public function update_image($id) {
		$url = $this->do_upload();
		$this->load->model('dashboard_model');
		$this->dashboard_model->update_image($id, $url);
		$this->index();
	}	

	public function do_upload() {
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "./assets/uploads/".uniqid(rand()).'.'.$type;
		if (in_array($type, array("jpg", "jpeg", "gif", "png")))
			if (is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if (move_uploaded_file($_FILES["pic"]["tmp_name"], $url))
					return $url;
		return "";
	}
}

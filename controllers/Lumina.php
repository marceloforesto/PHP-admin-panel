<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lumina extends CI_Controller {

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
		$this->load->model('lumina_model');
		$data['query'] =  $this->lumina_model->get_title();
		$data['query2'] =  $this->lumina_model->get_image();
		$data['query3'] =  $this->lumina_model->get_text();
		$this->load->view('lumina/lumina', $data);
	}

	public function send_email($email_to) {
		$this->load->library('email');  
		$config = array();  
		$config['protocol'] = 'smtp';  
		$config['smtp_host'] = 'ssl://smtp.gmail.com';  
		$config['smtp_user'] = '';  
		$config['smtp_pass'] = '';  
		$config['smtp_port'] = 465;  
		$this->email->initialize($config);  
		$this->email->set_newline("\r\n");  

		$phone = $this->input->post('phone');
		$email_from = $this->input->post('email');
		$name = $this->input->post('name');
		$text = $this->input->post('text');

	    $this->email->from($email_from, $name);
	    $this->email->to($email_to);
	    $this->email->subject('Lumina site contact');
	    $this->email->message($text);
        $this->email->send();
	}    
}

<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if (!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$header_data['title'] = $data['title'];
		$this->load->view('templates/header', $header_data);
		$this->load->view('pages/'.$page, $data);

		if ($page != 'home') {
			$this->load->view('templates/footer');
		}
		
	}
}

<?php

class Logincont extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model("Loginmod");
    }

	/*Formu ekrana basacak olan kod satırı burası*/
	public function index()
	{
		$this->load->view("login");
	}

	public function kayit_list()
	{
		$items = $this->Loginmod->get_all();

		$viewData = array(
			"items"		=> $items
		);

		$this->load->view("kayit_list", $viewData);
	}


	/*Burada kayıt işlemi gerçekleştirilecek */
	public function insert()
	{
		$data = array(
			"name" 		=> $this->input->post("name"),
			"surname" 	=> $this->input->post("surname"),
			"email" 	=> $this->input->post("email"),
			"sifre" 	=> $this->input->post("sifre"),
			"createdAt" => date("Y-m-d H:i:s")
		);

		$insert = $this->Loginmod->insert($data);

		if($insert){
			redirect("Logincont/kayit_list");
		} else{
			redirect("Logincont");
		}
	}
}

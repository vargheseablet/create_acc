<?php
class Bank extends CI_Controller
{
	public function login()
	{
		$this->load->view('bank/login');  
	}

	public function error()
	{
		$this->load->view('bank/error');  
	}

	public function authenticate()
	{
		$n1= $_POST['email'];
    	$n2= $_POST['psw'];

    	$user_info= array('email' => $n1, 'password' => $n2
		);
		$this->load->model('bank_model');

		$db_pass= $this->bank_model->verify_email($user_info);

		if ($db_pass == 1) {
			$this->load->view('bank/welcome');
		}

		else{
			$this->load->view('bank/error');
		}
	}

	public function create_user()
	{
		$this->load->view('bank/create_acc');
	}
	public function insert_db()
	{
		$b1 = $_POST['uname'];
		$b2 = $_POST['email'];
		$b3 = $_POST['mob_no'];
		$b4 = $_POST['psw'];

		$create_info = array('user_name' => $b1, 'email' => $b2, 'mob_no' => $b3, 'password' => $b4);
		$this->load->model('bank_model');
		$db_stat = $this->bank_model->insert_into_db($create_info);

		if ($db_stat == 1) {
			$this->load->view('bank/login');  
		}
		else{
			echo "Database error.Please Sign up again.";
		}
	}
}


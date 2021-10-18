<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{

    public function index()
    {
        if (@$_POST['email']) {
            $this->auth_login();
        } else {
            $this->load->view('pages/login');
        }
    }

    private function auth_login()
    {
        $dataEmail = htmlspecialchars($this->input->post('email', true));
        $dataEmail = str_replace(array("#", "'", ";", "?"), '', $dataEmail);
        $dataPassword = htmlspecialchars($this->input->post('password', true));
        $query = $this->db->query("SELECT * FROM user WHERE email='$dataEmail' ");
        $row = $query->row();
        if ($row == null) {
            redirect(base_url() . "dash?verify=failed-to-verify-account");
        }
        $email = $row->email;
        $password = $row->password;
        if (password_verify($dataPassword, $password)) {
            $_SESSION['email'] = $email;
            redirect(base_url());
        } else {
            redirect(base_url() . "dash?verify=failed-to-verify-account");
        }
    }

    public function logout()
    {
        session_destroy();         
        redirect(base_url());
    }

    public function inputBlog()
	{	
        $this->checkUser();
		$data = [
			"bg" 		=> $_POST['bg'],
			"secbg"		=> $_POST['secbg'],
            "title"	=> $_POST['title'],
            "description"	=> $_POST['description'],
			"category"	=> $_POST['category'],
            "date" => date('Y-m-d'),
		];

		if ($this->db->insert('blog', $data)) {
			$re = "?response=success-update-data";
		} else {
			$re = "?response=failed-update-data";
		};
		redirect(base_url() . $re);
	}
    
    public function deleteBlog($title){
        $this->checkUser();
        $id = join(' ', explode('-', $title));        
        $query = $this->db->query("DELETE from blog where title='$id'");
        if ($query) {
			$re = "?response=success-update-data";
		} else {
			$re = "?response=failed-update-data";
		};
		redirect(base_url() . $re);
    }

    public function updateBlog($title)
	{	
        $this->checkUser();
        $id = join(' ', explode('-', $title));        
		$data = [
			"bg" 		=> $_POST['bg'],
			"secbg"		=> $_POST['secbg'],
            "title"	=> $_POST['title'],
            "description"	=> $_POST['description'],
			"category"	=> $_POST['category'],            
		];

        $this->db->where('title', $id);
		if ($this->db->update('blog', $data)) {
			$re = "?response=success-update-data";
		} else {
			$re = "?response=failed-update-data";
		};
		redirect(base_url("blog/$title") . $re);
	}

    public function updateUser()
	{
        $this->checkUser();
		if ($_POST['password'] != null) {
			$password =  password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);
			$data = [
				"email" 		=> $_POST['email'],				
				"password"	=> $password,
			];
		} else {
			$data = [
				"email" 		=> $_POST['email'],				
			];
		}

		$this->db->where('id', 1);
		if ($this->db->update('user', $data)) {
			session_destroy();
            redirect(base_url('dash'));
		} else {
			$re = "?response=failed-update-data";
		};
		redirect(base_url() . $re);
	}

    private function checkUser(){
        if(!$_SESSION['email']){            
            $this->logout();
        }     
    }
}

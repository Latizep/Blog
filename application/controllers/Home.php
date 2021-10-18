<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$search= @$_GET['search'];
		if($search == null){
			$this->load->view('pages/home',$this->getBlog("all"));
		}else{
			$this->load->view('pages/home',$this->getBlog($search));		
		}		
	}

	private function getBlog($title)
	{	
		$id = join(' ', explode('-', $title));
        $query1 = $this->db->query("SELECT category FROM `blog` GROUP BY category");
        if($title=="all"){
            $query = $this->db->query("SELECT blog.* , (SELECT COUNT(views.title) FROM views WHERE views.title = blog.title) as totalviews FROM `blog`");		
			$search = "";
        }else{
            $query = $this->db->query("SELECT blog.* , (SELECT COUNT(views.title) FROM views WHERE views.title = blog.title) as totalviews FROM `blog` WHERE blog.title LIKE '%$id%'");		
			$search = ' - showing "'.$id.'"';
        }	
		$total_blog = $query->num_rows();
		$data = array(
			'total_blog' => $total_blog,			
			'blog' => $query->result_array(),
            'category' => $query1->result_array(),
			'search' => $search
		);
		return $data;
	}
}

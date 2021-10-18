<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index(){
        redirect(base_url());
    }

	public function title($title)
	{
        $id = join(' ', explode('-', $title));
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM views WHERE ip='$ip' AND title='$id'AND date='$date'");
        $data = $query->row();
        $dataInsert = [            
            "ip"      => $ip,
            "title"     => $id,
            "date"     => $date,
        ];
        if (!$data) {
            $this->db->insert('views', $dataInsert);
        }        
		$this->load->view('pages/detail',$this->getBlog($id));
	}

	private function getBlog($id)
	{	
        $query1 = $this->db->query("SELECT category FROM `blog` GROUP BY category");
        if($id=="all"){
            $query = $this->db->query("SELECT blog.* , (SELECT COUNT(views.title) FROM views WHERE views.title = blog.title) as totalviews FROM `blog`");		
        }else{
            $query = $this->db->query("SELECT blog.* , (SELECT COUNT(views.title) FROM views WHERE views.title = blog.title) as totalviews FROM `blog` WHERE blog.title='$id'");		
        }	
		$total_blog = $query->num_rows();
		$data = array(
			'total_blog' => $total_blog,			
			'blog' => $query->row(),
            'category' => $query1->result_array()
		);
		return $data;
	}
}

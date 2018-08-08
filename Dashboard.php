<?php
	class Dashboard extends CI_Controller
	{
		public function __construct()
        {   
            parent::__construct();
            $this->load->helper(array('form', 'url'));    
        }  
		public function index()
		{
			if($this->session->userdata('user_id'))
			{
				return redirect('dashboard');
			}	
				$this->load->model('Queries');
				
				
				$result=$this->Queries->getAllUsers();
				$this->load->view('Dashboard',['result'=>$result]);
			
		}
	}
?>
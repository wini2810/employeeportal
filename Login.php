<?php
	class Login extends CI_Controller
	{
		public function __construct()
        {   
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('Form_validation','database');
        }  
		public function index()
		{
			if($this->session->userdata('user_id'))
			{
				return redirect('dashboard');
			}
			$this->load->view('login'); 
			
			
		}
		public function user_login()
		{
			
            
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">');
                if ($this->form_validation->run())
                {
                    $email=$this->input->post('email');
					$password=$this->input->post('password');
					#$this->load->model('Queries');
					#$user_id=$this->Queries->login_user($email,$password); 
					if($email=='ashnem@gmail.com' && $password=='nemade')
					{
						$this->session->set_userdata(['user_id'=>$user_id]);
						return redirect('dashboard');
					}
					else
					{
						$this->session->set_flashdata('login_response','Invalid Username/Password');
						return redirect('login');
					}
                }
                else
                {
                        $this->load->view('login');
                }
		}
		public function logout()
		{
			$this->session->unset_userdata('user_id');
			$this->load->view('login');
		}
	}
?>
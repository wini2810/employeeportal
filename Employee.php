<?php
	class Employee extends CI_Controller
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
		}
        public function createEmployee()
        {
        	$this->load->view('createEmployee'); 
        }
        public function insertEmployee()
        {
        	$this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('designation', 'Designation', 'required');
             $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('location', 'Location', 'required');
        	$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[12]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[emp_details.email]');
            $this->form_validation->set_error_delimiters('<div class="text-danger">');
                if ($this->form_validation->run())
                {
                    $data=$this->input->post();
                    $this->load->model('Queries');
                    if($this->Queries->addEmployee($data))
                    {
                    	$this->session->set_flashdata('employee_add','Employee Added Successfully');
                    }
                    else
                    {
                    	$this->session->set_flashdata('employee_add','Failed to add employee');
                    }
                    return redirect('dashboard');
				}
                else
                {
                        $this->load->view('createEmployee');
                }
        }
        public function employeeList()
        {
        	$this->load->view('employeeList');

        }
        public function deleteEmployee()
        {
        
        	$this->load->model('Queries');
        	foreach($_POST['user_id'] as $userid)
        	{
        		$this->Queries->deleteEmp($userid);
        	}
        	return redirect('dashboard');
        }
        public function employeeAttendance()
        {
        	$this->load->view('employeeAttendance');
        	
   		}
   		public function addEmployeeAttendance()
   		{

   					$data=$this->input->post();
            		$this->load->model('Queries');
            		if($this->Queries->addAttendance($data))
            		{
                		$this->session->set_flashdata('attendance','Attendance Updated Successfully');
                		return redirect('dashboard');
            		}
            		else
            		{
                		$this->session->set_flashdata('attendance','Fail to update Attendance');
                		return redirect('employeeAttendance');	
            		}
            		return redirect('dashboard');
        }
    }

?>
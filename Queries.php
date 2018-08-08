<?php
	class Queries extends CI_Model
	{
		

		public function login_user($email,$password)
		{
			$query=$this->db->where(['email'=>$email,'password'=>$password])->get('emp_details');
			if($query->num_rows() > 0)
			{
				return $query->row()->user_id;
			}
		}

		public function addEmployee($data)
		{
			return $this->db->insert('emp_details',$data);
		}
		public function getAllUsers()
		{
			$this->db->select(['emp_details.user_id','emp_details.firstname','emp_details.lastname','emp_details.designation','emp_details.department','emp_details.location','emp_details.email']);
			$this->db->from('emp_details');
			$query=$this->db->get();
			return $query->result();

		}
		
		public function deleteEmp($userid)
		{
			$this->db->delete('emp_details',['user_id'=>$userid]);
		}
		public function addAttendance()
		{
			$stdid=$this->input->post('emid');
      			$date=date("d-m-Y");
      			$time=date("H:s:i A");
      			$tm=count($stdid);
      			for($i=0;$i<$tm;$i++)
      			{
        			$at=$i+1;
        			$atn=$_POST[$at];

        			$attr=array(
          			"emp_id"=>$stdid[$i],
          			"emp_attendance"=>$atn,
          			"emp_time"=>$time,
          			"emp_date"=>$date);

        		 $query=$this->db->insert('attendance',$attr);
				}
				return $query;	

	}
}
?>
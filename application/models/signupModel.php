<?php
class signupModel extends CI_Model
{

	public function insertdata($data)
	{
		return $this->db->insert('user',$data);
	}
	public function checklogin($user,$pass)
	{
		$this->db->where('email', $user);  
        $this->db->where("pass",$pass);		   
        $query = $this->db->get('user');  
         if($query->num_rows() > 0) 
           {  
           	return true;  
           }  else {   return false;   }  
	}
	public function queryDb(){
      $preparedData=array('name1'=>'as');
		 if (!$this->db->insert( 'user1', $preparedData)) {
        $error = $this->db->error();
        throw new Exception('model_name->record: ' . $error['code'] . ' ' . $error['message']);
    }
    return TRUE; 

		
	}
}
?>
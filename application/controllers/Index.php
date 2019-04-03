<?php
class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('signupModel');

	}
	public function index()
	{
		$this->load->view('index');

	}
	public function insert()
	{
		
		$user=array("name"=>$_POST['fullname'],"email"=>$_POST['email'],"pass"=>$_POST['pass'],"cnfpass"=>$_POST['passcnf'],);
		$userdata=$this->signupModel->insertdata($user);
		//echo "success";
		
	}
	public function login()
	{
		$data=$_POST;
		if ($data['user']=='' && $data['pass']){

		}
		else
		{

		$user=$data['user'];
		$pass=$data['pass'];

		$checkLogin=$this->signupModel->checklogin($user,$pass);
		
	    }
	}
}
?>
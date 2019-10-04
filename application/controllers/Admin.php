<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		 parent::__construct();
		 $this->load->model('AdminModel');
		 $this->load->helper(array('form','url','file','download'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('backend/login');
	}
	public function dashboard()
	{
		if($this->session->userdata('admin_email'))
		{
			$data['donors']=$this->AdminModel->countDonors();
			$data['events']=$this->AdminModel->countEvents();
			$data['messages']=$this->AdminModel->countContact();
			$this->load->view('backend/header');
			$this->load->view('backend/dashboard',$data);
		//	$this->load->view('backend/footer');
		}
		else{
			redirect('Admin/');
		}
	}
	public function login()
	{
		$admin_email=$this->input->post('admin_email');
		$admin_password=$this->input->post('admin_password');
		$result=$this->AdminModel->loginAdmin($admin_email,$admin_password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array('admin_email'=>$row->admin_email);
			}
			
			$this->session->set_userdata($sessionArray);
			redirect('Admin/dashboard');
			//echo "success";
		}
		else
		{
			$this->session->set_flashdata('success','Email Or Password Incorect!! Try Again');
			redirect('Admin/');
		}
	}
	public function donors()
	{
		$data['res']=$this->AdminModel->getDonors();
		$this->load->view('backend/header');
		$this->load->view('backend/donors',$data);
	}
	public function messages()
	{
		$data['res']=$this->AdminModel->getMessages();
		$this->load->view('backend/header');
		$this->load->view('backend/messages',$data);
	}
	public function receipents()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/receipents');
	}
	public function events()
	{
		$result['data']=$this->AdminModel->getEvents();
		$this->load->view('backend/header');
		$this->load->view('backend/events',$result);
	}
	public function delEvent()
	{
		$id=$this->input->get('id');
		$res=$this->AdminModel->delEvent($id);
		if($res)
		{
			redirect('Admin/events');
		}
		else
		{
			echo "Error!";
		}
	}
	public function addEvents()
	{
		$event_name=$this->input->post('event_name');
		$event_description=$this->input->post('event_description');
		$event_date=$this->input->post('event_date');
		$event_location=$this->input->post('event_location');
		$userData=array(
			'event_name'=>$event_name,
			'event_description'=>$event_description,
			'event_date'=>$event_date,
			'event_location'=>$event_location,
		);
		$res=$this->AdminModel->addEvents($userData);
		if($res)
		{
			redirect('Admin/events');
		}
		else
		{
			echo "Error";
		}
	}
	public function updateEvents()
	{
		$event_id=$this->input->post('event_id');
		$event_name=$this->input->post('event_name');
		$event_description=$this->input->post('event_description');
		$event_date=$this->input->post('event_date');
		$event_location=$this->input->post('event_location');
		$userData=array(
			'event_name'=>$event_name,
			'event_description'=>$event_description,
			'event_date'=>$event_date,
			'event_location'=>$event_location,
		);
		$res=$this->AdminModel->updateEvents($userData,$event_id);
		if($res)
		{
			redirect('Admin/events');
		}
		else
		{
			echo "Error";
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('Admin/');
	}
	public function delete_donor()
	{
		$donor_id=$this->input->get('donor_id');
		$res=$this->AdminModel->delDonor($donor_id);
		if($res)
		{
			redirect('Admin/donors');
		}
		else
		{
			echo "failed";
		}
	}
	public function editEvent()
	{
		$id=$this->input->get('id');
		$data['res']=$this->AdminModel->getEventById($id);
		$this->load->view('backend/header');
		$this->load->view('backend/editevents',$data);
	}
	public function download($id){
        if(!empty($id)){
					//load download helper
					$this->load->helper('download');
					
					//get file info from database
					$fileInfo = $this->AdminModel->getRows(array('donor_id' => $id));
		
					//file path
				   $file = 'uploads/'.$fileInfo['donor_medicalReport'];
		   if(file_exists($file))
			{
					//download file from directory
					force_download($file, NULL);
			}
			else{
					echo '<script language="javascript">';
					echo 'alert("No File Found")';
					echo '</script>';
			}
        }
    }
}

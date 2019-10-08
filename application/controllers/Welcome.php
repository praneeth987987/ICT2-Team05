<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		 $this->load->model('MyModel');
		 $this->load->helper(array('form','url','file','email'));
		 $this->load->library('session');
		 $this->load->library('email');
	 }
	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/footer');
	}
	public function terms()
	{
	//	$this->load->view('frontend/header');
		$this->load->view('frontend/terms');
	//	$this->load->view('frontend/footer');
	}
	public function home()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/footer');
	}
	public function edit_profile()
	{
		$id=$this->session->userdata('donor_id');
		$data['res']=$this->MyModel->getDonorById($id);
		$this->load->view('frontend/header');
		$this->load->view('frontend/donor_profile_edit',$data);
		$this->load->view('frontend/footer');
	}
	public function edit_pic()
	{	$id=$this->session->userdata('donor_id');
		$data['res']=$this->MyModel->getDonorById($id);
		$this->load->view('frontend/header');
		$this->load->view('frontend/donor_profile_pic',$data);
		$this->load->view('frontend/footer');
	}
	public function update_profile_picture()
	{
		$id=$this->session->userdata('donor_id');
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		$this->upload->do_upload('pic');
		$picture=$_FILES['pic']['name'];
		$userData=array('picture'=>$picture);
		$res=$this->MyModel->updatePic($id,$userData);
		if($res)
		{
			redirect('Welcome/donor_profile');
		}
		else
		{
			echo "error in updation";
		}
	}
	public function update_profile()
	{
		$id=$this->session->userdata('donor_id');
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$contact_number=$this->input->post('contact_number');
		$address=$this->input->post('address');
		$age=$this->input->post('age');

		$userData=array(
			'donor_firstName'=>$first_name,
			'donor_lastName'=>$last_name,
			'donor_address'=>$address,
			'contact_number'=>$contact_number,
			'donor_age'=>$age,
		);
		$res=$this->MyModel->updateData($id,$userData);
		if($res)
		{
			redirect('Welcome/donor_profile');
		}
		else
		{
			echo "Update error!";
		}
	}
	public function about()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/about');
		$this->load->view('frontend/footer');
	}
	public function donor_registration()
	{	
		$this->load->view('frontend/header');
		$this->load->view('frontend/donor_registration');
		$this->load->view('frontend/footer');
	}
	public function addDonor()
	{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$age=$this->input->post('age');
		$address=$this->input->post('address');
		$gender=$this->input->post('gender');
		$blood_group=$this->input->post('blood_group');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$addiction=$this->input->post('addiction');
		$contact_no=$this->input->post('contact_no');
		
		// $this->upload->do_upload('picture');
		// $picture=$_FILES['picture']['name'];
		$picture=$this->upload_file();
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
		$medical_report=$_FILES['file']['name'];
		
		$userData=array('donor_firstName'=>$first_name,
		'donor_lastName'=>$last_name,
		'donor_address'=>$address,
		'donor_gender'=>$gender,
		'donor_age'=>$age,
		'donor_medicalReport'=>$medical_report,
		'donor_bloodGroup'=>$blood_group,
		'donor_addiction'=>$addiction,
		'contact_number'=>$contact_no,
		'email'=>$email,
		'picture'=>$picture['file_name'],
		'password'=>base64_encode($password));
		
		$res=$this->MyModel->insDonor($userData);
	
		if($res==true)
		{
			$this->send($first_name,$email);
			$this->session->set_flashdata('success','Thank you for becoming a donor, At findblood!');
			redirect('Welcome');
			
		}
		else{
			$this->session->set_flashdata('success','Registration Unsuccessful Try Again!');
			redirect('Welcome/donor_registration');
		}
	}
	function upload_file()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		$file=$_FILES['picture']['name'];
		
	  if($this->upload->do_upload('picture'))
	  {
		return $this->upload->data();
	  }
	  else
	  {
		return $this->upload->display_errors();
	  }
	}
	
	public function testing1()
	{
		echo 'test';
	}
	public function donor_profile()
	{
		$id=$this->session->userdata('donor_id');
		$data['res']=$this->MyModel->getDonorById($id);
		$this->load->view('frontend/header');
		$this->load->view('frontend/donor_profile',$data);
		$this->load->view('frontend/footer');
	}
	public function isLoginDonor()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$result=$this->MyModel->loginDonor($email,$password);
		if(count($result)>0)
		{
			foreach($result as $row)
			{
				$sessionArray=array(
				'donor_id'=>$row->donor_id,
				'donor_firstName'=>$row->donor_firstName,
				'donor_lastName'=>$row->donor_lastName,
				'donor_age'=>$row->donor_age,
				'donor_bloodGroup'=>$row->donor_bloodGroup,
				'donor_addiction'=>$row->donor_addiction,
				'donor_gender'=>$row->donor_gender,
				'donor_address'=>$row->donor_address,
				'contact_number'=>$row->contact_number,
				'email'=>$row->email,
				'picture'=>$row->picture
				);
			}
			$this->session->set_userdata($sessionArray);
			$this->session->set_flashdata('success','Login Successful');
			redirect('Welcome/donor_profile');
		}
		else
		{
			$this->session->set_flashdata('success','Email Or Password Incorect!! Try Again');
			redirect('Welcome');
		}
	}
	public function send($first_name,$email)
	{
		$title = 'Message From Findblood ';
		$subject = 'Thank You For Connecting with Findblood';
		
		$test="hello";
			$message = '
		
			<h3 align="center">New Donor Information </h3>
				<table border="1" width="100%" cellpadding="5">
					<tr>
						<td width="30%">Donor Name</td>
						<td width="70%">'.$first_name.'</td>
						
					</tr>
					<tr>
						<td width="30%">Message</td>
						<td width="70%">'.$subject.'</td>
					</tr>
				</table>
			';
		    $this->email->set_newline("\r\n");
		    $this->email->from('info@findblood.in', 'Findblood');
		    $this->email->to($email);
		    $this->email->subject($title);
	        $this->email->message($message);
	        $this->email->send();		
	}
	public function searchview()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/search result');
		$this->load->view('frontend/footer');
	}
	public function contact_us()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/contact');
		$this->load->view('frontend/footer');
	}
	public function addContact()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');
		$userData=array('name'=>$name,'email'=>$email,'contact'=>$contact,'subject'=>$subject,'message'=>$message);
		$res=$this->MyModel->insContact($userData);
		if($res)
		{
			$this->session->set_flashdata('success','Your Message sent successfully');
			redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata('success','Problem in sending message');
			redirect('Welcome');
		}
	}
	public function donors()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/donors');
		$this->load->view('frontend/footer');
	}
	public function events()
	{
		$res['data']=$this->MyModel->getEvents();
		$this->load->view('frontend/header');
		$this->load->view('frontend/events',$res);
		$this->load->view('frontend/footer');
	}
	public function getBG()
	{
		$bg=$this->input->post('blood_group');
		$res['data']=$this->MyModel->getDonorsByBG($bg);
		if($res>0)
		{
			$this->load->view('frontend/header');
			$this->load->view('frontend/donors',$res);
			$this->load->view('frontend/footer');
		}
		else if($res<0)
		{
			echo "Sorry!! No donor available for your blood group";
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('Welcome');
	}	
}
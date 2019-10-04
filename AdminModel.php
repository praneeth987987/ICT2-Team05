<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

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
		 $this->load->database();
	 }

	 public function loginAdmin($email,$password)
	 {
		 	$this->db->where('admin_email',$email);
			$this->db->where('admin_password',$password);
			$result=$this->db->get('admin');
			return $result->result();
	 }
	 public function getDonors()
	 {
		 $res=$this->db->get('donor');
		 return $res->result();
	 }
	 public function getMessages()
	 {
		 $res=$this->db->get('contact');
		 return $res->result();
	 }
	 public function getRows($params = array()){
		$this->db->select('*');
		$this->db->from('donor');
	  
		if(array_key_exists('donor_id',$params) && !empty($params['donor_id'])){
			$this->db->where('donor_id',$params['donor_id']);
			//get records
			$query = $this->db->get();
			$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
		} else{
		//set start and limit
		if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$this->db->limit($params['limit'],$params['start']);
		}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$this->db->limit($params['limit']);
		}
		
		//get records
		$query = $this->db->get();
		$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
		}
		//return fetched data
		return $result;
}
	public function delDonor($donor_id)
	{
		$this->db->where('donor_id',$donor_id);
		$this->db->delete('donor');
		return true;
	}
	public function addEvents($userData)
	{
		$this->db->insert('events',$userData);
		return true;
	}
	public function getEvents()
	{
		$result=$this->db->get('events');
		return $result->result();
	}
	public function delEvent($id)
	{
		$this->db->where('event_id',$id);
		$this->db->delete('events');
		return true;
	}
	public function getEventById($id)
	{
		$this->db->where('event_id',$id);
		$res=$this->db->get('events');
		return $res->result();
	}
	public function updateEvents($userData,$event_id)
	{
		$this->db->where('event_id',$event_id);
		$this->db->update('events',$userData);
		return true;
	}
	public function countDonors()
	{
		$res=$this->db->count_all('donor');
		return $res;
	}
	public function countContact()
	{
		$res=$this->db->count_all('contact');
		return $res;
	}
	public function countEvents()
	{
		$res=$this->db->count_all('events');
		return $res;
	}

}

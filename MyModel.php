<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class MyModel extends CI_Model{
	
public function __construct()
{
	$this->load->database();
	
}
public function insDonor($userData)
{
	$this->db->insert('donor',$userData);
	return true;
}
public function insContact($userData)
{
	$this->db->insert('contact',$userData);
	return true;
}
	public function loginDonor($email,$password)
{
	$this->db->where('email',$email);
	$this->db->where('password',base64_encode($password));
	$result=$this->db->get('donor');
	return $result->result();
}
	public function getDonorsByBG($bg)
	{
		$this->db->where('donor_bloodGroup',$bg);
		$result=$this->db->get('donor');
		return $result->result();
	}
	public function getEvents()
	{
		$res=$this->db->get('events');
		return $res->result();
	}

}
?>
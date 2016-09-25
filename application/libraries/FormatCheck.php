<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormatCheck {
	
	public function check_catagory($catagory)
	{
		return preg_match("/^([A-Z_]{5,6})$/", $catagory);
	}
	
	public function check_state($state)
	{
		return preg_match("/^(([A-Z]{2},?)|ALL)*$/", $state);
	}
	
	public function check_range($range)
	{
		return preg_match("/^-?[\d]{1,3}$/", $range);
	}
	
	public function check_hospital_id($hospital_id)
	{
		return preg_match("/^(([\d]{5}F?)|([\d]{6}))$/", $hospital_id);
	}
}
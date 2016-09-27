<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {
	
	public function query($catagory, $state, $range)
	{
		if ($this->formatcheck->check_catagory($catagory) == FALSE ||
			$this->formatcheck->check_state($state) == FALSE ||
			$this->formatcheck->check_range($range) == FALSE)
		{
			show_error("<a href=\"".$this->config->item('URL')."\">Back to the main page</a>", 500, "Please do not submit illegal parameters");
		}

		$state_array = explode(",", $state);
		$range *= 1;
		
		$this->db->select($catagory);
		$this->db->distinct();
		if ($state != "ALL" && count($state_array) > 0)
		{
			$this->db->where_in('state', $state_array);
		}
		$this->db->order_by($catagory, 'DESC');
		$query = $this->db->get('data');
		$rank_array = [];
		$rank_array_index = 0;
		foreach ($query->result() as $row)
		{
			$rank_array[$rank_array_index++] = $row->$catagory;
		}
		$rank_array = json_decode(json_encode($rank_array), true);
		$rank_counter = count($rank_array);
		
		$current_render_rank = "";
		$current_render_rank_array = [];
		$current_render_rank_index = 0;
		
		$range_exceed = "none";
		$range_exceed_hint = "";
		
		$this->db->select('hospital_name, state,'.$catagory.', provider_number');
		if ($state != "ALL" && count($state_array) > 0)
		{
			$this->db->where_in("state", $state_array);
		}

		if ($range != 0)
		{
			if ($range == -1)
			{
				$rank_array_payload = $rank_array;
				$rank = $range + 2;
			}
			else if ($range > $rank_counter)
			{
				$range_exceed = 'block';
				$range_exceed_hint = "The rank index has exceeded the maximum, so we present the last three items for you.";
				$rank_array_payload = [$rank_array[$rank_counter - 3], $rank_array[$rank_counter - 2], $rank_array[$rank_counter - 1]];
				$rank = $range;
			}
			else
			{
				$rank_array_payload = [$rank_array[$range - 1]];
				$rank = $range;
			}
		}
		else
		{
			$range_exceed = 'block';
			$range_exceed_hint = "You didn't specified the rank, so we present the top three items for you.";
			$rank_array_payload = [$rank_array[0], $rank_array[1], $rank_array[2]];
			$rank = 1;
		}
		$this->db->where_in($catagory, $rank_array_payload);
		$this->db->order_by($catagory, 'DESC');
		$this->db->order_by('hospital_name');
		$query = $this->db->get('data');
		$result_array = [];
		$result_array_index = 0;
		foreach ($query->result() as $row)
		{
			$row->catagory_value = $row->$catagory;
			$current_render_rank = $row->$catagory;
			if ($current_render_rank == $row->$catagory)
			{
				$current_render_rank_array[$current_render_rank] = isset($current_render_rank_array[$current_render_rank]) ? $current_render_rank_array[$current_render_rank] + 1 : 1;
			}
			
			$result_array[$result_array_index++] = $row;
		}
		$result_array = json_decode(json_encode($result_array), true);
		
		$this->load->view('result_head', ["item" => $this->util->convert_catagory($catagory), "range_exceed" => $range_exceed, "range_exceed_hint" => $range_exceed_hint]);
		$rank_flag = "";
		//Render results on page.
		foreach ($result_array as $data)
		{
			if ($rank_flag != $data["catagory_value"])
			{
				$rank_flag = $data["catagory_value"];
				$rank_changed = true;
			}
			if ($rank_changed)
			{
				$rank_grid = "<td rowspan=".$current_render_rank_array[$rank_flag].">".$rank."</td>";
				$rank++;
				$rank_changed = false;
			}
			else
			{
				$rank_grid = "";
			}
			$data["catagory_value"] = $data["catagory_value"] == 0 ? "Not Available" : $data["catagory_value"];
			$this->load->view('result', ["data" => $data, "rank_grid" => $rank_grid]);
		}
		$this->load->view('result_tail', ["mainpage" => $this->config->item('URL')]);
	}
	
	public function detail($hospital_id)
	{
		if ($this->formatcheck->check_hospital_id($hospital_id) == FALSE)
		{
			show_error("<a href=\"".$this->config->item('URL')."\">Back to the main page</a>", 500, "Please do not submit illegal parameters");
		}
		$query = $this->db->select('*')->where('provider_number', $hospital_id)->get('data');
		foreach ($query->result() as $row)
		{
			$row->HA_D_B = $this->util->convert_comparison($row->HA_D_B);
			$row->HA_R_B = $this->util->convert_comparison($row->HA_R_B);
			$row->HF_D_B = $this->util->convert_comparison($row->HF_D_B);
			$row->HF_R_B = $this->util->convert_comparison($row->HF_R_B);
			$row->P_D_B = $this->util->convert_comparison($row->P_D_B);
			$row->P_R_B = $this->util->convert_comparison($row->P_R_B);
			$this->load->view('hospital_detail', ["data" => $row]);
			return TRUE;
		}
		show_404();
	}
}

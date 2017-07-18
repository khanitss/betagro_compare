<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	public function get_newemployee_amount($dates){
		$con = array(
						'YEAR(work_list_date_start)' => $dates['year'],
						'MONTH(work_list_date_start)' => $dates['month'], );
		$con2 = array(
						'YEAR(work_list_date_end)' => $dates['year'],
						'MONTH(work_list_date_end)' => $dates['month'], );
		$obj_work = $this->db->select('work_type_id')
										->where('work_type_id','1')
										->where_not_in('work_list_status','4')
										->where($con)
										->get('work_list');
		$row_work = $obj_work->num_rows();

		$obj_finish = $this->db->select('work_type_id')
										->where('work_list_status','3')
										->where('work_type_id','1')
										->where($con2)
										->get('work_list');
		$row_finish = $obj_finish->num_rows();
		$array = array(
										'row_work' 		=> $row_work,
										'row_finish' 	=> $row_finish,
									);

		return $array;
	}
	public function get_transfer_amount($dates){
		$con = array(
						'YEAR(work_list_date_start)' => $dates['year'],
						'MONTH(work_list_date_start)' => $dates['month'], );
		$con2 = array(
						'YEAR(work_list_date_end)' => $dates['year'],
						'MONTH(work_list_date_end)' => $dates['month'], );
		$obj_work = $this->db->select('work_list_id')
										->where('work_type_id','2')
										->where_not_in('work_list_status','4')
										->where($con)
										->get('work_list');
		$row_work = $obj_work->num_rows();

		$obj_finish = $this->db->select('work_list_id')
										->where('work_list_status','3')
										->where('work_type_id','2')
										->where($con2)
										->get('work_list');
		$row_finish = $obj_finish->num_rows();
		$array = array(
										'row_work' 				=> $row_work,
										'row_finish' 			=> $row_finish
									);

		return $array;
	}
	public function get_adjust_amount($dates){
		$con = array(
						'YEAR(work_list_date_start)' => $dates['year'],
						'MONTH(work_list_date_start)' => $dates['month'], );
		$con2 = array(
						'YEAR(work_list_date_end)' => $dates['year'],
						'MONTH(work_list_date_end)' => $dates['month'], );
		$obj_work = $this->db->select('work_list_id')
										->where('work_type_id','3')
										->where_not_in('work_list_status','4')
										->where($con)
										->get('work_list');
		$row_work = $obj_work->num_rows();

		$obj_finish = $this->db->select('work_list_id')
										->where('work_list_status','3')
										->where('work_type_id','3')
										->where($con2)
										->get('work_list');
		$row_finish = $obj_finish->num_rows();
		$array = array(
										'row_work' 				=> $row_work,
										'row_finish' 			=> $row_finish
									);

		return $array;
	}
	public function get_resign_amount($dates){
		$con = array(
						'YEAR(work_list_date_start)' => $dates['year'],
						'MONTH(work_list_date_start)' => $dates['month'], );
		$con2 = array(
						'YEAR(work_list_date_end)' => $dates['year'],
						'MONTH(work_list_date_end)' => $dates['month'], );

		$obj_work = $this->db->select('work_list_id')
										->where('work_type_id','4')
										->where_not_in('work_list_status','4')
										->where($con)
										->get('work_list');
		$row_work = $obj_work->num_rows();

		$obj_finish = $this->db->select('work_list_id')
										->where('work_list_status','3')
										->where('work_type_id','4')
										->where($con2)
										->get('work_list');
		$row_finish = $obj_finish->num_rows();
		$array = array(
										'row_work' 				=> $row_work,
										'row_finish' 			=> $row_finish
									);

		return $array;
	}
	public function get_chart_newemployee()
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db
							->where('MONTH(work_list_date_start)',$month)
							->where('YEAR(work_list_date_start)',date('Y'))
							->where('work_type_id','1')
							->where_not_in('work_list_status','4')
							->get('work_list')
							->num_rows();
		}
		return $result;

	}
	public function get_chart_transfer()
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db
							->where('MONTH(work_list_date_start)',$month)
							->where('YEAR(work_list_date_start)',date('Y'))
							->where('work_type_id','2')
							->where_not_in('work_list_status','4')
							->get('work_list')
							->num_rows();
		}
		return $result;

	}
	public function get_chart_adjust()
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db
							->where('MONTH(work_list_date_start)',$month)
							->where('YEAR(work_list_date_start)',date('Y'))
							->where('work_type_id','3')
							->where_not_in('work_list_status','4')
							->get('work_list')
							->num_rows();
		}
		return $result;

	}
	public function get_chart_resign()
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db
							->where('MONTH(work_list_date_start)',$month)
							->where('YEAR(work_list_date_start)',date('Y'))
							->where('work_type_id','4')
							->where_not_in('work_list_status','4')
							->get('work_list')
							->num_rows();
		}
		return $result;

	}

	public function get_event_all($user_type_id)
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db->query('
							select DISTINCT work_list.*
							from work_list left join work_task on work_list.work_type_id = work_task.work_type_id
							where work_list.work_list_status != 4
								and MONTH(work_list.work_list_date_start) = '.$month.'
								and YEAR(work_list.work_list_date_start) = '.date('Y').'
							    and work_task.user_type_id = '.$user_type_id.'
						')->num_rows();
		}
		return $result;
	}

	public function get_event_completed($user_type_id)
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db->query('
							select DISTINCT work_list.*
							from work_list left join work_task on work_list.work_type_id = work_task.work_type_id
							where work_list.work_list_status = 3
								and MONTH(work_list.work_list_date_start) = '.$month.'
								and YEAR(work_list.work_list_date_start) = '.date('Y').'
							    and work_task.user_type_id = '.$user_type_id.'
						')->num_rows();
		}
		return $result;
	}

	public function get_event_remain($user_type_id)
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db->query('
							select DISTINCT work_list.*
							from work_list left join work_task on work_list.work_type_id = work_task.work_type_id
							where (work_list.work_list_status = 1
								or work_list.work_list_status = 2)
								and MONTH(work_list.work_list_date_start) = '.$month.'
								and YEAR(work_list.work_list_date_start) = '.date('Y').'
							    and work_task.user_type_id = '.$user_type_id.'
						')->num_rows();
		}
		return $result;
	}

	public function get_event_new($user_type_id)
	{
		for($month=1;$month<=12;$month++){
			$result[] = $this->db->distinct()
						->select('
									work_list.*
								')
						->where('work_list.work_list_status', 1)
						->where('MONTH(work_list.work_list_date_start)', $month)
						->where('YEAR(work_list.work_list_date_start)', date('Y'))
						->where('work_task.user_type_id', $user_type_id)
						->join('work_task', 'work_list.work_type_id = work_task.work_type_id', 'left')
						->join('work_detail', 'work_list.work_list_id = work_detail.work_list_id', 'left')
						->get('work_list')->num_rows();
		}
		return $result;
	}

	public function get_count_chart($dates, $user_type_id, $type_id)
	{
		$con = array(
						'YEAR(work_list_date_start)' => $dates['year'],
						'MONTH(work_list_date_start)' => $dates['month'], );

		$query1 = $this->db->distinct()
						->select('
									work_list.*
								')
						->where_in('work_list.work_list_status', array(1,2))
						->where('work_list.work_type_id', $type_id)
						->where($con)
						->where('work_task.user_type_id', $user_type_id)
						->join('work_task', 'work_list.work_type_id = work_task.work_type_id', 'left')
						->get('work_list')->num_rows();

		$query2 = $this->db->distinct()
						->select('
									work_list.*
								')
						->where('work_list.work_list_status', 1)
						->where('work_list.work_type_id', $type_id)
						->where($con)
						->where('work_task.user_type_id', $user_type_id)
						->join('work_task', 'work_list.work_type_id = work_task.work_type_id', 'left')
						->get('work_list')->num_rows();

		$query = array(
						'row_remain'	=> $query1,
						'row_new'		=> $query2
					);

		return $query;
	}
}

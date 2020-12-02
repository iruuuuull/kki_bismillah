<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

	/**
	 * @author Khaerul <Khaerulistafa@gmail.com>
	 */
	
	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [cleanData description]
	 * @param  [type] $str [description]
	 * @return [type]      [description]
	 */
	public function cleanData($str)
	{
		if (is_array($str)) {
			foreach ($str as $key => $value) {
				$cleaning[$key] = trim($this->db->escape($value)) ;
			}
		}
		else {
			$cleaning = trim($this->db->escape($str));
		}

		return $cleaning ;
	}

	/**
	 * [processAuth description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function processAuth($data)
	{
		$cleaningData = $this->cleanData($data);
		$processAuth = $this->db->get_where('tb_user', array('username' => $data['user'], 'password' => $data['pwd']));
		if (count($processAuth->result_array()) == 1) {
			
			return $processAuth->result_array();
		}
		else {
			
			return null ;
		}
	}

 	public function gettable($params , $table){


 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get($table);
 						  
 		$row = $query->row_array();

 		return $row;	
 	}

 	 public function getform($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_key_result', 'tb_key_result.indicator_id = tb_indicator.id')
 						  ->get('tb_indicator');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformpersonal($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_key_result_personal', 'tb_key_result_personal.indicator_id = tb_indicator_personal.id')
 						  ->get('tb_indicator_personal');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformcorporate($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get('tb_absense');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getformabsense($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->get('tb_corporate');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function MaxId($table){

 		$query = $this->db->select('MAX(id) as kodeterbesar')
 						  ->get($table);
 						  
 		$row = $query->row_array();

 		return $row;

 	}

 	public function getDataHasilManager($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_manager_detail', 'tb_hasil_form_manager_header.id = tb_hasil_form_manager_detail.id_form_header')
 						  ->get('tb_hasil_form_manager_header');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getDataHasilPersonal($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_personal_detail', 'tb_hasil_form_personal_header.id = tb_hasil_form_personal_detail.id_form_header')
 						  ->get('tb_hasil_form_personal_header');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getDataHasilAbsense($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_absense_detail', 'tb_hasil_form_absense_header.id = tb_hasil_form_absense_detail.id_form_header')
 						  ->get('tb_hasil_form_absense_header');
 						  
 		$row = $query->row_array();

 		return $row;	
 	}

 	public function getDataHasilCorporate($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_corporate_detail', 'tb_hasil_form_corporate_header.id = tb_hasil_form_corporate_detail.id_form_header')
 						  ->get('tb_hasil_form_corporate_header');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function getDataHasilOkr($params){

 		$query = $this->db->select('*')
 						  ->where($params)
 						  ->join('tb_hasil_form_okr_detail', 'tb_hasil_form_okr_header.id = tb_hasil_form_okr_detail.id_form_header')
 						  ->get('tb_hasil_form_okr_header');
 						  
 		$row = $query->result_array();

 		return $row;	
 	}

 	public function create_form_manager($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_manager_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'personal_persen' => $value['manager_persen'],
 					'personal_score' => $value['manager_score']
 			); 
 		}
 		$this->db->insert_batch('tb_hasil_form_manager_detail',$datadetail);

 	}

 	 public function create_form_personal($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_personal_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'personal_persen' => $value['manager_persen'],
 					'personal_score' => $value['manager_score']
 			); 
 		}
 		$this->db->insert_batch('tb_hasil_form_personal_detail',$datadetail);

 	}

 	public function create_form_absense($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_absense_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'absense_nilai_sendiri' => $value['absense_nilai_sendiri']
 			); 
 		}

 		$this->db->insert_batch('tb_hasil_form_absense_detail',$datadetail);

 	}


 	public function create_form_corporate($datadetail,$dataheader){


 		$this->db->insert('tb_hasil_form_corporate_header',$dataheader);

 		$data1 = array();
 		foreach ($datadetail as $key => $value) {
 			$data1[] = array(
 					'id_form_header' => $value['id_form_header'],
 					'corporate_nilai_sendiri' => $value['corporate_nilai_sendiri']
 			); 
 		}

 		$this->db->insert_batch('tb_hasil_form_corporate_detail',$datadetail);

 	}



 	public function create_form_okr($data_detail,$data_header)
	{		
		$this->db->insert('tb_hasil_form_okr_header',$data_header);

 		$this->db->insert_batch('tb_hasil_form_okr_detail',$data_detail);
			
	} 


 	public function getDataTable($table){
 		$query = $this->db->select('*')
 						->get($table);

 		$row = $query->result_array();
 		return $row;
 	}

 	public function getDataId($param='',$table, $like=''){
 		$this->db->select('*');
 		if($like != null){
 			$this->db->like('jabatan',$like);
 		}
 		if($param != null){
 		$this->db->where($param);	
 		}
 		$query = $this->db->get($table);
 						  
 		$row = $query->result_array();

 		return $row;	
 	}



	/**
	 * [processAuth description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function processOAuth($data)
	{
		$processOAuth = $this->db->get_where('user_pa', array('email' => $data['email']))->result_array();
		if (count($processOAuth) == 1) {
			foreach ($processOAuth as $key => $value) {
				$data['user'] = $value['username'];
				$data['pwd'] = $value['password'];
			}
			$processAuth = $this->processAuth($data);

			return $processAuth;
		}
		else {
			
			return null ;
		}
	}



}
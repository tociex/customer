<?php
class Customer_model extends CI_Model{

	function customer_list(){
		$hasil=$this->db->get('customer');
		return $hasil->result();
	}

	function save_customer(){
		$data = array(
				'nama' 	=> $this->input->post('nama'), 
				'jns_kelamin' 	=> $this->input->post('jns_kelamin'), 
				'tgl_lahir' => $this->input->post('tgl_lahir'), 
				'pekerjaan' => $this->input->post('pekerjaan'), 
				'provinsi' => $this->input->post('propinsi'), 
				'kota' => $this->input->post('kabupaten'), 
				'kecamatan' => $this->input->post('kecamatan'), 
				'desa' => $this->input->post('kelurahan'), 

			);
		$result=$this->db->insert('customer',$data);
		return $result;
	}

	function update_customer(){
		$cust_code=$this->input->post('cust_code');
		$nama=$this->input->post('nama');
		$jns_kelamin=$this->input->post('jns_kelamin');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$pekerjaan=$this->input->post('pekerjaan');
		$propinsi=$this->input->post('propinsi');
		$kabupaten=$this->input->post('kabupaten');
		$kecamatan=$this->input->post('kecamatan');
		$kelurahan=$this->input->post('kelurahan');

		$this->db->set('nama', $nama);
		$this->db->set('jns_kelamin', $jns_kelamin);
		$this->db->set('tgl_lahir', $tgl_lahir);
		$this->db->set('pekerjaan', $pekerjaan);
		$this->db->set('provinsi', $propinsi);
		$this->db->set('kota', $kabupaten);
		$this->db->set('kecamatan', $kecamatan);
		$this->db->set('desa', $kelurahan);
		$this->db->where('cust_code', $cust_code);
		$result=$this->db->update('customer');
		return $result;
	}

	function delete_customer(){
		$cust_code=$this->input->post('cust_code');
		$this->db->where('cust_code', $cust_code);
		$result=$this->db->delete('customer');
		return $result;
	}


	function customer_jk(){
		$hasil=$this->db->query("SELECT SUM( CASE WHEN jns_kelamin = 'PRIA' THEN 1 ELSE 0 END ) AS PRIA, SUM( CASE WHEN jns_kelamin = 'WANITA' THEN 1 ELSE 0 END ) AS WANITA from customer");
		return $hasil->result();
	}

	function customer_kota(){
		$hasil=$this->db->query("SELECT kota, COUNT(cust_code) jml FROM customer group by kota");
		return $hasil->result();
	}




	
	
}
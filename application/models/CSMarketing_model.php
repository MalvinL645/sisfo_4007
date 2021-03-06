<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSMarketing_model extends CI_Model {

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
	public function getBanner()
	{
		return json_decode($this->curl->simple_get(API_BASE_URL."/csmarketing/index_get/?param=get_banner"));
        // $query = $this->db->get('banner')->result_array();
        // return $query;
    }

    public function getAbout()
	{
		return json_decode($this->curl->simple_get(API_BASE_URL."/csmarketing/index_get/?param=get_about"));
        // $query = $this->db->get('about')->result_array();
        // return $query;
    }

    public function getArticle()
	{
		// return json_decode(file_get_contents(<link>)); diganti jadi dibawah
		return json_decode($this->curl->simple_get(API_BASE_URL."/csmarketing/index_get/?param=get_article"));
        // $query = $this->db->get('article')->result_array();
        // return $query;
    }

    public function update($id, $data, $table){
        $this->db->where('id', $id);
        $res = $this->db->update($table, $data);
        return $res;
    }

    public function insert($data){
        $res = $this->db->insert('article', $data);
        return $res;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $res = $this->db->delete('article');
        return $res;
    }
}

<?php

class admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
	//USER
    function search_users($username) {
        $get = $this->db->query("SELECT password,id_role
                               FROM users where username = '$username' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_user() {
        $get = $this->db->query("SELECT 
		  a.id_users,
		  a.username,
		  a.password,
		  a.id_role,
		  (SELECT 
			b.nama_role 
		  FROM
			role b 
		  WHERE a.id_role = b.id_role) AS nama_role 
		FROM
		  users a 
		ORDER BY id_users DESC ");
        return $get;
    }
	
	
	public function add_users_data($data) {
        $input = $this->db->insert('users', $data);
        return $input;
    }

    function update_users($data, $id_users) {
        $update = $this->db->update('users', $data, array('id_users' => $id_users));
		
        return $update;
    }
	
	 function users_delete($id) {
        $delete = $this->db->delete('users', array('id_users' => $id));
        return $delete;
    }
	
    function get_users($id_users) {
        $get = $this->db->query("SELECT *
                               FROM users a
                               WHERE a.id_users =$id_users");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	//MENU
	function tampil_menu() {
        $get = $this->db->query("SELECT 
			a.id_menu,
		  a.nama_menu,
		  a.link,
		  a.icon,
		  a.is_main_menu,
		  (SELECT 
			b.nama_menu 
		  FROM
			menu b 
		  WHERE b.id_menu = a.is_main_menu) AS menu_utamanya 
		FROM
		  menu a ");
        return $get;
    }
	
	
	public function add_menu_data($data) {
        $input = $this->db->insert('menu', $data);
        return $input;
    }

    function update_menu($data, $id_menu) {
        $update = $this->db->update('menu', $data, array('id_menu' => $id_menu));
		
        return $update;
    }
	
	 function menu_delete($id) {
        $delete = $this->db->delete('menu', array('id_menu' => $id));
        return $delete;
    }
	
    function get_menu($id_menu) {
        $get = $this->db->query("SELECT 
							  a.`id_menu`,
							  a.`nama_menu`,
							  a.`link`,
							  a.`icon`,
							  a.`is_main_menu`,
							  (SELECT 
								b.nama_menu 
							  FROM
								menu b 
							  WHERE b.id_menu = a.is_main_menu) AS nama_menu_utamanya 
							FROM
							  menu a 
							WHERE a.id_menu = $id_menu");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	// daily Activity
	
	function tampil_daily() {
        $get = $this->db->query("SELECT *
		FROM
		  daily_activity 
		ORDER BY id_daily_activity DESC ");
        return $get;
    }
	
	
	public function add_daily_activity_data($data) {
        $input = $this->db->insert('daily_activity', $data);
        return $input;
    }
	
	 function daily_activity_delete($id) {
        $delete = $this->db->delete('daily_activity', array('id_daily_activity' => $id));
        return $delete;
    }
	
	 function dapat_daily_activity($id_daily_activity) {
        $get = $this->db->query("SELECT *
                               FROM daily_activity a
                               WHERE a.id_daily_activity =$id_daily_activity");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function update_daily_activity($data, $id_daily_activity) {
        $update = $this->db->update('daily_activity', $data, array('id_daily_activity' => $id_daily_activity));
		
        return $update;
    }
    
	// warranty notice
	
	function tampil_warranty_notice() {
        $get = $this->db->query("SELECT *
		FROM
		  warranty_notice 
		ORDER BY id_warranty_notice DESC ");
        return $get;
    }
	
	
	public function add_warranty_notice_data($data) {
        $input = $this->db->insert('warranty_notice', $data);
        return $input;
    }
	
	 function warranty_notice_delete($id) {
        $delete = $this->db->delete('warranty_notice', array('id_warranty_notice' => $id));
        return $delete;
    }
	
	 function dapat_warranty_notice($id_warranty_notice) {
        $get = $this->db->query("SELECT *
                               FROM warranty_notice a
                               WHERE a.id_warranty_notice =$id_warranty_notice");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function update_warranty_notice($data, $id_warranty_notice) {
        $update = $this->db->update('warranty_notice', $data, array('id_warranty_notice' => $id_warranty_notice));
		
        return $update;
    }
	
	
	// GALLERY
	
	function tampil_gallery() {
        $get = $this->db->query("SELECT *
		FROM
		  gallery 
		ORDER BY id_gallery DESC ");
        return $get;
    }
	
	
	public function add_gallery_data($data) {
        $input = $this->db->insert('gallery', $data);
        return $input;
    }
	
	 function gallery_delete($id) {
        $delete = $this->db->delete('gallery', array('id_gallery' => $id));
        return $delete;
    }
	
	 function dapat_gallery($id_gallery) {
        $get = $this->db->query("SELECT *
                               FROM gallery a
                               WHERE a.id_gallery =$id_gallery");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function update_gallery($data, $id_gallery) {
        $update = $this->db->update('gallery', $data, array('id_gallery' => $id_gallery));
		
        return $update;
    }
    
	
}

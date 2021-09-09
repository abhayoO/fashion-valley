<?php
	class Category extends CI_Model {
		public function get_all_categories() {
			return $this->db->query("SELECT * FROM categories")->result_array();
		}

		public function get_category_id_by_slug($cat_slug) {
			return $this->db->query("SELECT * FROM categories WHERE category_slug=?",array($cat_slug))->result_array();
		}
	}








?>
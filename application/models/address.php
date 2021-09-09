<?php
	class Address extends CI_Model{
		public function get_addresses_by_user_id($id) {
			$query = "SELECT * FROM addresses WHERE user_id = ?";
			$value = array($id);
			return $this->db->query($query,$value)->result_array();
		}

		/*public function get_addresses_by_id($id) {
			$query = "SELECT * FROM addresses WHERE id = ?";
			$value = array($id);
			return $this->db->query($query,$value)->row_array();
		}*/

		public function add_address($address) {
			$query = "INSERT INTO addresses(name,mob_no,address,town,city,state,pin_code,user_id)
						VALUES (?,?,?,?,?,?,?,?)";
			$value = array($address['name'],$address['mob_no'],$address['address'],$address['town'],$address['city'],$address['state'],
				$address['pin_code'],$address['id']);
			return $this->db->query($query,$value);
		}

		public function remove_address($id) {
			$query = "DELETE FROM addresses WHERE id = ?";
			$value = array($id);
			return $this->db->query($query,$value);
		}

	
		public function update_address_details($address) {
			$field = $address['field'];
			$query = "UPDATE addresses SET `".$field."`=? WHERE id=?";
			$value = array($address['field_value'],$address['id']);
			return $this->db->query($query,$value);
		}

	}
?>
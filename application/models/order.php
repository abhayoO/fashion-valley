<?php
	class Order extends CI_Model {
		public function new_order($id) {
			$query = "INSERT INTO orders(created_at,user_id) VALUES(?,?)";
			$value = array(date("Y-m-d H:i:s"),$id);
			return $this->db->query($query,$value);
		}

		public function last_insert_order_id() {
			return $this->db->query("SELECT LAST_INSERT_ID() AS id")->row_array();
		}

		public function create_order_details($order) {
			$query = "INSERT INTO order_products(order_id,product_id,quantity) VALUES(?,?,?)";
			$value = array($order['order_id'],$order['product_id'],$order['qty']);
			return $this->db->query($query,$value);
		}

		public function get_all_orders_by_user_id($id){
			$query = "SELECT orders.id,orders.created_at,GROUP_CONCAT(products.name,' (Quantity: ',order_products.quantity,')') AS products
					FROM orders
					JOIN order_products ON order_products.order_id = orders.id
					JOIN products ON products.id = order_products.product_id
					WHERE orders.user_id=?
					GROUP BY orders.id";
			$value = array($id);
			return $this->db->query($query,$value)->result_array();

		}
		





	}








?>
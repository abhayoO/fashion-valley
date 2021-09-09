<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

	public function index() {
		$this->load->view("users/index");
	}

	public function new_user() {
		$this->load->view("users/newuser",['sign_in_target'=>'/users/new-user']);
	}

	public function sign_in() {
		$this->load->view("users/signin");
	}

	public function profile($task) {
		$user_data = $this->User->get_user_by_email($this->session->userdata('email'));
		$user_data['active_nav']='profile';
		$user_data['task']=$task;
		$user_data['partial_view']="partials/profile";
		//print_r($user_data);
		$this->load->view("users/detail",$user_data);
	}

	public function addresses() {
		$user_data['addresses_array'] = $this->Address->get_addresses_by_user_id($this->session->userdata('id'));
		$user_data['active_nav']='addresses';
		$user_data['partial_view']="partials/addr";
		//print_r($user_data);
		$this->load->view("users/detail",$user_data);
	}

	public function orders() {
		//print_r($user_data);
		$order_history =$this->Order->get_all_orders_by_user_id($this->session->userdata('id'));
		$user_data['order_history'] = $order_history;
		$user_data['active_nav']='orders';
		$user_data['partial_view']="orders/history";
		$this->load->view("users/detail",$user_data);
	}

	public function update() {
		$field_array = array('first_name','middle_name','last_name','mob_no','email','gender','dob');
		$changes_made = FALSE;
		$id = $this->input->post('id');
		foreach ($field_array AS $field) {
			if (!Empty($this->input->post($field))) {
				$user = array('field'=> $field,'field_value'=> $this->input->post($field),'id'=>$id);
				$this->User->edit_user($user);
				$changes_made = TRUE;
			}
		}
		if ($changes_made) {
			$this->session->set_flashdata("success","<div class='alert alert-success'><strong>
				Success! </strong> Changes to the user profile has been saved!</div>");
		}
		redirect("/my/profile/view");
	}

	public function create() {
		$validation_result = $this->User->validate($this->input->post());
		if ($validation_result == TRUE) {
			$user = $this->input->post();
			if (Empty($this->User->get_all_users())){
				$user['is_admin'] = 1; 
			} else {
				$user['is_admin'] = 0;
			}
			$this->User->add_user($user);
			$this->session->set_flashdata("success","<div class='col-md-10 col-md-offset-1 alert alert-success'><strong>
				Success! </strong> You have successfully registered, please user your credentials to log in!</div>");
			redirect("/users/sign-in");

		} else {
			$this->session->set_flashdata("errors",validation_errors());
			redirect("/users/new-user");
		}



	}






	
}

?>
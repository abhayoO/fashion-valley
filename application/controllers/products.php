<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	public function show() {
		$segments = $this->uri->segment_array();
		/*if(array_key_exists("3",$segments))
			$category_id = $this->Category->get_category_id_by_slug($this->uri->segment_array()['3']);*/
		if(array_key_exists("4",$segments)) {
			$subcategory_id = $this->Subcategory->get_subcategory_id_by_slug($this->uri->segment_array()['4']);
			$subcat_id = $subcategory_id['0']['id'];
			$products = $this->Product->get_all_products_by_subcat_id($subcat_id);
			$subcategories = $this->Subcategory->get_all_subcategories_in_that_category_by_subcategories_id($subcat_id);
		} else if(array_key_exists("3",$segments) && !array_key_exists("4",$segments)) {
			$category_id = $this->Category->get_category_id_by_slug($this->uri->segment_array()['3']);
			$subcategories = $this->Subcategory->get_all_subcategories_by_category_id($category_id['0']['id']);
			$group_subcat = array();
			foreach ($subcategories as $key => $value){
				array_push($group_subcat,$value['id']);
			}
			$products = $this->Product->get_all_products_by_group_subcat_id($group_subcat);
			$subcat_id = 0;
		} else {
			$subcategories = $this->Subcategory->get_all_subcategories();
			$products = array();
			$subcat_id = 0;
		}
		$this->load->view("products/show",array('products'=>$products,'subcat_id'=>$subcat_id,
			'subcategories'=>$subcategories));
	}

	public function edit($product_id) {
		$product = $this->Product->get_product_info_by_product_id($product_id);
		$subcat_id = explode(",",$product['subcategories_id'])[0];
		$product['subcategories'] = $this->Subcategory->get_all_subcategories_in_that_category_by_subcategories_id($subcat_id);
		$this->load->view("products/edit",$product);

	}

	public function delete($subcategory_id,$product_id) {
		$this->Product->delete_product_by_product_id($product_id);
		redirect("/products/show/".$subcategory_id);

	}
	public function update() {
		$field_array = array('name','unit_price','description');
		$changes_made = FALSE;
		$id = $this->input->post('id');
		foreach ($field_array AS $field) {
			if (!Empty($this->input->post($field))) {
				$product = array('field'=> $field,'field_value'=> $this->input->post($field),'id'=>$id);
				$this->Product->update_product_details($product);
				$changes_made = TRUE;
			}
		}
		if ($changes_made) {
			$this->session->set_flashdata("success","<div class='alert alert-success'><strong>
				Success! </strong> Changes to the product has been made!</div>");
		}
		redirect("/products/edit/".$this->input->post('id'));
	}

	public function create() {
		$product = array('name'=>$this->input->post('name'),'unit_price'=>$this->input->post('unit_price'),
			'description'=>$this->input->post('description'));
		$this->Product->add_product($product);
		$product_id = $this->Product->last_insert_product_id()['id'];
		foreach ($this->input->post('subcategories') AS $subcat_id) {
			$this->Product_subcategory->add_product_subcategory(array('id'=>$product_id,'sub_id'=>$subcat_id));
		}
		// upload product image. Check folder permission where image will be uploaded should be readable,writable
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'jpg|jpeg|png'; //allowed image format types to upload
		$config['max_size']	= '100'; //maximum allowed file size to upload in Kb
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $product_id.".jpeg"; //rename it to the product id
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		
		/*if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
            print_r($error); //debug it here 
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }*/
		
		redirect("/products/show/".$this->input->post('current_page'));
	}





	
}

?>
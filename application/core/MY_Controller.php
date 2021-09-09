<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $site_data;
    function __construct() {
        parent::__construct();

        $parent=$this->Category->get_all_categories();
		$child=$this->Subcategory->get_all_subcategories();
		//print_r($parent);
		//echo "<br />";
		//print_r($child);
		if(count($parent)>0){
			foreach ($parent as $key => $value) {
				$child_arr=array();
				foreach ($child as $childkey => $childvalue) {
					if($childvalue['category_id']==$value['id']){
						array_push($child_arr,$childvalue);
					}
				}
				$value['child']=$child_arr;
				$parent[$key]=$value;
			}
		}
        $this->site_data = array('nav_menu_hierarchy' => $parent);
    }
    
}
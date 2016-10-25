<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model');
		$this->load->model('category_model');

		$this->load->helper('url');

		$result = $this->product_model->getAllTable();

		$category = $this->category_model->getAllTable();

		foreach ($result as $key => $value) {
			foreach ($category as $k => $val) {
				if ($val->id == $value->category_id) {
					$value->category = $val->category;
				}
			}
		}
		$data['result'] = $result;
		$this->load->view('result_page_v', $data);
	}

	public function addproduct()
	{
		$this->load->model('product_model');
		$this->load->model('category_model');
		$this->load->library('form_validation');

		$config_validation = array(
			array(
				'field' => 'product',
				'label' => 'Вознаграждение',
				'rules' => 'required',
			),
			array(
				'field' => 'category_id',
				'label' => 'Категория',
				'rules' => 'required',
			),
			array(
				'field' => 'price',
				'label' => 'Price',
				'rules' => 'required',
			),
			array(
				'field' => 'available',
				'label' => 'Available',
				'rules' => 'required',
			),
		);

		$this->form_validation->set_rules($config_validation);

		$data['select'] = $this->category_model->getAllTable();
		
		$insert = array(
			'product' => $this->input->post('product'),
			'category_id' => $this->input->post('category_id'),
			'weight' => $this->input->post('weight'),
			'color' => $this->input->post('color'),
			'price' => $this->input->post('price'),
			'image' => $this->input->post('image'),
			'color' => $this->input->post('sale'),
			'available' => $this->input->post('available'),
		);

		if(!empty($insert)) {
			$this->product_model->addNewProduct($insert);	
		}		

		$this->load->view('addproduct_v', $data);
	}

	public function editproduct($id = '')
	{
		$this->load->model('product_model');
		$this->load->model('category_model');
		$this->load->helper('form');

		//заполненные данные
		$query = $this->product_model->getElementById($id);
		$category = $this->category_model->getQueryById($id);
		$query[0]->category = $category[0]->category;

		//список для селекта
		$select = $this->category_model->getAllTable();

		$result['query'] = $query[0];
		$result['select'] = $select;

		$this->load->view('editproduct_v', $result);
	}

	public function deleteproduct($id = '') 
	{
		$this->load->model('product_model');

		$this->product_model->deleteProductById($id);
		$this->load->view('deleteproduct_v');
	}

	public function addcategory() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('category_model');
		
		$config_validation = array(
			array(
				'field' => 'category',
				'label' => 'Категория',
				'rules' => 'required',
			),
			array(
				'field' => 'remuneration',
				'label' => 'Вознаграждение',
				'rules' => 'required',
			),
		);

		$this->form_validation->set_rules($config_validation);

		if ($this->form_validation->run() == FALSE) 
		{
			$data['result'] = "Ошибка, неправильно заполненные поля";
		}
		else {
			$data['result'] = "Успех";
		}

		$new_category = array(
			'category' => $this->input->post('category'),
			'marginality' => $this->input->post('marginality'),
			'remuneration' => $this->input->post('remuneration'),
		);		

		if(!empty($new_category)) {
			$this->category_model->addNewCategory($new_category);	
		}

		$this->load->view('addcategory_v', $data);

	}

	public function editcategory() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('category_model');
		
		$config_validation = array(
			array(
				'field' => 'category',
				'label' => 'Категория',
				'rules' => 'required',
			),
			array(
				'field' => 'remuneration',
				'label' => 'Вознаграждение',
				'rules' => 'required',
			),
		);

		$this->form_validation->set_rules($config_validation);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('editcategory_v');
		}
		else {
			$this->load->view('result_page_v');
		}
	}

	public function deletecategory($id) {
		$this->load->model('category_model');

		$this->category_model->getAllTable();

		$this->load->view('deletecategory_v');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
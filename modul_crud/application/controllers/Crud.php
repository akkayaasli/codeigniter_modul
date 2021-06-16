<?php 
	class Crud extends CI_Controller{
		public function index(){
			//$this->load->model('crud_model');

			$data['product_details']=$this->crud_model->getAllProducts();
			$this->load->view('crud_view',$data);
		}

		//INERT-----
		public function addProduct(){
			//echo "hey";
			$this->form_validation->set_rules('name','Product Name','trim|required');
			$this->form_validation->set_rules('price','Product Price','trim|required');
			$this->form_validation->set_rules('quantity','Product Quantity','trim|required');

			if($this->form_validation->run()==false){
				$data_error=[
					'error'=>validation_errors()
				];
				$this->session->set_flashdata($data_error);
			}
			else
			{
				$result=$this->crud_model->insertProduct([
					'name'=>$this->input->post('name'),
					'price'=>$this->input->post('price'),
					'quantity'=>$this->input->post('quantity')
				]);
				if($result)
				{
					$this->session->set_flashdata('inserted','basarili kayit');
				}
			}
			redirect('crud');
		}

		//-----INSERT

		//UPDATE*****
		public function editProduct($id){
			//echo $id;
			$data['singleProduct']=$this->crud_model->getSingleProduct($id);
			$this->load->view('edit_view',$data);
		}
		public function update($id){
			//echo $id;
			//echo "hey";
			$this->form_validation->set_rules('name','Product Name','trim|required');
			$this->form_validation->set_rules('price','Product Price','trim|required');
			$this->form_validation->set_rules('quantity','Product Quantity','trim|required');

			if($this->form_validation->run()==false){
				$data_error=[
					'error'=>validation_errors()
				];
				$this->session->set_flashdata($data_error);
			}
			else
			{
				$result=$this->crud_model->updateProduct([
					'name'=>$this->input->post('name'),
					'price'=>$this->input->post('price'),
					'quantity'=>$this->input->post('quantity')
				],$id);
				if($result)
				{
					$this->session->set_flashdata('updated','basarili guncelleme');
				}
			}
			redirect('crud');
		}

		//***UPDATE

		//DELETE***
		public function deleteProduct($id){
			//echo $id;
			$result=$this->crud_model->deleteItem($id);
			if($result==true){
				$this->session->set_flashdata('deleted',"silme işlemi TAMAM");
			}
			redirect('crud');
		}
		//****DELETE
	}
?>

<!--
Flashdata 
 Kullanıcıya bilgilendirme mesajları göstermek için kullanılır. Mesela bir kayıt formu ile üye kaydı yapılırken işlem sonucuna göre iletilecek durum mesajı, flashdata üzerine atanır ve kullanıcıya gösterilir.Kullanım;
 $this->session->set_flashdata('veri', 'gösterilecekMesaj');
-->
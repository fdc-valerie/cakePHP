<?php 
class CustomersController extends AppController{
	function beforeFilter(){
		parent::beforeFilter();
		$this->loadModel('Customer');
	}

	public function index(){
		// $customer = $this->paginate('Customer');

		$customers = $this->paginate=array(
				'Customer'=> array(
					'fields' => array(
						'Customer.*'
					),
					'limit' => 5,
				)
			);
		$customers = $this->paginate('Customer');
		$this->set('customers',$customers);
	}

	public function registration(){
		if($this->request->is('post')){
			if($this->Customer->save($this->request->data)){
				$message='Successfully Added';
				$this->Flash->success($message, array(
					'key' => 'postive'
					)
				);
				$this->redirect(array(
						'controller' => 'Customers', 
						'action' => 'index'
					)
				);
			}
		}
	}

	public function edit($id = null){
		if(!$id){
			$message= 'Error! You need an id inorder to update customer information';
				$this->Flash->error($message,array(
					'key' => 'positive'
				)
			);
		}
		if($this->request->is(array('post','put'))){

			$this->Customer->id=$id;

			$this->Customer->save($this->request->data);
				$message = 'Data Successfully Updated!';
				$this->Flash->success($message, array(
					'key' => 'positive'
					)
				);
				$this->redirect(array(
					'controller' => 'Customers', 
						'action' => 'index'
						)
					);
		} else {
			$data = $this->Customer->findByid($id);
			$this->request->data = $data;
		}
			
	}

	public function delete($id){
		$this->autoRender=false;
		$this->Customer->id=$id;
		$this->Customer->delete($id);
		$this->redirect(array(
						'controller' => 'Customers', 
						'action' => 'index'
					)
				);

	}
}

 ?>
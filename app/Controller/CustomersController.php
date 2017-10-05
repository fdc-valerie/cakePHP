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

	public function edit($id){
		if($this->request->is('post')){
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
		}
			$this->set('customers', $this->Customer->findByid($id));
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
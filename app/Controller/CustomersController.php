<?php 
class CustomersController extends AppController{
	function beforeFilter(){
		parent::beforeFilter();
	}
	public $uses=array('Pet','Customer','Service');

	public function index(){
		// $customer = $this->paginate('Customer');
		$this->Customer->virtualFields['birthdate'] = 'YEAR(CURDATE()) - YEAR(birthdate) - IF(STR_TO_DATE(CONCAT(YEAR(CURDATE()), "-", MONTH(birthdate), "-", DAY(birthdate)) ,"%Y-%c-%e") > CURDATE(), 1, 0)';
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
			$this->Customer->create();
			if($this->Customer->save($this->request->data)){
				$message = 'Successfully added!';
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
			if(!sizeof($data) > 0){
				$this->redirect(array('controller' => 'customers', 'action' => 'index'));
			}
		}
			
	}

	public function delete($id){
		$this->autoRender=false;
		
		$customer_id = "";
		$petid = "";

		// $pets=$this->Pet->find('all',array(
		// 	'joins' => array(
		// 		array(
		// 		'table' => 'customers',
		//             'alias' => 'customer',
		//             'type' => 'INNER',
		//             'conditions' => array(
		//                     'Pet.customer_id=customer.id'
		//                 )
		// 			),
		// 		),
		// 	'conditions' => array(
		// 		'Pet.customer_id' => $id,
		// 		),
		// 	)
		// );

		// if($this->Customer->delete($id)){
		// 	$message = 'Successfully deleted!';
		// 		$this->Flash->success($message, array(
		// 			'key' => 'positive'
		// 			)
		// 		);
		// 	foreach ($pets as $pet){
		// 		$this->Pet->delete($pet['Pet']['id']);
		// 	}
		// 	$this->redirect(array(
		// 	'controller' => 'Customers', 
		// 	'action' => 'index'
		// 		)
		// 	);
		// }
		$pets = $this->Pet->find('all',array(
				'joins' => array(
					array(
						'table' => 'services',
						'alias' => 'Service',
						'type' => 'INNER',
						'conditions' => array(
							'Pet.id = Service.pet_id'
						)
					)
				),
				'conditions' => array(
					'Pet.customer_id' => $id
				),
				'fields' => array('Pet.*','Service.*'),
			)
		);
		if($pets){
			foreach($pets as $pet) {
				$pet_id = $pet['Pet']['id'];
				$customer_id = $pet['Pet']['customer_id'];
				$this->Service->id = $pet['Service']['id'];
				$this->Service->delete($pet['Service']['id']);
				$this->Pet->id = $pet_id;
				$this->Pet->delete($pet_id);
			}
		}
		$this->Customer->id = (isset($customer_id)) ? $customer_id : $id;
		$id = (isset($customer_id)) ? $customer_id : $id;
		if($this->Customer->delete($id)){
			$message = 'Successfully deleted!';
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
	}
}

 ?>
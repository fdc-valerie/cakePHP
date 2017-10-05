<?php 

class ServicesController extends AppController{
	public $uses= array('Service','Pet');
	var $helpers = array('Html', 'Form','Csv');

	public function index(){
		$id=$this->request->pass[0];
		pr($id);
	}
	public function add($id){
		if($this->request->is('post')){
			$this->Pet->id=$id;
			$this->Service->create();
			if($this->Service->save($this->request->data)){
				$message= 'Service is already added! Thanks!';
					$this->Flash->success($message,array(
						'key' => 'positive'
					)
				);
			}
		}
		$this->set('pets', $this->Pet->findByid($id));
	}

	public function getServices(){
		$this->autoRender = false;
		$data = $this->Service->find('all');
		return json_encode($data);
	}
	public function services($id){
		$id = $this->request->pass[0];
		$services=$this->set('services', $this->Service->find('all',array(
			'joins' => array(
				array(
				'table' => 'pets',
		            'alias' => 'pet',
		            'type' => 'INNER',
		            'conditions' => array(
		                  'Service.pet_id' => $id,
		                    'pet.id' => $id,
		                    'Service.pet_id=pet.id'
		                )
					),
				),
			'fields' => array(
						'Service.*',
						'pet.*',
					),
			
				)
			)
		);
	}
	public function edit($id){
		if($this->request->is('post')){
			$this->Service->id=$id;
			if($this->Service->save($this->request->data)){
				$message= 'Service is already updated! You can now view it in Service Calendar!';
					$this->Flash->success($message,array(
						'key' => 'positive'
					)
				);
			}
		}
		$this->set('services', $this->Service->findByid($id));
	}

	public function delete($id){
		$this->autoRender=false;
		$this->Service->id=$id;
		$this->Service->delete($id);
		$this->redirect($this->referer());
	}

	public function download(){
	$data = $this->Service->find('all',array(
			'conditions' => array(
				'Service.pet_id' => $this->request->params['pass'][0]
			)
		)
	);
	$this->set('services', $data);
	$this->layout = null;
	$this->autoLayout = false;
	Configure::write('debug', '0');
  }

	}
 ?>
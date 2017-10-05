<?php 
class PetsController extends AppController{

	function beforeFilter(){
		parent::beforeFilter();
	}
	public $uses =array('Customer','Pet');
	
	public function index($id){
		$id = $this->request->pass[0];
		$pets=$this->set('pets', $this->Pet->find('all',array(
			'joins' => array(
				array(
				'table' => 'customers',
		            'alias' => 'customer',
		            'type' => 'INNER',
		            'conditions' => array(
		                  'Pet.customer_id' => $id,
		                    'customer.id' => $id,
		                    'Pet.customer_id=customer.id'
		                )
					),
				),
			'fields' => array(
						'customer.*',
						'Pet.*',
					),
			
				)
			)
		);
	}
	public function add($id){
		if($this->request->is('post')){
			$this->Pet->create();
			if(empty($this->request->data)){
			echo 'Invalid! Picture must be less than 5mb. <br>'; 
			}else{
				$data=$this->request->data;
				$pet = $data['Pet'];

				$this->Customer->id=$id;

				$fileUpload= array(
					'name' => $pet['name'],
					'breed' => $pet['breed'],
					'age' => $pet['age'],
					'customer_id' => $pet['customer_id'],
					'gender' => $pet['gender'],
					'species'=> $pet['species'],
					'pet_picture'=> time().$pet['pet_picture']['name']
				);

				$tmp=$pet['pet_picture']['tmp_name'];
				$pic=time().$pet['pet_picture']['name'];

				if($this->Pet->save($fileUpload)){
					if(move_uploaded_file($tmp,IMAGES.'image'.DS.$pic))
					$message='Successfully added!';
					$this->Flash->success($message,array(
						'key' => 'positive'
						)
					);
					$this->redirect($this->referer());
				}else{
					echo 'Error! Cannot move the file';
				}
			}

		}
			$this->set('customers', $this->Customer->findByid($id));
	}

	public function edit($id){
		if($this->request->is('post')){
			if(empty($this->request->data)){
			echo 'Invalid! Picture must be less than 5mb. <br>';
		}else{
			$data =$this->request->data;
			$pet=$data['Pet'];

			$directory = WWW_ROOT . 'img'. '/' .'image';

			$fileUpload= array(
					'name' => $pet['name'],
					'breed' => $pet['breed'],
					'age' => $pet['age'],
					/*'customer_id' => $pet['customer_id'],*/
					'gender' => $pet['gender'],
					'species'=> $pet['species'],
				);
			$pictureName = $this->Pet->find('first',
				array(
					'fields' => array('pet_picture'),
					'conditions' => array('id' =>$id)
					)
			);
			$tmp = $pet['pet_picture']['tmp_name'];
			$pic = $pet['pet_picture'];
			
			if($pic['size'] == 0){
				$this->Pet->validate['pet_picture'] = array();
			}else{
				unlink($directory.DIRECTORY_SEPARATOR.$pictureName['Pet']['pet_picture']);
					$fileUpload['pet_picture']=time().$pic['name'];
			}
		
			$this->Pet->id=$id;
			if($this->Pet->save($fileUpload)){
				if($pic['size']){
					move_uploaded_file($tmp,IMAGES.'image'.DS.time().$pic['name']);
					$message = 'Successfully updated!';
					$this->Flash->success($message,array(
						'key' => 'positive'
						)
					);
				$this->redirect($this->referer());
				}
			}
		}
	}
			
			$this->set('pets',$this->Pet->findByid($id));
	}

	public function delete($id){
		
		$this->autoRender=false;
		$this->Pet->id=$id;
		$this->Pet->delete($id);
		$this->redirect($this->referer());
	}

}
?>
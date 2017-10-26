<?php 

class UsersController extends AppController{

	public $uses =array('Users','Customer');

	public function index(){
		$id='';
		$data = $this->Session->read('Auth')['User'];
		$this->set('users',$data);
		// pr($data);
		$id=$this->Session->read('Auth')['User']['id'];
		if($this->request->is('post')){	  
			if($this->Users->save($this->request->data)){
				if($this->request->data['Users']['id'] == AuthComponent::User('id')){ 
					$this->Session->write('Auth.User.first_name', $this->request->data['Users']['first_name']); 
					$this->Session->write('Auth.User.middle_name', $this->request->data['Users']['middle_name']); 
					$this->Session->write('Auth.User.last_name', $this->request->data['Users']['last_name']); 
					$this->Session->write('Auth.User.username', $this->request->data['Users']['username']);  
					$this->Session->write('Auth.User.password', $this->request->data['Users']['password']=AuthComponent::password($this->request->data['Users']['password']));            
					$this->Session->write('Auth.User', array_merge(AuthComponent::User(), $this->request->data['Users'])
					);   
				}
					$message ='Success! You data has been updated!';
						$this->Flash->success($message,array(
							'key' => 'positive'
						)
					);
			    }else{
		            $this->Session->setFlash('The user could not be saved. Please, try again.');
			} 
		}		 		
	}

	public function login(){
		if(isset($this->Session->read('Auth')['User'])){
   			return $this->redirect($this->Auth->redirectUrl());
  		}
		if($this->request->is('post')){
			if($this->request->data['Users']['action'] == 'login'){
				$username = $this->request->data['Users']['username'];
				$password = AuthComponent::password($this->request->data['Users']['password']);
				$conditions = array(
					'Users.username' => $username,
					'Users.password' => $password
				);

				$data = $this->Users->find('first', array(
					'conditions' => $conditions
				));
				if (isset($data['Users'])) {
					if ($data['Users']['status'] == 0) {
					$message = __('Your account is not activated');
					$this->Flash->success('<div class="alert alert-warning">'.$message.'</div>');
					}else if($this->Auth->login($data['Users'])) {
						$this->redirect($this->Auth->redirectUrl());
					}
				}else{
					$message = __('Username or Password is incorrect');
					$this->Flash->error('<div class="alert alert-danger">'.$message.'</div>');
				}
			}else{
				$this->autoRender=false;
			 	if($this->request->is('post')){
				 	$this->Users->create();
					$this->request->data['Users']['password']=AuthComponent::password($this->request->data['Users']['password']);
				 		$this->request->data['Users']['date_created'] = date('Y-m-d');
				 		if($this->Users->save($this->request->data)){
				 			$message ='Success! You can now log in!';
				 			$this->Flash->success($message,array(
									'key' => 'positive'
									)
								);
				 			return json_encode(array('message' =>  'success'));
					 	}else{
					 		return json_encode(array('message' => 'failed','form_error'=>$this->Users->validationErrors));
					 	}
			 		}
				}
			}
 		}

 	public function logout(){
		return $this->redirect($this->Auth->logout());
 	}
 }
 ?>


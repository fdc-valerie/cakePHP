<div class="col-md-9  admin-content" id="update-profile">
        <div id="loginbox" style="margin-left: 0;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                       
                        <div class="panel-title">Edit User Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

						<?php echo $this->Flash->render('positive') ?>
						<?php   echo $this->Form->create('Customer',array(
							'url' => '../users/edit')
						); 
								echo $this->Form->input('username', array(
						            'class' => 'form-control',
						            'value' => $users['username']
						            )
						        );
						        echo $this->Form->input('password', array(
						            'class' => 'form-control',
						            'value' => $users['password'],
						            'type' => 'password'
						            )
						        );
						        echo $this->Form->input('first_name', array(
						            'class' => 'form-control',
						            'value' => $users['first_name']
						            )
						        );
						        echo $this->Form->input('middle_name', array(
						            'class' => 'form-control',
						            'value' => $users['middle_name']
 						            )
						        );
						        echo $this->Form->input('last_name', array(
						            'class' => 'form-control',
						            'value' => $users['last_name']
			                    	)
						        );
						   
						        echo $this->Form->button(__('Update'), 
						        [
						        'type'=>'Add', 
						        'class'  => 'btn btn-warning',
						        ]
						      );
						      echo $this->Form->end();
						?> 
					</div>
			</div>
		</div>
	</div>
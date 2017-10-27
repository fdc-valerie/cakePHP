 <ul class="breadcrumb">
                    <li><a href="../../users/index">Home</a></li>
                    <li><a href="../../customers/index">Customers</a></li>
                    <li class="active">Add Pet</li>
</ul>

<div class="container">
    <div id="loginbox" style="margin-left: 250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title">Pet Information</div>
            </div>     
                <div style="padding-top:30px" class="panel-body" >
                    <?php 
                        //  $customer = (isset($customers['Customer'])) ? $customers['Customer'] : header('Location: http://local.cakephp.com/customers/index/');
                        // // $customer=$customers['Customer'];

                    ?>
                        <?php echo $this->Flash->render('positive') ?>
                                <?php   echo $this->Form->create('Pet',array(
                                'type' => 'file'    )
                                );
                                        echo $this->Form->input('customer_id',array(
                                            'type'=>'hidden',
                                            // 'value' =>  $this->request->pass[0],
                                            'value' =>  (isset($this->request->pass[0])) ? $this->request->pass[0] : ''
                                            )
                                           
                                        );
                                		echo $this->Form->input('name',array(
                                			'class' => 'form-control'
                                			)
                                		);
                                         echo $this->Form->input('species', array(
                                            'class' => 'form-control'
                                            )
                                        );
                                		echo $this->Form->input('breed',array(
                                			'class' => 'form-control'	
                                			)
                                		);
                                        echo $this->Form->input('gender', array(
                                        'options' => array(
                                           'male' => 'male',
                                           'female' => 'female'
                                            ),
                                        'empty' => '(choose one)',
                                        'class' => 'form-control'
                                            )
                                        );
                                		echo $this->Form->input('age',array(
                                			'class' => 'form-control'	
                                			)
                                		);
                                        echo $this->Form->input('pet_picture',array(
                                            'type' => 'file' ,
                                            )
                                        );
                                		 echo $this->Form->button(__('Add'), 
                    					[
                    					'type'=>'Add', 
                    					'class'  => 'btn btn-primary',
                    					]
                    					);
                    					echo $this->Form->end();
                        ?>
            </div>
        </div>
    </div>
</div>
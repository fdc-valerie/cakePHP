 <ul class="breadcrumb">
                    <li><a href="/users/index">Home</a></li>
                    <li><a href="../../customers/index">Customers</a></li>
                    <li class="active">Edit Pet Info</li>

</ul>
<button class ="btn btn-danger"><a href = "javascript:history.back()">Back to previous page</a></button>
<div class="container">

<div id="loginbox" style="margin-left: 250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">    

            <div class="panel panel-default" >
                    <div class="panel-heading">
                       
                        <div class="panel-title">Pet Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

<?php 
// $customer=$customers['Customer'];
$pet=$pets['Pet'];
?>

<?php echo $this->Flash->render('positive') ?>
            <?php   echo $this->Form->create('Pet',array(
                'type' => 'file')
            );
                    // echo $this->Form->input('customer_id',array(
                    //     'type'=>'hidden',
                    //     'value' =>  $customer['id']
                    //         )
                    // );
            		echo $this->Form->input('name',array(
            			'class' => 'form-control',
                        'value' => $pet['name']
            			)
            		);
                     echo $this->Form->input('species', array(
                        'class' => 'form-control',
                        'value' =>  $pet['species']
                        )
                    );
            		echo $this->Form->input('breed',array(
            			'class' => 'form-control',
                        'value'	=> $pet['breed']
            			)
            		);
                    echo $this->Form->input('gender', array(
                    'options' => array(
                       'male' => 'male',
                       'female' => 'female'
                        ),
                    'empty' => '(choose one)',
                    'class' => 'form-control',
                    'value' => $pet['gender'],
                    )
                );

            		echo $this->Form->input('age',array(
            			'class' => 'form-control',
                        'value' => $pet['age']	
            			)
            		);

            		echo $this->Form->input('pet_picture',array(
                        'type' => 'file' ,
                        'required' =>false
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


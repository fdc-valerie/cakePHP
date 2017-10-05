 <ul class="breadcrumb">
                    <li><a href="../users/index">Home</a></li>
                    <li><a href="../../customers/index">
                    Customers</a></li>
                    <li class="active">Edit Pet Info</li>

</ul>
<div class="container">    
        <div id="loginbox" style="margin-left: 250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                       
                        <div class="panel-title">Edit Customer Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
<?php 
$data=$customers['Customer'];

 ?>
<?php echo $this->Flash->render('positive') ?>
<?php   echo $this->Form->create('Customer'); 
        echo $this->Form->input('first_name', array(
            'class' => 'form-control',
            'value' => $data['first_name']
            )
        );
        echo $this->Form->input('middle_name', array(
            'class'=> 'form-control',
            'value' => $data['middle_name']
            )
        );
        echo $this->Form->input('last_name', array(
            'class' => 'form-control',
            'value' => $data['last_name']
            )
        );
        echo $this->Form->input('contact_no', array(
            'class'=> 'form-control',
            'value' => $data['contact_no']
            )
        );
        echo $this->Form->input('address', array(
            'class'=> 'form-control',
            'value' => $data['address']
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
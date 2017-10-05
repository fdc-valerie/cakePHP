<div class="container">    
        <div id="loginbox" style="margin-left: 250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                       
                        <div class="panel-title">Customer Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
 <?php echo $this->Flash->render('positive') ?>
<?php   echo $this->Form->create('Customer'); 
        echo $this->Form->input('first_name', array('class' => 'form-control'));
        echo $this->Form->input('middle_name', array('class'=> 'form-control'));
        echo $this->Form->input('last_name', array('class' => 'form-control'));
        echo $this->Form->input('contact_no', array('class'=> 'form-control'));
        echo $this->Form->input('address', array('class'=> 'form-control'));
        echo $this->Form->button(__('Add'), 
        [
        'type'=>'Add', 
        'class'  => 'btn btn-primary',
        ]
      );
      echo $this->Form->end();
?>   
                       <!--  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="registration" class="form-horizontal" role="form" method="post" action ="../customers/add">
                                    
                            <div style="margin-bottom: 25px" class="input-group,col-md-9">
                                <input type="text" class="form-control"  name="data[Customer][first_name]"  placeholder="First Name"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group,col-md-9">                       
                                <input type="text" class="form-control"  name="data[Customer][middle_name]" placeholder="Middle Initial Only">
                            </div>

                             <div style="margin-bottom: 25px" class="input-group,col-md-9">                       
                                <input type="text" class="form-control"  name="data[Customer][last_name]" placeholder="Last Name">
                            </div>

                             <div style="margin-bottom: 25px" class="input-group,col-md-9">                       
                                <input type="text" class="form-control"  name="data[Customer][middle_name]" placeholder="Middle Initial Only">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group,col-md-9">                       
                                <input type="text" class="form-control"  name="data[Customer][contact_no]" placeholder="Numbers Only">
                            </div>

                             <div style="margin-bottom: 25px" class="input-group,col-md-9">                       
                                <input type="text" class="form-control"  name="data[Customer][adress]" placeholder="Address">
                            </div>
                               
                                <div style="margin-bottom: 25px" class="input-group">
                                    
                                       <button class="btn btn-primary" name="data[User][submit]" type="submit" value="Submit">Submit</button>
                                   
                                </div>

                            </div>                     
                        </div>  
                    </div> -->

<!-- <script>
$(document).ready(function() {
    $('#registration').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
           [Customer][first_name]": {
                validators: {
                    notEmpty: {
                        message: 'The Username is required'
                    },
                  }
                },
            [User][password]: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            },
           
        }
    });
});
</script>    
 -->
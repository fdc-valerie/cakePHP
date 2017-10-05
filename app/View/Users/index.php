      
  <ul class="breadcrumb">
                    <li class="active">Home</li>
                    <li><a href="http://local.cakephp.com/services">View Scheduled Services</a></li>
                    <li><a href="../../customers/index">
                    Customers</a></li>
                    
</ul>

	 <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li class="active" ><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li ><a href="" data-target-id="update-profile"><i class="glyphicon glyphicon-lock"></i>Update Profile</a></li>
                </ul>
            </div>
	

<div class="col-md-9  admin-content" id="update-profile">
        <div id="loginbox" style="margin-left: 0;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                    <?php echo $this->Flash->render('positive') ?>   
                        <div class="panel-title">Edit User Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

						<?php echo $this->Flash->render('positive') ?>
						<?php   echo $this->Form->create('Users'); 
								echo $this->Form->input('id', array(
						            'class' => 'form-control',
						            'value' => $users['id'],
						            'type' => 'hidden'
						            )
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


    <script>
	    $(function() {
		    $('#profile-image1').on('click', function() {
		        $('#profile-image-upload').click();
		    	});
			});   


         $(document).ready(function()
      {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });    
              </script> 
 
<div class="container">
            <div class="col-md-9  admin-content" id="profile">
				<h2>Welcome to <strong>PetsintheCity</strong></h2>
					<div class="row">
						<div class="col-md-7 ">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>User Profile</h3></div>
									<div class="panel-body">
										<div class="box box-info">
										<div class="box-body">
										<div class="col-sm-6">
											<div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 

										<input id="profile-image-upload" class="hidden" type="file">
										<div style="color:#999;" >click here to change profile image</div>
										<!--Upload Image Js And Css

									</div>

										<!-- /input-group -->
								</div>
							</div>
				        <div class="col-sm-6">
				        	<h4 style="color:#00b1b1;"><?php echo  $users['username']; ?> </h4></span>
				          	<span><p>Aspirant</p></span>            
				        </div>
				        <div class="clearfix"></div>
					        <hr style="margin:5px 0 5px 0;">
					        <div class="col-sm-5 col-xs-6 tital " >
								ID:
							</div>
							<div class="col-sm-7 col-xs-6 ">
								<?php echo  $users['id']; ?>
								
							</div>
	          
							<div class="col-sm-5 col-xs-6 tital " >
								First Name:
							</div>
							<div class="col-sm-7 col-xs-6 ">
								<?php echo  $users['first_name']; ?>
								
							</div>
							<div class="col-sm-5 col-xs-6 tital " >
								Middle Name:
							</div>
							<div class="col-sm-7">
								<?php echo  $users['middle_name']; ?>
							</div>

							<div class="col-sm-5 col-xs-6 tital " >
								Last Name:
							</div>
							<div class="col-sm-7">
								<?php echo  $users['last_name']; ?>
							</div>

							<div class="col-sm-5 col-xs-6 tital " >
							Date Joined:
							</div>
							<div class="col-sm-7">
							<?php echo   date('F j, Y',strtotime($users['date_created'])); ?>
							</div>
						</div>
					
 <div class="container">    
        <div id="loginbox" style="margin-top:150px;margin-left: 250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
        <?php echo $this->Flash->render('positive') ?>                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>LOGIN</strong>
                        </div>
                    </div>     
 <?php echo $this->Flash->render('positive') ?>
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            

                        <form id="loginform" class="form-horizontal" role="form" method="post" action ="../users/login">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control"  name="data[Users][username]"  placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control"  name="data[Users][password]" placeholder="password">
                                    </div>
                                
                                <input type="hidden" class="form-control"  name="data[Users][action]" value="login">
                          
                                  
                              
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                   </div>


                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                       <button class="btn btn-primary" name="data[User][submit]" type="submit" value="Submit">  Login</a>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <strong>Create</strong> Account
                            </div>
                            <div style="float:right; font-size: 85%; position: relative; top:-30px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  

                    <div style="padding-top:30px" class="panel-body" >

                        
                    <?php echo $this->Form->create('Users',array('id' => 'frmRegister'));
                        echo $this->Form->input('first_name', array(
                            'class'=>'form-control')
                        );
                        echo $this->Form->input('middle_name', array(
                            'class'=>'form-control'
                            )                            
                        );
                        echo $this->Form->input('last_name', array(
                           'class'=> 'form-control' 
                           )
                        );
                        echo $this->Form->input('username', array(
                            'class' => 'form-control')
                        );
                        echo "<div class='container col-md-12' id='error' style='display:none'><span></span></div>";
                        echo $this->Form->input('action',array('value' => 'register','type'=>'hidden')); 

                        echo $this->Form->input('password', array(
                            'class' => 'form-control',
                            'type' => 'password'
                            )
                        );
                        echo $this->Form->button(__('Add'), array(
                            'type'=>'submit', 
                            'class'  => 'btn btn-primary',
                            )
                        );
                         echo $this->Form->end();

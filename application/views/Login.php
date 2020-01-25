<style>

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

</style>
 <br>
<br><br><br><br><br>  
<!-----login page----------------------------------------->

<div class="container">
  <div class="row">
 <div class="main-content col-lg-12 p-0 offset-lg-1">
  <table class="col-lg-12">
    <tr>
      <td><div class="col-lg-8">
           <li class="list-group-item p-4">
                    <div class="col-sm-12 col-md-10">
            <center>   <strong class="text-muted d-block mb-4">Login</strong></center>
                          <?php
              $data = array(
                'name' => 'frmLogin',
                'id' => 'frmLogin',
                'class' => 'form-vertical'
              );
                echo form_open('Login_controller/authenticate', $data);  
                //echo validation_errors();
                ?>
            <div class="imgcontainer">
                             <img src="<?php echo base_url('assets/img/Login_img.jpg');?>" alt="Login_image" class="avatar">
                           </div>


                           <div class="form-group">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="material-icons">person</i></span>
                                </div>
                                <input type="text" id="user_"  name="user_" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </div>
                            </div>
                          
                            
                            <div class="form-group">
                              <input type="password"  name="pwd"class="form-control" id="inputPassword4" placeholder="Password" value=""> </div>
                              <a href="forget_password">Forget Password?</a>
                               <div class="form-group mb-0">
                       <center> <button type="submit" class="btn btn-accent">Login</button></center>
                      </div>
                  <?php
            echo form_close();  
          ?>
         </div>
                  </li>
                </div>
             </td>
             <td>





<!-----registration form ---------------------->

         <div class="col-lg-8">
                  <li class="list-group-item p-4">
                    <div class="col-sm-12 col-md-10">
                          <strong class="text-muted d-block mb-2">Registration Form</strong>
                          <br>
                          
                         <form method="post" action="<?php echo site_url('Registration_controller/savingdata1');?>" class="form-horizontal row-fluid" id="form102" name="form102">
                        
                              
                              <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="form-control" id="txtUsername"  name="txtUsername" placeholder="Username Name" >
                             </div>
                              <br>

                               <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="form-control" id="userid" name="userid" placeholder="User Id" >
                             </div>
                              <br>

                            
                              <div class="form-group col-md-18">
                                <input type="text" class="form-control" id="validationServer01" placeholder="Contact No"
                                id="contact_no" name="contact_no"  required>
                              </div> 

                              <div class="form-group col-md-18">
                              <select class="form-control"  name="txtquestion" id="txtquestion">
                                <option selected>Question</option>
                                <option>What is your nickname </option>
                                <option>What is your first school name</option>
                                <option>Where do you live</option>
                              </select> 
                            </div>
                              <div class="form-group col-md-18">
                                <input type="text" class="form-control" id="txtanswer" name="txtanswer" placeholder="Answer"  required>
                              </div> 

                                <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <input type="password" class="form-control" id="txtPwd"  name="txtPwd"  placeholder="Password">
                            <span class="input-group-append">
                              <span class="input-group-text">
                                <i class="material-icons">lock</i>
                              </span>
                            </span>
                          </div>
                        </div>

                            
                        </div>
                             <center> <button type="submit" class="btn btn-accent">Submit</button>
                              </center>
                            </form>

                            </div>
                          </li>
                      </form>
                    </div>
                      </td></tr></table>        
        </div></div></div>



                         
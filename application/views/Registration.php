<br>
<br><br><br><br><br>   
          <center>  <div class="container col-sm-5">          
                
                    <li class="list-group-item p-3">
                    <div class="col-sm-12 col-md-6">
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
                                <input type="text" class="form-control" id="validationServer01" placeholder="Email"  
                                id="email_id" name="email_id" required>
                              </div> 
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
                              <button type="submit" class="btn btn-accent">Submit</button>
                              </center>
                            </form>

                            </div>
                          </li>
                          
                        </div>
                        </center>
                            
                         

    <div class="container-fluid">
      <div class="row">
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white"><div class="row">
             
              <div class="col-lg-10">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                <form>
                   <div class="col-sm-12 col-md-12 mb-3">
                  <?php $r=1;?>
                  <?php foreach($ques as $item){
                    ;
                    ?>
                    <div class="card-body p-0 pb-3 text-center">

                    <table class="table mb-0">
                      <tbody>
                        <tr>
                          <td>  
                           <strong class="text-muted d-block mb-2"> 
                                 QUESTION:  <?php echo $r++;?>
                                <?php echo $item->Test_Question ;?>
                              
                           </strong>
                          </td>
                        </tr>
                          
                      <tr>
                        <td>
                           <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                             <label class="custom-control-label"  for="formsRadioDefault">
                            <?php echo $item->Option1 ;?></label>
                        </td>
                      </tr>

                 <tr>
                    <td>
                        <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                        <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option2 ;?></label></td></tr><tr>
                 <td>  <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option3 ;?></label></td></tr><tr>
                   
                   <td><input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option4 ;?></label>
                    </td>
                        </tr>
                         </tbody>
                    </table>
                  <?php }?></div>
               
               </div>
                  </div>
              
     
              </div>
            
            </div>
          </div>
        </main>
      </div>
    </div>
    